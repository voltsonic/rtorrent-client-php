<?php

namespace Voltsonic\rTorrent\XMLRPC;

use ErrorException;

interface rTorrentXmlRpcInterface {
    /**
     * Generally you will not access this directly unless adding new commands that are not yet supported directly.
     *
     * @param callable $item
     * @param string $method
     * @param array $array_pointer
     * @param array $params
     * @param bool $stream
     * @param array $xmlrpc_output_options
     * @throws ErrorException
     */
    public function run(
        callable $item,
        string $method,
        array $array_pointer,
        $params = [],
        bool $stream = true,
        array $xmlrpc_output_options = []
    );
}