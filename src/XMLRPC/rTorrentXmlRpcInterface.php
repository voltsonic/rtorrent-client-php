<?php

namespace Voltsonic\rTorrent\XMLRPC;

use ErrorException;
use Voltsonic\rTorrent\Statics\XMLRPC\ResponsesXmlRpcStatics;

interface rTorrentXmlRpcInterface {
    /**
     * Generally you will not access this directly unless adding new commands that are not yet supported directly.
     *
     * @param callable $item
     * @param string $method
     * @param array $params
     * @param array $array_pointer
     * @param bool $stream
     * @param array $xmlrpc_output_options
     * @throws ErrorException
     */
    public function run(
        callable $item,
        string $method,
        $params = [],
        array $array_pointer = ResponsesXmlRpcStatics::STANDARD_ARRAY,
        bool $stream = true,
        array $xmlrpc_output_options = []
    );
}