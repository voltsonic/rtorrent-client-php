<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class ThrottleRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'throttle';

    // Commands
    public static function down_Max(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('down.max'));
    }
    public static function down_Rate(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('down.rate'));
    }
    public static function globalDown_MaxRate_Set(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('global_down.max_rate.set'));
    }
    public static function globalDown_MaxRate_SetKb(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('global_down.max_rate.set_kb'));
    }
    public static function globalUp_MaxRate_Set(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('global_up.max_rate.set'));
    }
    public static function globalUp_MaxRate_SetKb(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('global_up.max_rate.set_kb'));
    }
    public static function maxDownloads_Set(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('max_downloads.set'));
    }
    public static function maxDownloads_Div_Set(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('max_downloads.div.set'));
    }
    public static function maxDownloads_Global_Set(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('max_downloads.global.set'));
    }
    public static function maxPeers_Normal_Set(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('max_peers.normal.set'));
    }
    public static function maxPeers_Seed_Set(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('max_peers.seed.set'));
    }
    public static function maxUploads_Set(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('max_uploads.set'));
    }
    public static function maxUploads_Div_Set(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('max_uploads.div.set'));
    }
    public static function maxUploads_Global_Set(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('max_uploads.global.set'));
    }
    public static function minPeers_Normal_Set(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('min_peers.normal.set'));
    }
    public static function minPeers_Seed_Set(){
        // TODO: verify parameters
        return new ThrottleRequestXmlRpc(self::cmd('min_peers.seed.set'));
    }

    // Variables
    public static function down_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('down'));
    }
    public static function globalDown_MaxRate_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('global_down.max_rate'));
    }
    public static function globalDown_Rate_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('global_down.rate'));
    }
    public static function globalDown_Total_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('global_down.total'));
    }
    public static function globalUp_MaxRate_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('global_up.max_rate'));
    }
    public static function globalUp_Rate_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('global_up.rate'));
    }
    public static function globalUp_Total_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('global_up.total'));
    }
    public static function ip_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('ip'));
    }
    public static function maxDownloads_Div_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('max_downloads.div'));
    }
    public static function maxDownloads_Global_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('max_downloads.global'));
    }
    public static function maxPeers_Normal_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('max_peers.normal'));
    }
    public static function maxPeers_Seed_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('max_peers.seed'));
    }
    public static function maxUploads_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('max_uploads'));
    }
    public static function maxUploads_Div_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('max_uploads.div'));
    }
    public static function maxUploads_Global_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('max_uploads.global'));
    }
    public static function minDownloads_Set_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('min_downloads.set'));
    }
    public static function minPeers_Normal_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('min_peers.normal'));
    }
    public static function minPeers_Seed_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('min_peers.seed'));
    }
    public static function minUploads_Set_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('min_uploads.set'));
    }
    public static function up_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('up'));
    }
    public static function up_Max_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('up.max'));
    }
    public static function up_Rate_Get(){
        return new ThrottleRequestXmlRpc(self::cmd('up.rate'));
    }
}
