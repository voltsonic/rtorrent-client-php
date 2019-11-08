<?php

namespace Voltsonic\rTorrent\Guzzle;

use ErrorException;
use GuzzleHttp;
use Psr\Http\Message\ResponseInterface;
use XMLReader;

/**
 * Class RequestRPC
 * @package Voltsonic\rTorrent\Guzzle
 */
class RequestRPC {
    /**
     * @var GuzzleHttp\Client
     */
    protected $guzzle;
    /**
     * @var string
     */
    private $rpc_address;
    /**
     * @var array
     */
    private $guzzleOptions;
    /**
     * @var string
     */
    private $tempfilePrefix;
    /**
     * @var false|string
     */
    private $tempDir = false;

    /**
     * RequestRPC constructor.
     * @param string $rpc_address
     * @param array $guzzleOptions
     * @param bool $configureTempDirectory
     * @param string $configureTempDirectorySrc if relative is used it starts from the projects root (project where this is included, not the library itself).
     * @param string $tempfilePrefix
     */
    public function __construct(
        string $rpc_address,
        array $guzzleOptions = [],
        $configureTempDirectory = true,
        $configureTempDirectorySrc = './var/rtorrent.streams/',
        $tempfilePrefix = 'stm'
    )
    {
        $this->rpc_address = $rpc_address;
        $this->guzzleOptions = $guzzleOptions;
        $this->tempfilePrefix = $tempfilePrefix;

        if($configureTempDirectory !== false){
            $this->tempDir = ($configureTempDirectorySrc === true)
                ?sys_get_temp_dir()
                :$configureTempDirectorySrc;
            if(!file_exists($this->tempDir)) mkdir($this->tempDir, 0777, true);
        }
    }
    public function guzzleReset(): RequestRPC
    {
        $this->guzzle = new GuzzleHttp\Client(
            $this->guzzleOptions +
            [ 'base_uri' => $this->rpc_address ]);
        return $this;
    }

    protected function xmlrpcEncode(string $method, array $params = [], array $xmlrpc_output_options = []){
        return xmlrpc_encode_request($method, $params, $xmlrpc_output_options);
    }

    protected function post(
        string $method,
        array $params = [],
        array $xmlrpc_output_options = [],
        array $guzzle_extras = []
    ): ResponseInterface {
        return $this->guzzle->post('', [
                'body' => $this->xmlrpcEncode($method, $params, $xmlrpc_output_options)
            ] + $guzzle_extras);
    }

    protected $temps = [];

    /**
     * @return string
     * @throws ErrorException
     */
    protected function streamCreateFile(): string {
        if(!$this->tempDir)
            throw new ErrorException("Enable streaming for this feature.");
        $this->temps[]= ($tmp = tempnam($this->tempDir, $this->tempfilePrefix));
        return $tmp;
    }


    /**
     * @param string $method
     * @param array $params
     * @param bool $stream
     * @param array $xmlrpc_output_options
     * @return ResponseRPC
     * @throws ErrorException
     */
    public function rpc(
        string $method,
        $params = [],
        bool $stream = true,
        array $xmlrpc_output_options = []
    ): ResponseRPC {
        // Create temp (handles unlinking on class destruction)
        $tmp = $stream
            ?$this->streamCreateFile()
            :false;

        $postExtras = [];
        if($stream)
            $postExtras['save_to'] = $tmp;

        // Save to temp
        $Post = $this->post(
            $method,
            $params,
            $xmlrpc_output_options,
            $postExtras);

        // Test for errors
        $faultTest = $this->testForFault($method, $stream?$tmp:$Post, $stream);
        if($faultTest instanceof ResponseRPC)
            return $faultTest;

        return $stream
            ?(new ResponseRPC())
                ->setResponseJson([
                    'type' => 'stream',
                    'file' => $tmp,
                    'method' => $method,
                    'params' => $params
                ])
            :(new ResponseRPC())
                ->setResponseJson([
                    'type' => 'full',
                    'decoded' => xmlrpc_decode_request($faultTest, $method),
                    'method' => $method,
                    'params' => $params
                ]);
    }


    /**
     * Handles fault testing for streams/full-pulls
     *
     * if not stream it returns the response as a strings
     *
     * if faults found it returns ResponseRPC
     *
     * @param $method
     * @param $stream
     * @param bool $isStream
     * @param int $checkElementNodes
     * @return bool|string|ResponseRPC
     */
    protected function testForFault($method, $stream, bool $isStream, $checkElementNodes = 2) {
        if(!$isStream){
            /** @var ResponseInterface $stream */
            $Body = $stream->getBody()->getContents();
            if(strpos($Body, '<faultCode')){
                $faultInfo = xmlrpc_decode_request(file_get_contents($Body), $method);
                if(is_array($faultInfo) && xmlrpc_is_fault($faultInfo))
                    return (new ResponseRPC())->setError($faultInfo['faultString'], $faultInfo['faultCode']);
                return (new ResponseRPC())->setError('Bad fault.', -2);
            }
            return $Body;
        }

        $Reader = new XMLReader();
        $Reader->open($stream);

        while(@$Reader->read()){
            switch($Reader->nodeType){
                case XMLReader::ELEMENT:
                    if($Reader->name === "fault"){
                        $faultInfo = xmlrpc_decode_request(file_get_contents($stream), $method);
                        if(is_array($faultInfo) && xmlrpc_is_fault($faultInfo))
                            return (new ResponseRPC())->setError($faultInfo['faultString'], $faultInfo['faultCode']);
                    }elseif(--$checkElementNodes <= 0) break 2;
                    break;
            }
        }

        return false;
    }
}
