<?php

namespace App\Services\Utility;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class MyLogger2 implements ILogger
{

     static function getLogger(): Logger
    {
        $logger = new Logger('myLog');
        $logger->pushHandler(new StreamHandler('/Applications/MAMP/htdocs/CST-256/storage/logs/myLog.log',Logger::DEBUG));
        return $logger;
    }

    public function debug($msg)
    {
        $logger = $this->getLogger();
        $logger->debug($msg);
    }

    public function info($msg)
    {
        $logger = $this->getLogger();
        $logger->info($msg);
    }

    public function warning($msg)
    {
        $logger = $this->getLogger();
        $logger->warning($msg);
    }

    public function error($msg)
    {
        $logger = $this->getLogger();
        $logger->error($msg);
    }
}
