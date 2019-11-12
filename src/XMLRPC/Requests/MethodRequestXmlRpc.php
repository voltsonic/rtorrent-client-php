<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class MethodRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'method';

    // Commands
    public static function insert(){
        // TODO: verify parameters
        return new MethodRequestXmlRpc(self::cmd('insert'));
    }
    public static function erase(){
        // TODO: verify parameters
        return new MethodRequestXmlRpc(self::cmd('erase'));
    }
    public static function get(){
        // TODO: verify parameters
        return new MethodRequestXmlRpc(self::cmd('get'));
    }
    public static function set(){
        // TODO: verify parameters
        return new MethodRequestXmlRpc(self::cmd('set'));
    }
    public static function listKeys(){
        // TODO: verify parameters
        return new MethodRequestXmlRpc(self::cmd('list_keys'));
    }
    public static function hasKey(){
        // TODO: verify parameters
        return new MethodRequestXmlRpc(self::cmd('has_key'));
    }
    public static function setKey(){
        // TODO: verify parameters
        return new MethodRequestXmlRpc(self::cmd('set_key'));
    }
}
