<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class SessionRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'session';

    // Commands
    public static function path_Set(){
        // TODO: verify parameters
        return new SessionRequestXmlRpc(self::cmd('path.set'));
    }
    public static function name_Set(){
        // TODO: verify parameters
        return new SessionRequestXmlRpc(self::cmd('name.set'));
    }
    public static function onCompletion_Set(){
        // TODO: verify parameters
        return new SessionRequestXmlRpc(self::cmd('on_completion.set'));
    }
    public static function useLock_Set(){
        // TODO: verify parameters
        return new SessionRequestXmlRpc(self::cmd('use_lock.set'));
    }

    // Variables
    public static function path_Get(){
        // TODO: verify parameters
        return new SessionRequestXmlRpc(self::cmd('path'));
    }
    public static function name_Get(){
        // TODO: verify parameters
        return new SessionRequestXmlRpc(self::cmd('name'));
    }
    public static function onCompletion_Get(){
        // TODO: verify parameters
        return new SessionRequestXmlRpc(self::cmd('on_completion'));
    }
    public static function save_Get(){
        // TODO: verify parameters
        return new SessionRequestXmlRpc(self::cmd('save'));
    }
    public static function useLock_Get(){
        // TODO: verify parameters
        return new SessionRequestXmlRpc(self::cmd('use_lock'));
    }
}
