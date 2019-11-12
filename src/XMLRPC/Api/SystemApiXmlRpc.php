<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\SystemRequestXmlRpc;

class SystemApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function listMethods(callable $callbackMethod, $disableStream = false){
        $this->runArray(SystemRequestXmlRpc::listMethods(), $callbackMethod, $disableStream);
    }

    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function shutdown_Normal(callable $callbackMethod, $disableStream = true){
        $this->runArray(SystemRequestXmlRpc::shutdown_Normal(), $callbackMethod, $disableStream);
    }

    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function shutdown_Quick(callable $callbackMethod, $disableStream = true){
        $this->runArray(SystemRequestXmlRpc::shutdown_Quick(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function file_Allocate_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SystemRequestXmlRpc::file_Allocate_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function file_MaxSize_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SystemRequestXmlRpc::file_MaxSize_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function file_SplitSize_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SystemRequestXmlRpc::file_SplitSize_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function file_SplitSuffix_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SystemRequestXmlRpc::file_SplitSuffix_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function daemon_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SystemRequestXmlRpc::daemon_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function env_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SystemRequestXmlRpc::env_Set(), $callbackMethod, $disableStream);
    }

    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function file_Allocate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SystemRequestXmlRpc::file_Allocate_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function file_MaxSize_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SystemRequestXmlRpc::file_MaxSize_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function file_SplitSize_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SystemRequestXmlRpc::file_SplitSize_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function file_SplitSuffix_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(SystemRequestXmlRpc::file_SplitSuffix_Get(), $callbackMethod, $disableStream);
    }
}
