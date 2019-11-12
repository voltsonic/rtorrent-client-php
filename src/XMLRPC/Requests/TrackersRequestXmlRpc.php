<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class TrackersRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 't';

    // Commands
    public static function isEnabled_Set(){
        // TODO: verify parameters
        return new TrackersRequestXmlRpc(self::cmd('is_enabled.set'));
    }

    // Variables
    public static function group_Get(){
        // TODO: verify parameters
        return new TrackersRequestXmlRpc(self::cmd('group'));
    }
    public static function id_Get(){
        // TODO: verify parameters
        return new TrackersRequestXmlRpc(self::cmd('id'));
    }
    public static function minInterval_Get(){
        // TODO: verify parameters
        return new TrackersRequestXmlRpc(self::cmd('min_interval'));
    }
    public static function normalInterval_Get(){
        // TODO: verify parameters
        return new TrackersRequestXmlRpc(self::cmd('normal_interval'));
    }
    public static function scrapeComplete_Get(){
        // TODO: verify parameters
        return new TrackersRequestXmlRpc(self::cmd('scrape_complete'));
    }
    public static function scrapeDownloaded_Get(){
        // TODO: verify parameters
        return new TrackersRequestXmlRpc(self::cmd('scrape_downloaded'));
    }
    public static function scrapeIncomplete_Get(){
        // TODO: verify parameters
        return new TrackersRequestXmlRpc(self::cmd('scrape_incomplete'));
    }
    public static function scrapeTimeLast_Get(){
        // TODO: verify parameters
        return new TrackersRequestXmlRpc(self::cmd('scrape_time_last'));
    }
    public static function type_Get(){
        // TODO: verify parameters
        return new TrackersRequestXmlRpc(self::cmd('type'));
    }
    public static function url_Get(){
        // TODO: verify parameters
        return new TrackersRequestXmlRpc(self::cmd('url'));
    }
}