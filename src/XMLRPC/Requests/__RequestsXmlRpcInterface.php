<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

use Voltsonic\rTorrent\Statics\XMLRPC\ResponsesXmlRpcStatics;

interface __RequestsXmlRpcInterface {
    /**
     * __RequestsXmlRpcInterface constructor.
     * @param string $method
     * @param array $params
     * @param array $parseKeys
     */
    public function __construct(
        string $method,
        array $params = [],
        $parseKeys = ResponsesXmlRpcStatics::STANDARD_ARRAY
    );

    public function addParse(callable $callbackParsed, $toFront = false): __RequestsXmlRpcInterface;
    public function callParse(...$Parameters): void;

    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @return array
     */
    public function getParams(): array;

    /**
     * @return array
     */
    public function getStreamKeys(): array;

    /**
     * @return mixed
     */
    public function encodeMulti();
}
