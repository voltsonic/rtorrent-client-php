<?php
declare(strict_types=1);

namespace VoltsonicTests\Client\XMLRPC;

use Voltsonic\rTorrent\rTorrentClient;

trait ClientBuilderTrait {
    protected function torrentClient(): rTorrentClient
    {
        return new rTorrentClient('http://127.0.0.1:'.getenv("WEB_HTTP").'/RPC2');
    }
}