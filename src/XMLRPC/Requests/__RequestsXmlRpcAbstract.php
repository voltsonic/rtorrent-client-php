<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

abstract class __RequestsXmlRpcAbstract implements __RequestsXmlRpcInterface {
    protected static $methodPrefix = '';
    /**
     * @var string
     */
    protected $method;
    /**
     * @var array
     */
    protected $params;

    protected static function cmd(string $method){
        return (empty(static::$methodPrefix)?'':(static::$methodPrefix.'.')).$method;
    }

    /**
     * RequestsXmlRpcAbstract constructor.
     * @param string $method
     * @param array $params
     */
    public function __construct(string $method, array $params = [])
    {
        $this->method = $method;
        $this->params = $params;
    }

    public function getMethod(): string {
        return $this->method;
    }

    public function getParams(): array {
        return $this->params;
    }
}