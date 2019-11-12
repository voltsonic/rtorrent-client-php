<?php

namespace Voltsonic\rTorrent\XMLRPC\Requests;

class DownloadsRequestXmlRpc extends __RequestsXmlRpcAbstract
{
    protected static $methodPrefix = 'd';

    // Commands
    public static function checkHash(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('check_hash'));
    }
    public static function connectionCurrent_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('connection_current.set'));
    }
    public static function custom_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('custom.set'));
    }
    public static function custom1_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('custom1.set'));
    }
    public static function custom2_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('custom2.set'));
    }
    public static function custom3_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('custom3.set'));
    }
    public static function custom4_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('custom4.set'));
    }
    public static function custom5_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('custom5.set'));
    }
    public static function directory_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('directory.set'));
    }
    public static function directoryBase_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('directory_base.set'));
    }
    public static function hashingFailed_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('hashing_failed.set'));
    }
    public static function ignoreCommands_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('ignore_commands.set'));
    }
    public static function maxFileSize_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('max_file_size.set'));
    }
    public static function message_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('message.set'));
    }
    public static function peersMax_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('peers_max.set'));
    }
    public static function peersMin_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('peers_min.set'));
    }
    public static function priority_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('priority.set'));
    }
    public static function start(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('start'));
    }
    public static function stop(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('stop'));
    }
    public static function throttleName_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('throttle_name.set'));
    }
    public static function tiedToFile_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('tied_to_file.set'));
    }
    public static function trackerNumwant_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('tracker_numwant.set'));
    }
    public static function uploadsMax_Set(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('uploads_max.set'));
    }

    // Variables
    public static function baseFilename_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('base_filename'));
    }
    public static function basePath_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('base_path'));
    }
    public static function bitfield_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('bitfield'));
    }
    public static function bytesDone_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('bytes_done'));
    }
    public static function chunkSize_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('chunk_size'));
    }
    public static function chunksHashed_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('chunks_hashed'));
    }
    public static function complete_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('complete'));
    }
    public static function completedBytes_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('completed_bytes'));
    }
    public static function completedChunks_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('completed_chunks'));
    }
    public static function connectionCurrent_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('connection_current'));
    }
    public static function connectionLeech_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('connection_leech'));
    }
    public static function connectionSeed_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('connection_seed'));
    }
    public static function custom_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('custom'));
    }
    public static function custom1_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('custom1'));
    }
    public static function custom2_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('custom2'));
    }
    public static function custom3_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('custom3'));
    }
    public static function custom4_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('custom4'));
    }
    public static function custom5_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('custom5'));
    }
    public static function customThrow_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('custom_throw'));
    }
    public static function createLink_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('create_link'));
    }
    public static function creationDate_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('creation_date'));
    }
    public static function deleteLink_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('delete_link'));
    }
    public static function deleteTied_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('delete_tied'));
    }
    public static function directory_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('directory'));
    }
    public static function directoryBase_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('directory_base'));
    }
    public static function down_Rate_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('down.rate'));
    }
    public static function down_Total_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('down.total'));
    }
    public static function freeDiskspace_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('free_diskspace'));
    }
    public static function hash_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('hash'));
    }
    public static function hashing_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('hashing'));
    }
    public static function hashingFailed_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('hashing_failed'));
    }
    public static function ignoreCommands_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('ignore_commands'));
    }
    public static function leftBytes_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('left_bytes'));
    }
    public static function localId_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('local_id'));
    }
    public static function localIdHtml_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('local_id_html'));
    }
    public static function loadedFile_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('loaded_file'));
    }
    public static function maxFileSize_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('max_file_size'));
    }
    public static function maxSizePex_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('max_size_pex'));
    }
    public static function message_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('message'));
    }
    public static function mode_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('mode'));
    }
    public static function multicall2_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('multicall2'));
    }
    public static function name_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('name'));
    }
    public static function peerExchange_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('peer_exchange'));
    }
    public static function peersAccounted_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('peers_accounted'));
    }
    public static function peersComplete_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('peers_complete'));
    }
    public static function peersConnected_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('peers_connected'));
    }
    public static function peersMax_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('peers_max'));
    }
    public static function peersMin_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('peers_min'));
    }
    public static function peersNotConnected_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('peers_not_connected'));
    }
    public static function priority_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('priority'));
    }
    public static function priorityStr_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('priority_str'));
    }
    public static function ratio_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('ratio'));
    }
    public static function sizeBytes_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('size_bytes'));
    }
    public static function sizeChunks_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('size_chunks'));
    }
    public static function sizeFiles_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('size_files'));
    }
    public static function sizePex_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('size_pex'));
    }
    public static function skip_Rate_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('skip.rate'));
    }
    public static function skip_Total_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('skip.total'));
    }
    public static function state_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('state'));
    }
    public static function stateChanged_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('state_changed'));
    }
    public static function stateCounter_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('state_counter'));
    }
    public static function throttleName_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('throttle_name'));
    }
    public static function tiedToFile_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('tied_to_file'));
    }
    public static function timestamp_Finished_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('timestamp.finished'));
    }
    public static function timestamp_Started_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('timestamp.started'));
    }
    public static function trackerFocus_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('tracker_focus'));
    }
    public static function trackerNumwant_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('tracker_numwant'));
    }
    public static function trackerSize_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('tracker_size'));
    }
    public static function up_Rate_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('up.rate'));
    }
    public static function up_Total_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('up.total'));
    }
    public static function uploadsMax_Get(){
        // TODO: verify parameters
        return new DownloadsRequestXmlRpc(self::cmd('uploads_max'));
    }
}