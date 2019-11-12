<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class ExecutionRequestXmlRpc extends __RequestsXmlRpcAbstract {
    // Commands
    public static function execute2(){
        // TODO: verify parameters
        return new ExecutionRequestXmlRpc(self::cmd('execute2'));
    }
    public static function throw(){
        // TODO: verify parameters
        return new ExecutionRequestXmlRpc(self::cmd('execute.throw'));
    }
    public static function throw_Bg(){
        // TODO: verify parameters
        return new ExecutionRequestXmlRpc(self::cmd('execute.throw.bg'));
    }
    public static function nothrow(){
        // TODO: verify parameters
        return new ExecutionRequestXmlRpc(self::cmd('execute.nothrow'));
    }
    public static function nothrow_Bg(){
        // TODO: verify parameters
        return new ExecutionRequestXmlRpc(self::cmd('execute.nothrow.bg'));
    }
    public static function capture(){
        // TODO: verify parameters
        return new ExecutionRequestXmlRpc(self::cmd('execute.capture'));
    }
    public static function captureNothrow(){
        // TODO: verify parameters
        return new ExecutionRequestXmlRpc(self::cmd('execute.capture_nothrow'));
    }
    public static function raw(){
        // TODO: verify parameters
        return new ExecutionRequestXmlRpc(self::cmd('execute.raw'));
    }
    public static function raw_Bg(){
        // TODO: verify parameters
        return new ExecutionRequestXmlRpc(self::cmd('execute.raw.bg'));
    }
    public static function rawNothrow(){
        // TODO: verify parameters
        return new ExecutionRequestXmlRpc(self::cmd('execute.raw_nothrow'));
    }
    public static function rawNothrow_Bg(){
        // TODO: verify parameters
        return new ExecutionRequestXmlRpc(self::cmd('execute.raw_nothrow.bg'));
    }
}
