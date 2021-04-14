<?php


namespace App\Services\Utility;


interface ILoggerService
{
    public function debug($msg);

    public function info($msg);

    public function warning($msg);

    public function error($msg);

}
