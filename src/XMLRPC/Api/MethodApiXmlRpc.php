<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\MethodRequestXmlRpc;

class MethodApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function insert(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MethodRequestXmlRpc::insert(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function erase(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MethodRequestXmlRpc::erase(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MethodRequestXmlRpc::get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MethodRequestXmlRpc::set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function listKeys(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MethodRequestXmlRpc::listKeys(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function hasKey(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MethodRequestXmlRpc::hasKey(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function setKey(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MethodRequestXmlRpc::setKey(), $callbackMethod, $disableStream);
    }
}
