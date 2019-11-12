<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\MemoryPiecesRequestXmlRpc;

class MemoryPiecesApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function memory_Max_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::memory_Max_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function hash_OnCompletion_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::hash_OnCompletion_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function preload_MinSize_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::preload_MinSize_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function preload_MinRate_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::preload_MinRate_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function preload_Type_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::preload_Type_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sync_AlwaysSafe_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::sync_AlwaysSafe_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sync_Timeout_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::sync_Timeout_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sync_TimeoutSafe_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::sync_TimeoutSafe_Set(), $callbackMethod, $disableStream);
    }

    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function memory_Current_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::memory_Current_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function memory_Max_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::memory_Max_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function hash_OnCompletion_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::hash_OnCompletion_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function preload_Type_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::preload_Type_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function preload_MinSize_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::preload_MinSize_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function preload_MinRate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::preload_MinRate_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function statsPreloaded_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::statsPreloaded_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function statsNotPreloaded_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::statsNotPreloaded_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sync_AlwaysSafe_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::sync_AlwaysSafe_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sync_Timeout_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::sync_Timeout_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sync_TimeoutSafe_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(MemoryPiecesRequestXmlRpc::sync_TimeoutSafe_Get(), $callbackMethod, $disableStream);
    }
}
