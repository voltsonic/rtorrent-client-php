<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class MultiCallRequestXmlRpc extends __RequestsXmlRpcAbstract {
    protected static $methodPrefix = 'system';

    /**
     * @param __RequestsXmlRpcInterface[] $requests
     * @return MultiCallRequestXmlRpc
     */
    public static function prepare($requests){
        return(new MultiCallRequestXmlRpc(self::cmd('multicall'), [
            array_map(function($request){
                /** @var __RequestsXmlRpcInterface $request */
                return $request->encodeMulti();
            }, $requests)
        ], array_map(function($request){
            /** @var __RequestsXmlRpcInterface $request */
            return $request->getStreamKeys();
        }, $requests)));
    }
}