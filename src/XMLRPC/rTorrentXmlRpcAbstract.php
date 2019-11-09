<?php

namespace Voltsonic\rTorrent\XMLRPC;

use ErrorException;
use Voltsonic\rTorrent\Guzzle\RequestRPC;
use Voltsonic\rTorrent\rTorrentClient;
use Voltsonic\rTorrent\Statics\XMLRPC\ResponsesXmlRpcStatics;

abstract class rTorrentXmlRpcAbstract implements rTorrentXmlRpcInterface {
    protected $methodPrefix = '';

    /**
     * @var rTorrentClient
     */
    protected $api;

    public function __construct(RequestRPC $requestRPC)
    {
        $this->api = $requestRPC;
    }

    protected function cmd(string $method){
        return (empty($this->methodPrefix)?'':($this->methodPrefix.'.')).$method;
    }

    /**
     * {@inheritDoc}
     */
    public function run(
        callable $item,
        string $method,
        $params = [],
        array $array_pointer = ResponsesXmlRpcStatics::STANDARD_ARRAY,
        bool $stream = true,
        array $xmlrpc_output_options = []
    ){
        if(empty($method))
            throw new ErrorException("Method cannot be empty (::callMethod).");
        // TODO: re-enable and fix me when all array_pointers are setup.
//        if(empty($array_pointer))
//            throw new ErrorException("Missing iterate keys (::callArrayPointer) or overwriting run.");

        $ResponseRPC = $this->api->rpc($method, $params, $stream, $xmlrpc_output_options);

        if($ResponseRPC->hasError())
            return $ResponseRPC;

        $ResponseRPC->pull($item, $array_pointer);

        return false;
    }

    /**
     * @param string $method
     * @param callable $callbackMethod
     * @param array $params
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function runArray(string $method, callable $callbackMethod, $params = [], $disableStream = false){
        $this->run(function($item) use($callbackMethod) {
            $callbackMethod($item);
        }, $method, $params, ResponsesXmlRpcStatics::STANDARD_ARRAY, !$disableStream);
    }

    /**
     * @param string $method
     * @param callable $callbackMethod
     * @param array $params
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function runSingle(string $method, callable $callbackMethod, $params = [], $disableStream = false){
        $this->run(function($item) use($callbackMethod) {
            $callbackMethod($item);
        }, $method, $params, ResponsesXmlRpcStatics::STANDARD_SINGLE, !$disableStream);
    }
}
