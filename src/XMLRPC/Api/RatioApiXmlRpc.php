<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\RatioRequestXmlRpc;

class RatioApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function seeding_Ratio_Disable(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(RatioRequestXmlRpc::seeding_Ratio_Disable(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function seeding_Ratio_Enable(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(RatioRequestXmlRpc::seeding_Ratio_Enable(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function seeding_Ratio_Max_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(RatioRequestXmlRpc::seeding_Ratio_Max_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function seeding_Ratio_Min_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(RatioRequestXmlRpc::seeding_Ratio_Min_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function seeding_Ratio_Upload_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(RatioRequestXmlRpc::seeding_Ratio_Upload_Set(), $callbackMethod, $disableStream);
    }

    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function seeding_Ratio_Max_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(RatioRequestXmlRpc::seeding_Ratio_Max_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function seeding_Ratio_Min_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(RatioRequestXmlRpc::seeding_Ratio_Min_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function seeding_Ratio_Upload_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(RatioRequestXmlRpc::seeding_Ratio_Upload_Get(), $callbackMethod, $disableStream);
    }
}
