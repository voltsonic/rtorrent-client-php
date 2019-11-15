<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class SystemRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'system';

    // Commands
    public static function listMethods(){
        return new SystemRequestXmlRpc(self::cmd('listMethods'));
    }

    public static function shutdown_Normal(){
        return new SystemRequestXmlRpc(self::cmd('shutdown.normal'));
    }

    public static function shutdown_Quick(){
        return new SystemRequestXmlRpc(self::cmd('shutdown.quick'));
    }

    public static function file_Allocate_Set(){
        // TODO: verify parameters
        return new SystemRequestXmlRpc(self::cmd('file.allocate.set'));
    }

    public static function file_MaxSize_Set(){
        // TODO: verify parameters
        return new SystemRequestXmlRpc(self::cmd('file.max_size.set'));
    }

    public static function file_SplitSize_Set(){
        // TODO: verify parameters
        return new SystemRequestXmlRpc(self::cmd('file.split_size.set'));
    }

    public static function file_SplitSuffix_Set(){
        // TODO: verify parameters
        return new SystemRequestXmlRpc(self::cmd('file.split_suffix.set'));
    }

    public static function daemon_Set(){
        // TODO: verify parameters
        return new SystemRequestXmlRpc(self::cmd('daemon.set'));
    }

    public static function env_Set(string $environmentVariable){
        // TODO: needs setup
        return new SystemRequestXmlRpc(self::cmd($environmentVariable.'.set'));
    }

    // Variables
    public static function file_Allocate_Get(){
        return new SystemRequestXmlRpc(self::cmd('file.allocate'));
    }
    public static function file_MaxSize_Get(){
        return new SystemRequestXmlRpc(self::cmd('file.max_size'));
    }
    public static function file_SplitSize_Get(){
        return new SystemRequestXmlRpc(self::cmd('file.split_size'));
    }
    public static function file_SplitSuffix_Get(){
        return new SystemRequestXmlRpc(self::cmd('file.split_suffix'));
    }
}