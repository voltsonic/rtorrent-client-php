<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class MiscRequestXmlRpc extends __RequestsXmlRpcAbstract {
    // Commands
    public static function add(){
        // TODO: verify parameters
        return new MiscRequestXmlRpc(self::cmd('encoding.add'));
    }
    public static function layout_Set(){
        // TODO: verify parameters
        return new MiscRequestXmlRpc(self::cmd('keys.layout.set'));
    }
}
