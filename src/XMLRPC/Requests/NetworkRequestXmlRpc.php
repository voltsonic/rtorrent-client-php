<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class NetworkRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'network';

    // Commands
    public static function bindAddress_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('bind_address.set'));
    }
    public static function localAddress_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('local_address.set'));
    }
    public static function http_Capath_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('http.capath.set'));
    }
    public static function http_Cacert_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('http.cacert.set'));
    }
    public static function http_MaxOpen_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('http.max_open.set'));
    }
    public static function http_ProxyAddress_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('http.proxy_address.set'));
    }
    public static function maxOpenFiles_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('max_open_files.set'));
    }
    public static function portOpen_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('port_open.set'));
    }
    public static function portRandom_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('port_random.set'));
    }
    public static function portRange_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('port_range.set'));
    }
    public static function proxyAddress_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('proxy_address.set'));
    }
    public static function receiveBuffer_Size_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('receive_buffer.size.set'));
    }
    public static function scgi_DontRoute_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('scgi.dont_route.set'));
    }
    public static function scgi_OpenLocal(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('scgi.open_local'));
    }
    public static function scgi_OpenPort(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('scgi.open_port'));
    }
    public static function sendBuffer_Size_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('send_buffer.size.set'));
    }
    public static function xmlrpc_Dialect_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('xmlrpc.dialect.set'));
    }
    public static function xmlrpc_SizeLimit_Set(){
        // TODO: verify parameters
        return new NetworkRequestXmlRpc(self::cmd('xmlrpc.size_limit.set'));
    }

    // Variables
    public static function bindAddress_Get(){
        return new NetworkRequestXmlRpc(self::cmd('bind_address'));
    }
    public static function localAddress_Get(){
        return new NetworkRequestXmlRpc(self::cmd('local_address'));
    }
    public static function http_Capath_Get(){
        return new NetworkRequestXmlRpc(self::cmd('http.capath'));
    }
    public static function http_Cacert_Get(){
        return new NetworkRequestXmlRpc(self::cmd('http.cacert'));
    }
    public static function http_MaxOpen_Get(){
        return new NetworkRequestXmlRpc(self::cmd('http.max_open'));
    }
    public static function http_ProxyAddress_Get(){
        return new NetworkRequestXmlRpc(self::cmd('http.proxy_address'));
    }
    public static function maxOpenFiles_Get(){
        return new NetworkRequestXmlRpc(self::cmd('max_open_files'));
    }
    public static function maxOpenSockets_Get(){
        return new NetworkRequestXmlRpc(self::cmd('max_open_sockets'));
    }
    public static function portOpen_Get(){
        return new NetworkRequestXmlRpc(self::cmd('port_open'));
    }
    public static function portRandom_Get(){
        return new NetworkRequestXmlRpc(self::cmd('port_random'));
    }
    public static function portRange_Get(){
        return new NetworkRequestXmlRpc(self::cmd('port_range'));
    }
    public static function proxyAddress_Get(){
        return new NetworkRequestXmlRpc(self::cmd('proxy_address'));
    }
    public static function receiveBuffer_Size_Get(){
        return new NetworkRequestXmlRpc(self::cmd('receive_buffer.size'));
    }
    public static function scgi_DontRoute_Get(){
        return new NetworkRequestXmlRpc(self::cmd('scgi.dont_route'));
    }
    public static function sendBuffer_Size_Get(){
        return new NetworkRequestXmlRpc(self::cmd('send_buffer.size'));
    }
    public static function xmlrpc_SizeLimit_Get(){
        return new NetworkRequestXmlRpc(self::cmd('xmlrpc.size_limit'));
    }
}
