<?php

namespace Voltsonic\rTorrent\Guzzle;

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

    public function setResponseJson($to): ResponseRPC {
        $this->responseJson = $to;
        return $this;
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
    public function getResponseJson(): array {
        return $this->responseJson;
    }

    public function pull(
        callable $itemOrFull,
        $streamArray = ['methodResponse', 'params', 'param', 'value', 'array', 'data', 'value']
    ) {
        if($this->hasError())
            throw new \Error("There was an error: ".$this->getError());

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
                            $streamContents = false;
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
    public function getError(): string {
        return $this->errorMessage;
    }
    public function getErrorCode(): string {
        return $this->errorCode;
    }
}