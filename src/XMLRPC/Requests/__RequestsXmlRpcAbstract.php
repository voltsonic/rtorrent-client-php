<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

use Voltsonic\rTorrent\Statics\XMLRPC\ResponsesXmlRpcStatics;

abstract class  __RequestsXmlRpcAbstract implements __RequestsXmlRpcInterface {
    protected static $methodPrefix = '';
    /**
     * @var string
     */
    protected $method;
    /**
     * @var array
     */
    protected $params;
    /**
     * @var array
     */
    private $streamKeys;
    /**
     * @var callable[]
     */
    protected $callbackParsed = [];

    protected static function cmd(string $method){
        return (empty(static::$methodPrefix)?'':(static::$methodPrefix.'.')).$method;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $method,
        array $params = [],
        $streamKeys = ResponsesXmlRpcStatics::STANDARD_ARRAY
    ){
        $this->method = $method;
        $this->params = $params;
        $this->streamKeys = $streamKeys;
    }

    public function addParse(callable $callbackParsed, $toFront = false): __RequestsXmlRpcInterface {
        if(is_callable($callbackParsed))
            $toFront
                ?array_unshift($this->callbackParsed, $callbackParsed)
                :array_push($this->callbackParsed, $callbackParsed);
        return $this;
    }

    public function callParse(...$Parameters): void {
        if(!empty($this->callbackParsed))
            foreach($this->callbackParsed as $cb){
                $cb(...$Parameters);
            }
    }

    /**
     * {@inheritDoc}
     */
    public function getMethod(): string {
        return $this->method;
    }

    /**
     * {@inheritDoc}
     */
    public function getParams(): array {
        return $this->params;
    }

    /**
     * {@inheritDoc}
     */
    public function getStreamKeys(): array {
        return $this->streamKeys;
    }

    /**
     * {@inheritDoc}
     */
    public function encodeMulti(){
        return [
            'methodName' => $this->getMethod(),
            'params' => $this->getParams()
        ];
    }
}