<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class LoadRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'load';

    // Commands
    public static function normal(){
        // TODO: verify parameters
        return new LoadRequestXmlRpc(self::cmd('normal'));
    }
    public static function start(){
        // TODO: verify parameters
        return new LoadRequestXmlRpc(self::cmd('start'));
    }
    public static function startVerbose(){
        // TODO: verify parameters
        return new LoadRequestXmlRpc(self::cmd('start_verbose'));
    }
    public static function raw(){
        // TODO: verify parameters
        return new LoadRequestXmlRpc(self::cmd('raw'));
    }
    public static function rawStart(){
        // TODO: verify parameters
        return new LoadRequestXmlRpc(self::cmd('raw_start'));
    }
    public static function rawVerbose(){
        // TODO: verify parameters
        return new LoadRequestXmlRpc(self::cmd('raw_verbose'));
    }
    public static function verbose(){
        // TODO: verify parameters
        return new LoadRequestXmlRpc(self::cmd('verbose'));
    }
}
