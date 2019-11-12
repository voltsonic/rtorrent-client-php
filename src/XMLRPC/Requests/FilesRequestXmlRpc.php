<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class FilesRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'f';

    // Variables
    public static function completedChunks_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('completed_chunks'));
    }
    public static function frozenPath_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('frozen_path'));
    }
    public static function lastTouched_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('last_touched'));
    }
    public static function matchDepthNext_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('match_depth_next'));
    }
    public static function matchDepthPrev_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('match_depth_prev'));
    }
    public static function offset_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('offset'));
    }
    public static function path_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('path'));
    }
    public static function pathComponents_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('path_components'));
    }
    public static function pathDepth_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('path_depth'));
    }
    public static function priority_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('priority'));
    }
    public static function rangeFirst_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('range_first'));
    }
    public static function rangeSecond_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('range_second'));
    }
    public static function sizeBytes_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('size_bytes'));
    }
    public static function sizeChunks_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('size_chunks'));
    }
    public static function priority_Set_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('priority.set'));
    }
    public static function filenameLast_Get(){
        // TODO: verify parameters
        return new FilesRequestXmlRpc(self::cmd('fi.filename_last'));
    }
}
