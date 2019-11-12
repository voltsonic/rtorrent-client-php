<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\NetworkRequestXmlRpc;

class NetworkApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function bindAddress_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::bindAddress_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function localAddress_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::localAddress_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function http_Capath_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::http_Capath_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function http_Cacert_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::http_Cacert_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function http_MaxOpen_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::http_MaxOpen_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function http_ProxyAddress_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::http_ProxyAddress_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxOpenFiles_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::maxOpenFiles_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function portOpen_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::portOpen_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function portRandom_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::portRandom_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function portRange_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::portRange_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function proxyAddress_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::proxyAddress_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function receiveBuffer_Size_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::receiveBuffer_Size_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function scgi_DontRoute_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::scgi_DontRoute_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function scgi_OpenLocal(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::scgi_OpenLocal(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function scgi_OpenPort(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::scgi_OpenPort(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sendBuffer_Size_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::sendBuffer_Size_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function xmlrpc_Dialect_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::xmlrpc_Dialect_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function xmlrpc_SizeLimit_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::xmlrpc_SizeLimit_Set(), $callbackMethod, $disableStream);
    }

    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function bindAddress_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::bindAddress_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function localAddress_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::localAddress_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function http_Capath_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::http_Capath_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function http_Cacert_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::http_Cacert_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function http_MaxOpen_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::http_MaxOpen_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function http_ProxyAddress_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::http_ProxyAddress_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxOpenFiles_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::maxOpenFiles_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxOpenSockets_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::maxOpenSockets_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function portOpen_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::portOpen_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function portRandom_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::portRandom_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function portRange_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::portRange_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function proxyAddress_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::proxyAddress_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function receiveBuffer_Size_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::receiveBuffer_Size_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function scgi_DontRoute_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::scgi_DontRoute_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sendBuffer_Size_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::sendBuffer_Size_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function xmlrpc_SizeLimit_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(NetworkRequestXmlRpc::xmlrpc_SizeLimit_Get(), $callbackMethod, $disableStream);
    }
}
