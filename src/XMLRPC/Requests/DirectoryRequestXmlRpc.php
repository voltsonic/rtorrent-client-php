<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class DirectoryRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'directory';

    // Commands
    public static function default_Set(){
        // TODO: verify parameters
        return new DirectoryRequestXmlRpc(self::cmd('default.set'));
    }

    // Variables
    public static function default_Get(){
        return new DirectoryRequestXmlRpc(self::cmd('default'));
    }
}
