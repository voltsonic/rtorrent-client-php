<?php
declare(strict_types=1);

namespace VoltsonicTests\Client\XMLRPC;

use ErrorException;
use PHPUnit\Framework\TestCase;
use VoltsonicTests\Traits\ClientBuilderTrait;
use VoltsonicTests\Traits\ClientGenericResponsesTrait;
use VoltsonicTests\Traits\ClientRebootTrait;

final class SystemCommandsTest extends TestCase {
    use ClientBuilderTrait;
    use ClientRebootTrait;
    use ClientGenericResponsesTrait;

    /**
     * @throws ErrorException
     */
    public function testShutdownQuick(){
        $this->torrentClient()->commands_System->shutdown_Quick($this->responseCode($completeCode));
        $this->responseCodeAssert($completeCode);
        $this->torrentReboot();
    }

    /**
     * @throws ErrorException
     */
    public function testShutdownNormal(){
        $this->torrentClient()->commands_System->shutdown_Normal($this->responseCode($completeCode));
        $this->responseCodeAssert($completeCode);
        $this->torrentReboot();
    }

    /**
     * @param string[] $checkCommands
     * @throws ErrorException
     */
    public function testListMethods(
        $checkCommands = [
            'system.listMethods',
            'd.completed_chunks',
            'd.tracker_announce',
            'group2.rat_4.ratio.upload'
        ]
    ){
        $ct = 0;

        $this->torrentClient()
            ->commands_System
            ->listMethods(function($command) use(&$ct, &$checkCommands) {
                $checkCommands = array_filter($checkCommands, function($v) use($command) {
                    return $command !== $v;
                });
                $ct++;
            });
        $this->assertGreaterThanOrEqual(846, $ct, 'Methods list is shorter then expected.');
        if(!empty($checkCommands))
            foreach($checkCommands as $command)
                $this->fail('Missing "'.$command.'" command in list.');
    }
}