<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\ViewsRequestXmlRpc;

class ViewsApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function add(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ViewsRequestXmlRpc::add(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function filter(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ViewsRequestXmlRpc::filter(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function filterOn(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ViewsRequestXmlRpc::filterOn(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function list(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ViewsRequestXmlRpc::list(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ViewsRequestXmlRpc::set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sort(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ViewsRequestXmlRpc::sort(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sortCurrent(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ViewsRequestXmlRpc::sortCurrent(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sortNew(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ViewsRequestXmlRpc::sortNew(), $callbackMethod, $disableStream);
    }
}