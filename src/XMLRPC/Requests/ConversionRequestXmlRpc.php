<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class ConversionRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'convert';

    // Commands
    public static function date(){
        // TODO: verify parameters
        return new ConversionRequestXmlRpc(self::cmd('date'));
    }
    public static function elapsedTime(){
        // TODO: verify parameters
        return new ConversionRequestXmlRpc(self::cmd('elapsed_time'));
    }
    public static function gmDate(){
        // TODO: verify parameters
        return new ConversionRequestXmlRpc(self::cmd('gm_date'));
    }
    public static function gmTime(){
        // TODO: verify parameters
        return new ConversionRequestXmlRpc(self::cmd('gm_time'));
    }
    public static function kb(){
        // TODO: verify parameters
        return new ConversionRequestXmlRpc(self::cmd('kb'));
    }
    public static function mb(){
        // TODO: verify parameters
        return new ConversionRequestXmlRpc(self::cmd('mb'));
    }
    public static function time(){
        // TODO: verify parameters
        return new ConversionRequestXmlRpc(self::cmd('time'));
    }
    public static function throttle(){
        // TODO: verify parameters
        return new ConversionRequestXmlRpc(self::cmd('throttle'));
    }
    public static function xb(){
        // TODO: verify parameters
        return new ConversionRequestXmlRpc(self::cmd('xb'));
    }
}
