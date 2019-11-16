<?php
declare(strict_types=1);

namespace VoltsonicTests\Traits;

use Voltsonic\rTorrent\rTorrentXMLRPC;

trait ClientBuilderTrait {
    protected function torrentClient(): rTorrentXMLRPC
    {
        return new rTorrentXMLRPC('http://127.0.0.1:'.getenv("WEB_HTTP").'/RPC2');
    }
}