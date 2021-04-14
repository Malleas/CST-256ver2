<?php

namespace App\Http\Controllers;

use App\Services\Utility\ILoggerService;
use Illuminate\Http\Request;

class TestLoggingController extends Controller
{
    protected $logger;

    /**
     * TestLoggingController constructor.
     * @param ILoggerService $loggerService
     */
    public function __construct(ILoggerService $loggerService)
    {
        $this->logger = $loggerService;
    }


    public function index(){
        $this->logger->info("Adding a log in the TestLoggingController index()");
    }
}
