<?php


namespace App\Services\Utility;


use Illuminate\Support\Facades\Log;

class MyLogger1 implements ILogger
{

   static function getLogger()
    {
        // TODO: Implement getLogger() method.
    }

    public function debug($msg)
    {
        Log::debug($msg);
    }

    public function info($msg)
    {
       Log::info($msg);
    }

    public function warning($msg)
    {
        Log::warning($msg);
    }

    public function error($msg)
    {
        Log::error($msg);
    }
}
