<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class MemoryPiecesRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'pieces';

    // Commands
    public static function memory_Max_Set(){
        // TODO: verify parameters
        return new MemoryPiecesRequestXmlRpc(self::cmd('memory.max.set'));
    }
    public static function hash_OnCompletion_Set(){
        // TODO: verify parameters
        return new MemoryPiecesRequestXmlRpc(self::cmd('hash.on_completion.set'));
    }
    public static function preload_MinSize_Set(){
        // TODO: verify parameters
        return new MemoryPiecesRequestXmlRpc(self::cmd('preload.min_size.set'));
    }
    public static function preload_MinRate_Set(){
        // TODO: verify parameters
        return new MemoryPiecesRequestXmlRpc(self::cmd('preload.min_rate.set'));
    }
    public static function preload_Type_Set(){
        // TODO: verify parameters
        return new MemoryPiecesRequestXmlRpc(self::cmd('preload.type.set'));
    }
    public static function sync_AlwaysSafe_Set(){
        // TODO: verify parameters
        return new MemoryPiecesRequestXmlRpc(self::cmd('sync.always_safe.set'));
    }
    public static function sync_Timeout_Set(){
        // TODO: verify parameters
        return new MemoryPiecesRequestXmlRpc(self::cmd('sync.timeout.set'));
    }
    public static function sync_TimeoutSafe_Set(){
        // TODO: verify parameters
        return new MemoryPiecesRequestXmlRpc(self::cmd('sync.timeout_safe.set'));
    }

    // Variables
    public static function memory_Current_Get(){
        return new MemoryPiecesRequestXmlRpc(self::cmd('memory.current'));
    }
    public static function memory_Max_Get(){
        return new MemoryPiecesRequestXmlRpc(self::cmd('memory.max'));
    }
    public static function hash_OnCompletion_Get(){
        return new MemoryPiecesRequestXmlRpc(self::cmd('hash.on_completion'));
    }
    public static function preload_Type_Get(){
        return new MemoryPiecesRequestXmlRpc(self::cmd('preload.type'));
    }
    public static function preload_MinSize_Get(){
        return new MemoryPiecesRequestXmlRpc(self::cmd('preload.min_size'));
    }
    public static function preload_MinRate_Get(){
        return new MemoryPiecesRequestXmlRpc(self::cmd('preload.min_rate'));
    }
    public static function statsPreloaded_Get(){
        return new MemoryPiecesRequestXmlRpc(self::cmd('stats_preloaded'));
    }
    public static function statsNotPreloaded_Get(){
        return new MemoryPiecesRequestXmlRpc(self::cmd('stats_not_preloaded'));
    }
    public static function sync_AlwaysSafe_Get(){
        return new MemoryPiecesRequestXmlRpc(self::cmd('sync.always_safe'));
    }
    public static function sync_Timeout_Get(){
        return new MemoryPiecesRequestXmlRpc(self::cmd('sync.timeout'));
    }
    public static function sync_TimeoutSafe_Get(){
        return new MemoryPiecesRequestXmlRpc(self::cmd('sync.timeout_safe'));
    }
}