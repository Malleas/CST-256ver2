<?php


namespace App\Services\Utility;


use Illuminate\Support\Facades\Log;

class MyLogger3 implements ILoggerService
{

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
