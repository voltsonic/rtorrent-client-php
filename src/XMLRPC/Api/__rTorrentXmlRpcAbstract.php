<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\Guzzle\RequestRPC;
use Voltsonic\rTorrent\Guzzle\ResponseRPC;
use Voltsonic\rTorrent\rTorrentClient;
use Voltsonic\rTorrent\Statics\XMLRPC\ResponsesXmlRpcStatics;
use Voltsonic\rTorrent\XMLRPC\Requests\__RequestsXmlRpcInterface;

abstract class __rTorrentXmlRpcAbstract implements __rTorrentXmlRpcInterface {
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
        __RequestsXmlRpcInterface $req,
        array $array_pointer = ResponsesXmlRpcStatics::STANDARD_ARRAY,
        bool $stream = true,
        array $xmlrpc_output_options = []
    ) {
        if(empty($req->getMethod()))
            throw new ErrorException("Method cannot be empty (::callMethod).");
        // TODO: re-enable and fix me when all array_pointers are setup.
//        if(empty($array_pointer))
//            throw new ErrorException("Missing iterate keys (::callArrayPointer) or overwriting run.");

        $ResponseRPC = $this->api->rpc($req->getMethod(), $req->getParams(), $stream, $xmlrpc_output_options);

        if($ResponseRPC->hasError())
            return $ResponseRPC;

        $ResponseRPC->pull($item, $array_pointer);

        return true;
    }

    /**
     * Array Style Returns
     *
     * @param __RequestsXmlRpcInterface $req
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @return true|ResponseRPC
     * @throws ErrorException
     */
    public function runArray(__RequestsXmlRpcInterface $req, callable $callbackMethod, $disableStream = false){
        return $this->run(function($item) use($callbackMethod) {
            $callbackMethod($item);
        }, $req, ResponsesXmlRpcStatics::STANDARD_ARRAY, !$disableStream);
    }

    /**
     * Single Item Returns (Usually A Variable)
     *
     * @param __RequestsXmlRpcInterface $req
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @return true|ResponseRPC
     * @throws ErrorException
     */
    public function runSingle(__RequestsXmlRpcInterface $req, callable $callbackMethod, $disableStream = false){
        return $this->run(function($item) use($callbackMethod) {
            $callbackMethod($item);
        }, $req, ResponsesXmlRpcStatics::STANDARD_SINGLE, !$disableStream);
    }
}
