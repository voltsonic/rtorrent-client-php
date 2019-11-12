<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\SessionRequestXmlRpc;

class SessionApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function path_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SessionRequestXmlRpc::path_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function name_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SessionRequestXmlRpc::name_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function onCompletion_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SessionRequestXmlRpc::onCompletion_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function useLock_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SessionRequestXmlRpc::useLock_Set(), $callbackMethod, $disableStream);
    }

    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function path_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SessionRequestXmlRpc::path_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function name_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SessionRequestXmlRpc::name_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function onCompletion_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SessionRequestXmlRpc::onCompletion_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function save_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SessionRequestXmlRpc::save_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function useLock_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SessionRequestXmlRpc::useLock_Get(), $callbackMethod, $disableStream);
    }
}
