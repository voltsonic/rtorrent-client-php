<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\TrackerRequestXmlRpc;

class TrackerApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function numwant_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackerRequestXmlRpc::numwant_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function useUdp_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackerRequestXmlRpc::useUdp_Set(), $callbackMethod, $disableStream);
    }

    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function numwant_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackerRequestXmlRpc::numwant_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function useUdp_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackerRequestXmlRpc::useUdp_Get(), $callbackMethod, $disableStream);
    }
}
