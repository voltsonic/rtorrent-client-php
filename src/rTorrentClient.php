<?php

namespace Voltsonic\rTorrent;

use Voltsonic\rTorrent\Guzzle\RequestRPC;

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
    }
}
