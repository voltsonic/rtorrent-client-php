<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\LoadRequestXmlRpc;

class LoadApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function normal(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(LoadRequestXmlRpc::normal(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function start(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(LoadRequestXmlRpc::start(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function startVerbose(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(LoadRequestXmlRpc::startVerbose(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function raw(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(LoadRequestXmlRpc::raw(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function rawStart(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(LoadRequestXmlRpc::rawStart(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function rawVerbose(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(LoadRequestXmlRpc::rawVerbose(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function verbose(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(LoadRequestXmlRpc::verbose(), $callbackMethod, $disableStream);
    }
}
