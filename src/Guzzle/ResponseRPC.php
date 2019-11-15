<?php

namespace Voltsonic\rTorrent\Guzzle;

use ErrorException;
use Voltsonic\rTorrent\Statics\XMLRPC\ResponsesXmlRpcStatics;
use XMLReader;

/**
 * Class ResponseRPC
 * @package Voltsonic\rTorrent\Guzzle
 */
class ResponseRPC {
    /**
     * @var bool
     */
    protected $error = false;
    /**
     * @var int
     */
    protected $errorCode = -1;
    /**
     * @var mixed
     */
    protected $errorMessage = '';
    /**
     * @var array|false
     */
    protected $responseJson = false;
    /**
     * @var string
     */
    protected $requestMethod = "";
    /**
     * @var array
     */
    protected $requestParams = [];

    public function setResponseJson($to): ResponseRPC {
        $this->responseJson = $to;
        return $this;
    }
    public function getResponseJson(): array {
        return $this->responseJson;
    }
    public function setError($to, $faultCode = 1): ResponseRPC {
        $this->error = true;
        $this->errorCode = $faultCode;
        $this->errorMessage = $to;
        return $this;
    }

    public function hasError(): bool {
        return $this->error;
    }
    public function setRequestParams($to): ResponseRPC {
        $this->requestParams = $to;
        return $this;
    }
    public function getRequestParams(): array {
        return $this->requestParams;
    }
    public function setRequestMethod(string $to): ResponseRPC {
        $this->requestMethod = $to;
        return $this;
    }
    public function getRequestMethod(): string {
        return $this->requestMethod;
    }

    /**
     * @param callable $itemOrFull
     * @param array $streamArray
     * @throws ErrorException
     */
    public function pull(
        callable $itemOrFull,
        $streamArray = ['methodResponse', 'params', 'param', 'value', 'array', 'data', 'value']
    ) {
        if($this->hasError())
            throw new ErrorException("There was an error: ".$this->getError());
        if(!is_string($streamArray[0])){
            if(isset($streamArray[0][0]) && is_string($streamArray[0][0]))
                throw new ErrorException("use ->pullMulti() instead.");
            throw new ErrorException("Something wrong with \$streamArray should be a string[] type.");
        }

        $call = $this->getResponseJson();

        switch($call['type']){
            case 'full':
                $itemOrFull($call['decoded']);
                break;
            case 'stream':
                $stream = $call['file'];

                $Reader = new XMLReader();
                $Reader->open($stream);

                $streamMasterKey = array_pop($streamArray);
                $streamArray[]= $streamMasterKey;
                $readingItems = false;

                while(@$Reader->read()){
                    switch($Reader->nodeType){
                        case XMLReader::ELEMENT:
                            $streamNext = (empty($streamArray)?false:array_shift($streamArray));
                            if(empty($streamArray) && !empty($streamNext)){
                                $readingItems = true;
                            }

                            if($readingItems){
                                if($Reader->name === $streamMasterKey){
                                    $itemContents = $Reader->readInnerXml();
                                    $itemParsed = simplexml_load_string($itemContents);
                                    $itemParsedJson = json_decode(json_encode($itemParsed), true);
                                    $itemOrFull($itemParsedJson[0]);
                                }
                            }
                            break;
                    }
                }
                break;
        }
    }

    /**
     * @param array $streamersData
     * @param array $baseData
     * @throws ErrorException
     */
    public function pullMulti(
        array $streamersData,
        array $baseData = ResponsesXmlRpcStatics::COMMAND_CORE
    ) {
        if($this->hasError())
            throw new ErrorException("There was an error: ".$this->getError());

        $call = $this->getResponseJson();

        switch($call['type']) {
            case 'full':
                throw new ErrorException("Set me up.");
                $itemOrFull($call['decoded']);
                break;
            case 'stream':
                $stream = $call['file'];

                $Reader = new XMLReader();
                $Reader->open($stream);

                $nodeCursor = [];
                $updateCursor = function($nodeType, $name) use(&$nodeCursor) {
                    if($nodeType === XMLReader::ELEMENT)
                        $nodeCursor[] = $name;
                    elseif($nodeType === XMLReader::END_ELEMENT)
                        array_pop($nodeCursor);
                    return implode('.', $nodeCursor);
                };

                $nodeCloseCheckIgnores = [
                    '15-1',
                    '15-15'
                ];



                do{
                    $streamersDataNext = array_shift($streamersData);
                    $a = $baseData;
                    if(!empty($streamersDataNext['tags']))
                        array_push($a, ...$streamersDataNext['tags']);
                    $cb = $streamersDataNext['cb'];
                    $streamerTag = implode('.', $a);
                    $streamerTagLen = strlen($streamerTag);
                    $nodeCloseCheck = [];
                    $found = false;
                    $finished = false;
                    while(@$Reader->read()){
                        $nodeCurrent = $updateCursor($Reader->nodeType, $Reader->name);

                        if($Reader->nodeType == XMLReader::ELEMENT){
                            $nodeCurrentLen = strlen($nodeCurrent);

                            if(!$found && $nodeCurrent == $streamerTag)
                                $found = true;

                            if($found && !$finished){
                                if($nodeCurrentLen > $streamerTagLen)
                                    continue; // inner tag

                                if($nodeCurrentLen < $streamerTagLen){
                                    $previousFP = implode('-', $nodeCloseCheck);
                                    if(count($nodeCloseCheck) >= 2 && !in_array($previousFP, $nodeCloseCheckIgnores))
                                        $finished = true;
                                }else{
                                    $itemContents = $Reader->readInnerXml();
                                    $itemParsed = simplexml_load_string($itemContents);
                                    $itemParsedJson = json_decode(json_encode($itemParsed), true);
                                    $cb($itemParsedJson[0]);
                                }
                            }
                        }

                        array_unshift($nodeCloseCheck, $Reader->nodeType);
                        while(count($nodeCloseCheck) > 2) array_pop($nodeCloseCheck);

                        if($finished) break;
                    }
                }while(!empty($streamersData));

                break;
        }
    }
    public function getError(): string {
        return $this->errorMessage;
    }
    public function getErrorCode(): string {
        return $this->errorCode;
    }
}