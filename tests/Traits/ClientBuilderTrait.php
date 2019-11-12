<?php
declare(strict_types=1);

namespace VoltsonicTests\Traits;

use Voltsonic\rTorrent\rTorrentClient;

trait ClientBuilderTrait {
    protected function torrentClient(): rTorrentClient
    {
        // TODO: verify parameters
        return new rTorrentClient('http://127.0.0.1:'.getenv("WEB_HTTP").'/RPC2');
    }
}