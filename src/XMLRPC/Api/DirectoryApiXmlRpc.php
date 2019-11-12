<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\DirectoryRequestXmlRpc;

class DirectoryApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function default_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DirectoryRequestXmlRpc::default_Set(), $callbackMethod, $disableStream);
    }

    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function default_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DirectoryRequestXmlRpc::default_Get(), $callbackMethod, $disableStream);
    }
}
