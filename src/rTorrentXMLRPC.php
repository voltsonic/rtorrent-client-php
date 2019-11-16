<?php

namespace Voltsonic\rTorrent;

use ErrorException;
use Http;
use GuzzleHttp;
use fXmlRpc;
use Voltsonic\rTorrent\XMLRPC\Requests\__RequestsXmlRpcInterface;

class rTorrentXMLRPC {
    /**
     * @var GuzzleHttp\Client
     */
    protected $client_http;
    /**
     * @var fXmlRpc\Client
     */
    protected $client_api;
    /**
     * @var __RequestsXmlRpcInterface[]
     */
    protected $requests = [];
    /**
     * @var callable[]
     */
    private $requestErrors = [];

    public function __construct($rpc_address = 'http://127.0.0.1:9000/RPC2')
    {
        $this->client_http = new GuzzleHttp\Client();
        $this->client_api = new fXmlRpc\Client(
            $rpc_address,
            new fXmlRpc\Transport\HttpAdapterTransport(
                new Http\Message\MessageFactory\DiactorosMessageFactory(),
                new Http\Adapter\Guzzle6\Client($this->client_http)
            )
        );
    }

    /**
     * @param __RequestsXmlRpcInterface $requestXmlRpc
     * @param bool $multi
     * @return rTorrentXMLRPC
     * @throws ErrorException
     */
    public function add(__RequestsXmlRpcInterface $requestXmlRpc, $multi = true): rTorrentXMLRPC {
        $this->requests[]= $requestXmlRpc;
        if(!$multi) $this->run();
        return $this;
    }

    /**
     * @param __RequestsXmlRpcInterface $requestXmlRpc
     * @throws ErrorException
     */
    public function addSingle(__RequestsXmlRpcInterface $requestXmlRpc): void {
        $this->add($requestXmlRpc, false);
    }


    public function attachError(callable $error): rTorrentXMLRPC {
        $this->requestErrors[]= $error;
        return $this;
    }

    public function clear(): rTorrentXMLRPC {
        $this->requests = [];
        $this->requestErrors = [];
        return $this;
    }

    /**
     * @throws ErrorException
     */
    public function run(): void {
        if(empty($this->requests))
            throw new ErrorException("No Requests Added.");

        $isMulti = count($this->requests) > 1;

        $runParse = function($item, $requestIndex = 0) {
            $this->requests[$requestIndex]->callParse($item);
        };

        if($isMulti){
            $Builder = $this->client_api->multicall();

            foreach($this->requests as $requestIndex => $request)
                $Builder->addCall($request->getMethod(), $request->getParams(), function($result) use($requestIndex, $runParse) {
                    if(is_array($result) && count($result) === 1) $result = $result[0];

                    is_array($result)
                        ?array_map(function($item) use($requestIndex, $runParse) {
                            $runParse($item, $requestIndex);
                        }, $result)
                        :$runParse($result, $requestIndex);
                }, function($error) use($requestIndex, $request) {
                    foreach($this->requestErrors as $cb){
                        $cb($requestIndex, $request->getMethod(), $error);
                    }
                });

            $Builder->execute();
            $this->clear();

            return;
        }

        /** @var __RequestsXmlRpcInterface $requestSend */
        $requestSend = $this->requests[0];

        $Response = $this->client_api->call($requestSend->getMethod(), $requestSend->getParams());

        if(!empty($Response))
            foreach($Response as $item)
                $runParse($item);

        $this->clear();
    }
}
