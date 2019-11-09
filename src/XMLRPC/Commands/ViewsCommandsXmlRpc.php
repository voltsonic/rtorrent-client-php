<?php

namespace Voltsonic\rTorrent\XMLRPC\Commands;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\rTorrentXmlRpcAbstract;

class ViewsCommandsXmlRpc extends rTorrentXmlRpcAbstract {
    protected $methodPrefix = 'views';

    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function list(callable $callbackMethod, $disableStream = false){
        $this->runArray($this->cmd('list'), $callbackMethod, [], $disableStream);
    }
}
