<?php

namespace Voltsonic\rTorrent\XMLRPC\Api;

use ErrorException;
use Voltsonic\rTorrent\Guzzle\ResponseRPC;
use Voltsonic\rTorrent\Statics\XMLRPC\ResponsesXmlRpcStatics;
use Voltsonic\rTorrent\XMLRPC\Requests\__RequestsXmlRpcInterface;

interface __rTorrentXmlRpcInterface {
    /**
     * Generally you will not access this directly unless adding new commands that are not yet supported directly.
     *
     * @param callable $item
     * @param __RequestsXmlRpcInterface $req
     * @param array $array_pointer
     * @param bool $stream
     * @param array $xmlrpc_output_options
     * @return true|ResponseRPC
     * @throws ErrorException
     */
    public function run(
        callable $item,
        __RequestsXmlRpcInterface $req,
        array $array_pointer = ResponsesXmlRpcStatics::STANDARD_ARRAY,
        bool $stream = true,
        array $xmlrpc_output_options = []
    );
}