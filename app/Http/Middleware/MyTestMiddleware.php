<?php

namespace App\Http\Middleware;

use App\Services\Utility\MyLogger2;
use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class MyTestMiddleware
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
        $expires = Carbon::now()->addMinutes(1);
        $logger = new MyLogger2();
        $logger->info("Entering MyTestMiddleware!");
        $username = $request->input('username');
        if($username != null){
            Cache::put('mydata', $username, $expires );
            $logger->info("Username added to cache for 1 min in middleware");
        }else{
            if(Cache::has('mydata')){
                $username = Cache::get('mydata');
                $logger->info("Username was in cache : ".$username);
            }else{
                $logger->info("Cache was empty, not username found");
            }
            $logger->info("Username was blank, nothing saved to cache");

        }


        return $next($request);
    }
}
