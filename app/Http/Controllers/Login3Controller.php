<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Business\SercurityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Login3Controller extends Controller
{
    private function validateForm(Request $request){
        $rules = ['username'=> 'Required | Between:4,10 | Alpha', 'password'=>'Required | Between:4,10'];
        $this->validate($request, $rules);
    }

    public function index(Request $request){
        Log::info("Entering LoginController::index()");
        $username = $request->input('username');
        $password = $request->input('password');
        Log::info("Parameters are: ".array('username'=>$username, 'password'=>$password));
        $this->validateForm($request);
        $user = new User($username, $password);
        $service = new SercurityService();

        if($service->login($user)){
            Log::info("exit LoginController::index() with login passing");
            return view ('loginPassed2')->with(['username'=> $username, 'user'=>$user]);
        }else{
            Log::info("exit LoginController::index() with login failing");
            return view("loginPassed2")->with(['username'=> $username, 'user'=>$user]);
        }

    }
}
