<?php

include "vendor/autoload.php";

\Dotenv\Dotenv::create(__DIR__)->load();

// Load .env
// Bootstrap in docker
passthru('docker-compose --no-ansi up -d');
