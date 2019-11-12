<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\DhtRequestXmlRpc;

class DhtApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function addNode(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DhtRequestXmlRpc::addNode(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function mode_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DhtRequestXmlRpc::mode_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function port_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DhtRequestXmlRpc::port_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function throttle_Name_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DhtRequestXmlRpc::throttle_Name_Set(), $callbackMethod, $disableStream);
    }

    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function port_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DhtRequestXmlRpc::port_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function throttle_Name_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DhtRequestXmlRpc::throttle_Name_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function statistics_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DhtRequestXmlRpc::statistics_Get(), $callbackMethod, $disableStream);
    }
}
