<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class ViewsRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'view';

    // Commands
    public static function add(){
        // TODO: verify parameters
        return new ViewsRequestXmlRpc(self::cmd('add'));
    }
    public static function filter(){
        // TODO: verify parameters
        return new ViewsRequestXmlRpc(self::cmd('filter'));
    }
    public static function filterOn(){
        // TODO: verify parameters
        return new ViewsRequestXmlRpc(self::cmd('filter_on'));
    }
    public static function list(){
        // TODO: verify parameters
        return new ViewsRequestXmlRpc(self::cmd('list'));
    }
    public static function set(){
        // TODO: verify parameters
        return new ViewsRequestXmlRpc(self::cmd('set'));
    }
    public static function sort(){
        // TODO: verify parameters
        return new ViewsRequestXmlRpc(self::cmd('sort'));
    }
    public static function sortCurrent(){
        // TODO: verify parameters
        return new ViewsRequestXmlRpc(self::cmd('sort_current'));
    }
    public static function sortNew(){
        // TODO: verify parameters
        return new ViewsRequestXmlRpc(self::cmd('sort_new'));
    }
}