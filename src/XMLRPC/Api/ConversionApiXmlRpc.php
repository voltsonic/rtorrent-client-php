<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\ConversionRequestXmlRpc;

class ConversionApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function date(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ConversionRequestXmlRpc::date(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function elapsedTime(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ConversionRequestXmlRpc::elapsedTime(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function gmDate(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ConversionRequestXmlRpc::gmDate(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function gmTime(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ConversionRequestXmlRpc::gmTime(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function kb(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ConversionRequestXmlRpc::kb(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function mb(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ConversionRequestXmlRpc::mb(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function time(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ConversionRequestXmlRpc::time(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function throttle(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ConversionRequestXmlRpc::throttle(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function xb(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ConversionRequestXmlRpc::xb(), $callbackMethod, $disableStream);
    }
}
