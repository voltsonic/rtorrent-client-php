<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\MiscRequestXmlRpc;

class MiscApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function add(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MiscRequestXmlRpc::add(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function layout_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MiscRequestXmlRpc::layout_Set(), $callbackMethod, $disableStream);
    }
}
