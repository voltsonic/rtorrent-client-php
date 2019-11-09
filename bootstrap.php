<?php

include "vendor/autoload.php";

\Dotenv\Dotenv::create(__DIR__)->load();

$n = hrtime(true);
passthru('docker-compose --no-ansi up -d');
$p = (hrtime(true) - $n) / 1000000000;
print 'Docker Up: '.number_format($p, 3).' (s)'.PHP_EOL;
if($p > 1.6){
    print '| Sleeping 20 seconds for rutorrent to become up (if script didn\'t sleep long enough just re-run test the docker will be up at that point).'.PHP_EOL;
    sleep(20);
}
