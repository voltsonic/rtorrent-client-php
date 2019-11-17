<?php
declare(strict_types=1);

namespace VoltsonicTests\Client\XMLRPC;

use ErrorException;
use PHPUnit\Framework\TestCase;
use Voltsonic\rTorrent\Statics\XMLRPC\ResponsesXmlRpcStatics;
use Voltsonic\rTorrent\XMLRPC\Requests\SystemRequestXmlRpc;
use VoltsonicTests\Traits\ClientBuilderTrait;
use VoltsonicTests\Traits\ClientGenericResponsesTrait;
use VoltsonicTests\Traits\ClientRebootTrait;

final class MultiCommandsTest extends TestCase {
    use ClientBuilderTrait;
    use ClientRebootTrait;
    use ClientGenericResponsesTrait;

    /**
     * @param array $runCommands
     * @throws ErrorException
     */
    public function testMultiBasic($runCommands = [ 'system.listMethods' => [] ]){
        // Variable

        $counts = 0;
        $counts2 = 0;
        $this->torrentClient()
            ->add(SystemRequestXmlRpc::listMethods()->addParse(function($item) use(&$counts) {
                $counts++;
            }))
            ->add(SystemRequestXmlRpc::listMethods()->addParse(function($item) use(&$counts2) {
                $counts2++;
            }))
            ->run();

        $this->assertGreaterThanOrEqual(846, $counts, "First Counts Not Enough (846)");
        $this->assertEquals($counts, $counts2, "Counts did not match.");
    }
}