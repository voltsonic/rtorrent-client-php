<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\PeersRequestXmlRpc;

class PeersApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function address_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(PeersRequestXmlRpc::address_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function clientVersion_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(PeersRequestXmlRpc::clientVersion_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function completedPercent_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(PeersRequestXmlRpc::completedPercent_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function downRate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(PeersRequestXmlRpc::downRate_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function downTotal_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(PeersRequestXmlRpc::downTotal_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function id_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(PeersRequestXmlRpc::id_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function idHtml_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(PeersRequestXmlRpc::idHtml_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function optionsStr_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(PeersRequestXmlRpc::optionsStr_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function peerRate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(PeersRequestXmlRpc::peerRate_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function peerTotal_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(PeersRequestXmlRpc::peerTotal_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function port_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(PeersRequestXmlRpc::port_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function upRate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(PeersRequestXmlRpc::upRate_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function upTotal_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(PeersRequestXmlRpc::upTotal_Get(), $callbackMethod, $disableStream);
    }
}
