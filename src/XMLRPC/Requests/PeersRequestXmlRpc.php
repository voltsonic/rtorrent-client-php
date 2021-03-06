<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class PeersRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'p';

    // Variables
    public static function address_Get(){
        return new PeersRequestXmlRpc(self::cmd('address'));
    }
    public static function clientVersion_Get(){
        return new PeersRequestXmlRpc(self::cmd('client_version'));
    }
    public static function completedPercent_Get(){
        return new PeersRequestXmlRpc(self::cmd('completed_percent'));
    }
    public static function downRate_Get(){
        return new PeersRequestXmlRpc(self::cmd('down_rate'));
    }
    public static function downTotal_Get(){
        return new PeersRequestXmlRpc(self::cmd('down_total'));
    }
    public static function id_Get(){
        return new PeersRequestXmlRpc(self::cmd('id'));
    }
    public static function idHtml_Get(){
        return new PeersRequestXmlRpc(self::cmd('id_html'));
    }
    public static function optionsStr_Get(){
        return new PeersRequestXmlRpc(self::cmd('options_str'));
    }
    public static function peerRate_Get(){
        return new PeersRequestXmlRpc(self::cmd('peer_rate'));
    }
    public static function peerTotal_Get(){
        return new PeersRequestXmlRpc(self::cmd('peer_total'));
    }
    public static function port_Get(){
        return new PeersRequestXmlRpc(self::cmd('port'));
    }
    public static function upRate_Get(){
        return new PeersRequestXmlRpc(self::cmd('up_rate'));
    }
    public static function upTotal_Get(){
        return new PeersRequestXmlRpc(self::cmd('up_total'));
    }
}
