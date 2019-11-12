<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

interface __RequestsXmlRpcInterface {
    public function __construct(string $method, array $params = []);
    public function getMethod(): string;
    public function getParams(): array;
}
