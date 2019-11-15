<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class RatioRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'group';

    // Commands
    public static function seeding_Ratio_Disable(){
        // TODO: verify parameters
        return new RatioRequestXmlRpc(self::cmd('seeding.ratio.disable'));
    }
    public static function seeding_Ratio_Enable(){
        // TODO: verify parameters
        return new RatioRequestXmlRpc(self::cmd('seeding.ratio.enable'));
    }
    public static function seeding_Ratio_Max_Set(){
        // TODO: verify parameters
        return new RatioRequestXmlRpc(self::cmd('group2.seeding.ratio.max.set'));
    }
    public static function seeding_Ratio_Min_Set(){
        // TODO: verify parameters
        return new RatioRequestXmlRpc(self::cmd('group2.seeding.ratio.min.set'));
    }
    public static function seeding_Ratio_Upload_Set(){
        // TODO: verify parameters
        return new RatioRequestXmlRpc(self::cmd('group2.seeding.ratio.upload.set'));
    }

    // Variables
    public static function seeding_Ratio_Max_Get(){
        return new RatioRequestXmlRpc(self::cmd('group2.seeding.ratio.max'));
    }
    public static function seeding_Ratio_Min_Get(){
        return new RatioRequestXmlRpc(self::cmd('group2.seeding.ratio.min'));
    }
    public static function seeding_Ratio_Upload_Get(){
        return new RatioRequestXmlRpc(self::cmd('group2.seeding.ratio.upload'));
    }
}
