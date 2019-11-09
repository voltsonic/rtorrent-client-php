<?php
declare(strict_types=1);

namespace VoltsonicTests\Traits;

trait ClientRebootTrait {
    protected function torrentReboot(): void {
        exec("docker-compose --no-ansi restart box 2>&1", $o, $r);
        sleep(5);
    }
}