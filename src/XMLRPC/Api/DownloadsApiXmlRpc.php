<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\XMLRPC\Requests\DownloadsRequestXmlRpc;

class DownloadsApiXmlRpc extends __rTorrentXmlRpcAbstract {
    // Commands
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function checkHash(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::checkHash(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function connectionCurrent_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::connectionCurrent_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function custom_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::custom_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function custom1_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::custom1_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function custom2_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::custom2_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function custom3_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::custom3_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function custom4_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::custom4_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function custom5_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::custom5_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function directory_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::directory_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function directoryBase_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::directoryBase_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function hashingFailed_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::hashingFailed_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function ignoreCommands_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::ignoreCommands_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxFileSize_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::maxFileSize_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function message_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::message_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function peersMax_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::peersMax_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function peersMin_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::peersMin_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function priority_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::priority_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function start(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::start(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function stop(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::stop(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function throttleName_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::throttleName_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function tiedToFile_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::tiedToFile_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function trackerNumwant_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::trackerNumwant_Set(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function uploadsMax_Set(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::uploadsMax_Set(), $callbackMethod, $disableStream);
    }

    // Variables
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function baseFilename_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::baseFilename_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function basePath_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::basePath_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function bitfield_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::bitfield_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function bytesDone_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::bytesDone_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function chunkSize_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::chunkSize_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function chunksHashed_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::chunksHashed_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function complete_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::complete_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function completedBytes_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::completedBytes_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function completedChunks_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::completedChunks_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function connectionCurrent_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::connectionCurrent_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function connectionLeech_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::connectionLeech_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function connectionSeed_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::connectionSeed_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function custom_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::custom_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function custom1_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::custom1_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function custom2_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::custom2_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function custom3_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::custom3_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function custom4_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::custom4_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function custom5_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::custom5_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function customThrow_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::customThrow_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function createLink_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::createLink_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function creationDate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::creationDate_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function deleteLink_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::deleteLink_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function deleteTied_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::deleteTied_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function directory_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::directory_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function directoryBase_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::directoryBase_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function down_Rate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::down_Rate_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function down_Total_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::down_Total_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function freeDiskspace_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::freeDiskspace_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function hash_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::hash_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function hashing_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::hashing_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function hashingFailed_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::hashingFailed_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function ignoreCommands_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::ignoreCommands_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function leftBytes_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::leftBytes_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function localId_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::localId_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function localIdHtml_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::localIdHtml_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function loadedFile_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::loadedFile_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxFileSize_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::maxFileSize_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function maxSizePex_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::maxSizePex_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function message_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::message_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function mode_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::mode_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function multicall2_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::multicall2_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function name_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::name_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function peerExchange_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::peerExchange_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function peersAccounted_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::peersAccounted_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function peersComplete_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::peersComplete_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function peersConnected_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::peersConnected_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function peersMax_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::peersMax_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function peersMin_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::peersMin_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function peersNotConnected_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::peersNotConnected_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function priority_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::priority_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function priorityStr_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::priorityStr_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function ratio_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::ratio_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sizeBytes_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::sizeBytes_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sizeChunks_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::sizeChunks_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sizeFiles_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::sizeFiles_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function sizePex_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::sizePex_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function skip_Rate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::skip_Rate_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function skip_Total_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::skip_Total_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function state_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::state_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function stateChanged_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::stateChanged_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function stateCounter_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::stateCounter_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function throttleName_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::throttleName_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function tiedToFile_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::tiedToFile_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function timestamp_Finished_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::timestamp_Finished_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function timestamp_Started_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::timestamp_Started_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function trackerFocus_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::trackerFocus_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function trackerNumwant_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::trackerNumwant_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function trackerSize_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::trackerSize_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function up_Rate_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::up_Rate_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function up_Total_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::up_Total_Get(), $callbackMethod, $disableStream);
    }
    /**
     * @param callable $callbackMethod
     * @param bool $disableStream
     * @throws ErrorException
     */
    public function uploadsMax_Get(callable $callbackMethod, $disableStream = false){
        // TODO: needs param verification.
        $this->runArray(DownloadsRequestXmlRpc::uploadsMax_Get(), $callbackMethod, $disableStream);
    }
}
