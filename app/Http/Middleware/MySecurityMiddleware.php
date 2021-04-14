<?php

namespace App\Http\Middleware;

use App\Services\Utility\MyLogger2;
use Closure;
use Illuminate\Http\Request;

class MySecurityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $logger = new MyLogger2();
        $path = $request->path();
        $logger->info("Entering My Security Middleware in handle() at path: ".$path);

        $secureCheck = true;
        if($request->is('/') || $request->is('login2') || $request->is('dologin') ||
            $request->is('usersrest') || $request->is('usersrest/*') ||
            $request->is('loggingservice')){
            $secureCheck = false;

        }
        $logger->info($secureCheck ? "Security Middleware in handle()....Needs Security" : "Security Middleware in handle()....No Security Required");

        if($secureCheck){
            $logger->info("Leaving My Security Middleware in handle() doing a redirect back to login");
            return redirect('/login2');
        }

        return $next($request);
    }
}
