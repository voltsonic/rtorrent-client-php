<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\ThrottleRequestXmlRpc;

class ThrottleApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function down_Max(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::down_Max(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function down_Rate(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::down_Rate(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function globalDown_MaxRate_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::globalDown_MaxRate_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function globalDown_MaxRate_SetKb(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::globalDown_MaxRate_SetKb(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function globalUp_MaxRate_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::globalUp_MaxRate_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function globalUp_MaxRate_SetKb(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::globalUp_MaxRate_SetKb(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxDownloads_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxDownloads_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxDownloads_Div_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxDownloads_Div_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxDownloads_Global_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxDownloads_Global_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxPeers_Normal_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxPeers_Normal_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxPeers_Seed_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxPeers_Seed_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxUploads_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxUploads_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxUploads_Div_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxUploads_Div_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxUploads_Global_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxUploads_Global_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function minPeers_Normal_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::minPeers_Normal_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function minPeers_Seed_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::minPeers_Seed_Set(), $callbackMethod, $disableStream);
    }

    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function down_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::down_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function globalDown_MaxRate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::globalDown_MaxRate_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function globalDown_Rate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::globalDown_Rate_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function globalDown_Total_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::globalDown_Total_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function globalUp_MaxRate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::globalUp_MaxRate_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function globalUp_Rate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::globalUp_Rate_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function globalUp_Total_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::globalUp_Total_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function ip_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::ip_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxDownloads_Div_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxDownloads_Div_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxDownloads_Global_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxDownloads_Global_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxPeers_Normal_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxPeers_Normal_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxPeers_Seed_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxPeers_Seed_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxUploads_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxUploads_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxUploads_Div_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxUploads_Div_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxUploads_Global_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::maxUploads_Global_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function minDownloads_Set_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::minDownloads_Set_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function minPeers_Normal_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::minPeers_Normal_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function minPeers_Seed_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::minPeers_Seed_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function minUploads_Set_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::minUploads_Set_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function up_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::up_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function up_Max_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::up_Max_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function up_Rate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(ThrottleRequestXmlRpc::up_Rate_Get(), $callbackMethod, $disableStream);
    }
}
