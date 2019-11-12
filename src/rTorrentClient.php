<?php

namespace Voltsonic\rTorrent;

use Voltsonic\rTorrent\Guzzle\RequestRPC;
use Voltsonic\rTorrent\XMLRPC\Api\SystemApiXmlRpc;

/**
 * Class rTorrentClient
 * @package Voltsonic\rTorrent
 */
class rTorrentClient {
    /**
     * @var RequestRPC
     */
    public $api;
    /**
     * @var SystemApiXmlRpc
     */
    public $commands_System;

    /**
     * rTorrentClient constructor.
     * @param string $rpc_address
     * @param array $guzzleBaseOptions
     * @param bool|string $configureTempDirectory defaults to system temp directory.
     * @param string $tempfilePrefix
     */
    public function __construct(
        $rpc_address,
        $guzzleBaseOptions = [],
        $configureTempDirectory = true,
        $tempfilePrefix = 'stm')
    {
        $this->api = new RequestRPC(
            $rpc_address,
            $guzzleBaseOptions,
            $configureTempDirectory !== false,
            $configureTempDirectory,
            $tempfilePrefix
        );

        $this->commands_System = new SystemApiXmlRpc($this->api);
    }
}
