<?php
declare(strict_types=1);

namespace VoltsonicTests\Client\XMLRPC;

use ErrorException;
use PHPUnit\Framework\TestCase;

final class SystemCommandsTest extends TestCase {
    use ClientBuilderTrait;

    /**
     * @param string[] $checkCommands
     * @throws ErrorException
     */
    public function testSystemListMethods(
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
        if(!empty($checkCommands)){
            foreach($checkCommands as $command){
                $this->fail('Missing "'.$command.'" command in list.');
            }
        }
        $this->assertGreaterThanOrEqual(846, $ct, 'Methods list is shorter then expected.');
    }
}