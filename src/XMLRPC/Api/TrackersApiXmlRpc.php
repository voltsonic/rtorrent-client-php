<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\TrackersRequestXmlRpc;

class TrackersApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function isEnabled_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackersRequestXmlRpc::isEnabled_Set(), $callbackMethod, $disableStream);
    }

    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function group_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackersRequestXmlRpc::group_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function id_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackersRequestXmlRpc::id_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function minInterval_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackersRequestXmlRpc::minInterval_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function normalInterval_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackersRequestXmlRpc::normalInterval_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function scrapeComplete_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackersRequestXmlRpc::scrapeComplete_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function scrapeDownloaded_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackersRequestXmlRpc::scrapeDownloaded_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function scrapeIncomplete_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackersRequestXmlRpc::scrapeIncomplete_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function scrapeTimeLast_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackersRequestXmlRpc::scrapeTimeLast_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function type_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackersRequestXmlRpc::type_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function url_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(TrackersRequestXmlRpc::url_Get(), $callbackMethod, $disableStream);
    }
}
