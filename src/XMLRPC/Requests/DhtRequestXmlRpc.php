<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class DhtRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'dht';

    // Commands
    public static function addNode(){
        // TODO: verify parameters
        return new DhtRequestXmlRpc(self::cmd('add_node'));
    }
    public static function mode_Set(){
        // TODO: verify parameters
        return new DhtRequestXmlRpc(self::cmd('mode.set'));
    }
    public static function port_Set(){
        // TODO: verify parameters
        return new DhtRequestXmlRpc(self::cmd('port.set'));
    }
    public static function throttle_Name_Set(){
        // TODO: verify parameters
        return new DhtRequestXmlRpc(self::cmd('throttle.name.set'));
    }

    // Variables
    public static function port_Get(){
        return new DhtRequestXmlRpc(self::cmd('port'));
    }
    public static function throttle_Name_Get(){
        return new DhtRequestXmlRpc(self::cmd('throttle.name'));
    }
    public static function statistics_Get(){
        return new DhtRequestXmlRpc(self::cmd('statistics'));
    }
}
