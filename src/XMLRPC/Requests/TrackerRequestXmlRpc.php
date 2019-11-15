<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class TrackerRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'trackers';

    // Commands
    public static function numwant_Set(){
        // TODO: verify parameters
        return new TrackerRequestXmlRpc(self::cmd('numwant.set'));
    }
    public static function useUdp_Set(){
        // TODO: verify parameters
        return new TrackerRequestXmlRpc(self::cmd('use_udp.set'));
    }

    // Variables
    public static function numwant_Get(){
        return new TrackerRequestXmlRpc(self::cmd('numwant'));
    }
    public static function useUdp_Get(){
        return new TrackerRequestXmlRpc(self::cmd('use_udp'));
    }
}
