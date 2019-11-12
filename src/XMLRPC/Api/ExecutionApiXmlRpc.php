<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\ExecutionRequestXmlRpc;

class ExecutionApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function execute2(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ExecutionRequestXmlRpc::execute2(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function throw(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ExecutionRequestXmlRpc::throw(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function throw_Bg(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ExecutionRequestXmlRpc::throw_Bg(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function nothrow(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ExecutionRequestXmlRpc::nothrow(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function nothrow_Bg(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ExecutionRequestXmlRpc::nothrow_Bg(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function capture(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ExecutionRequestXmlRpc::capture(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function captureNothrow(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ExecutionRequestXmlRpc::captureNothrow(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function raw(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ExecutionRequestXmlRpc::raw(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function raw_Bg(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ExecutionRequestXmlRpc::raw_Bg(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function rawNothrow(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ExecutionRequestXmlRpc::rawNothrow(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function rawNothrow_Bg(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ExecutionRequestXmlRpc::rawNothrow_Bg(), $callbackMethod, $disableStream);
    }
}
