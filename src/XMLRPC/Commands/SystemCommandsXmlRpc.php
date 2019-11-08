<?php

namespace Voltsonic\rTorrent\XMLRPC\Commands;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\rTorrentXmlRpcAbstract;

class SystemCommandsXmlRpc extends rTorrentXmlRpcAbstract {
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function listMethods(callable $callbackMethod, $disableStream = false){
        $this->run(function($item) use($callbackMethod) {
            $callbackMethod($item);
        }, 'system.listMethods', [], [], !$disableStream);
    }
}
