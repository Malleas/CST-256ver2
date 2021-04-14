<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Business\SercurityService;
use App\Services\Utility\MyLogger2;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index(Request $request){
        $logger = new MyLogger2();
        $logger->info("Entering LoginController::index()");
        $username = $request->input('username');
        $password = $request->input('password');
        $logger->info('username: '.$username. ' password: '.$password);
        $user = new User($username, $password);
        $service = new SercurityService();

        try {
            if($service->login($user)){
                $logger->info("exit LoginController::index() with login passing");
                return view ('loginPassed2')->with(['username'=> $username, 'user'=>$user]);
            }else{
                $logger->info("exit LoginController::index() with login failing");
                return view("loginPassed2")->with(['username'=> $username, 'user'=>$user]);
            }
        }catch (\Exception $e){
            $logger->error("Exception LoginController::index()" . $e->getMessage());
        }

    }
}
