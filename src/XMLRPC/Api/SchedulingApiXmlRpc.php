<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\SchedulingRequestXmlRpc;

class SchedulingApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function schedule2(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SchedulingRequestXmlRpc::schedule2(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function scheduleRemove2(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SchedulingRequestXmlRpc::scheduleRemove2(), $callbackMethod, $disableStream);
    }
}
