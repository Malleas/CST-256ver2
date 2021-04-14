<?php


namespace App\Services\Utility;


interface ILogger
{
    static function getLogger();

    public function debug($msg);

    public function info($msg);

    public function warning($msg);

    public function error($msg);


}
