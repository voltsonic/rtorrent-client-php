<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class SchedulingRequestXmlRpc extends __RequestsXmlRpcAbstract {
    // Commands
    public static function schedule2(){
        // TODO: verify parameters
        return new SchedulingRequestXmlRpc(self::cmd('schedule2'));
    }
    public static function scheduleRemove2(){
        // TODO: verify parameters
        return new SchedulingRequestXmlRpc(self::cmd('schedule_remove2'));
    }
}
