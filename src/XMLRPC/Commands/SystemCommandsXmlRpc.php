<?php

namespace Voltsonic\rTorrent\XMLRPC\Commands;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\rTorrentXmlRpcAbstract;

class SystemCommandsXmlRpc extends rTorrentXmlRpcAbstract {
    protected $methodPrefix = 'system';
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function listMethods(callable $callbackMethod, $disableStream = false){
        $this->runArray($this->cmd('listMethods'), $callbackMethod, [], $disableStream);
    }
}
