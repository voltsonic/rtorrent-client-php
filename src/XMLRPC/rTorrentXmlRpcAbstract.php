<?php

namespace Voltsonic\rTorrent\XMLRPC;

use ErrorException;
use Voltsonic\rTorrent\Guzzle\RequestRPC;
use Voltsonic\rTorrent\rTorrentClient;

abstract class rTorrentXmlRpcAbstract implements rTorrentXmlRpcInterface {
    /**
     * @var rTorrentClient
     */
    protected $api;

    public function __construct(RequestRPC $requestRPC)
    {
        $this->api = $requestRPC;
    }

    /**
     * {@inheritDoc}
     */
    public function run(
        callable $item,
        string $method,
        array $array_pointer,
        $params = [],
        bool $stream = true,
        array $xmlrpc_output_options = []
    ){
        if(empty($method))
            throw new ErrorException("Method cannot be empty (::callMethod).");
        if(empty($array_pointer))
            throw new ErrorException("Missing iterate keys (::callArrayPointer) or overwriting run.");

        $ResponseRPC = $this->api->rpc($method, $params, $stream, $xmlrpc_output_options);

        if($ResponseRPC->hasError())
            return $ResponseRPC;

        $ResponseRPC->pull($item, $array_pointer);

        return false;
    }
}
