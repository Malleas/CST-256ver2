<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsMyNameController extends Controller
{
    public function index(Request $request){
        $path = $request->path();
        echo 'Path Method: '.$path.'</br>';

        $method = $request->isMethod('get')?"GET" : "POST";
        echo "GET or POST Method: ".$method.'</br>';

        $url = $request->url();
        echo "URL method: ".$url."</br>";

        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        echo "Your name is: ".$firstName." ".$lastName."</br>";

        $data = ['firstName'=> $firstName, 'lastName'=> $lastName];
        return view('thatswhoami')->with($data);

    }
}
