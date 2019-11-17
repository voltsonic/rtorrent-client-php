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

final class SingleCommandsTest extends TestCase {
    use ClientBuilderTrait;
    use ClientRebootTrait;
    use ClientGenericResponsesTrait;

    /**
     * @throws ErrorException
     */
    public function testSingleBasic(){
        // Variable

        // Command
        $counts = 0;
        $this->torrentClient()
            ->add(SystemRequestXmlRpc::listMethods()->addParse(function($item) use(&$counts) {
                $counts++;
            }))
            ->run();

        $this->assertGreaterThanOrEqual(846, $counts, "Failed Single Command.");
    }
}