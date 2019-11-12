<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\FilesRequestXmlRpc;

class FilesApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function completedChunks_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::completedChunks_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function frozenPath_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::frozenPath_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function lastTouched_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::lastTouched_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function matchDepthNext_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::matchDepthNext_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function matchDepthPrev_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::matchDepthPrev_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function offset_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::offset_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function path_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::path_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function pathComponents_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::pathComponents_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function pathDepth_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::pathDepth_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function priority_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::priority_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function rangeFirst_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::rangeFirst_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function rangeSecond_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::rangeSecond_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sizeBytes_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::sizeBytes_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sizeChunks_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::sizeChunks_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function priority_Set_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::priority_Set_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function filenameLast_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(FilesRequestXmlRpc::filenameLast_Get(), $callbackMethod, $disableStream);
    }
}
