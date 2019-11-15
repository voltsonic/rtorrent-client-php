<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class ProtocolRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'protocol';

    // Commands
    public static function connection_Leech_Set(){
        // TODO: verify parameters
        return new ProtocolRequestXmlRpc(self::cmd('connection.leech.set'));
    }
    public static function connection_Seed_Set(){
        // TODO: verify parameters
        return new ProtocolRequestXmlRpc(self::cmd('connection.seed.set'));
    }
    public static function encryption_Set(){
        // TODO: verify parameters
        return new ProtocolRequestXmlRpc(self::cmd('encryption.set'));
    }
    public static function pex_Set(){
        // TODO: verify parameters
        return new ProtocolRequestXmlRpc(self::cmd('pex.set'));
    }

    // Variables
    public static function connection_Leech_Get(){
        return new ProtocolRequestXmlRpc(self::cmd('connection.leech'));
    }
    public static function connection_Seed_Get(){
        return new ProtocolRequestXmlRpc(self::cmd('connection.seed'));
    }
    public static function pex_Get(){
        return new ProtocolRequestXmlRpc(self::cmd('pex'));
    }
}
