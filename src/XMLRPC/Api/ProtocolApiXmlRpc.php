<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\ProtocolRequestXmlRpc;

class ProtocolApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function connection_Leech_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ProtocolRequestXmlRpc::connection_Leech_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function connection_Seed_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ProtocolRequestXmlRpc::connection_Seed_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function encryption_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ProtocolRequestXmlRpc::encryption_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function pex_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ProtocolRequestXmlRpc::pex_Set(), $callbackMethod, $disableStream);
    }

    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function connection_Leech_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ProtocolRequestXmlRpc::connection_Leech_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function connection_Seed_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ProtocolRequestXmlRpc::connection_Seed_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function pex_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ProtocolRequestXmlRpc::pex_Get(), $callbackMethod, $disableStream);
    }
}
