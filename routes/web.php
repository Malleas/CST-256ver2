<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/hello', function () {
    echo "Hello World";
});

Route::get('/helloworld', function(){
   return view ('helloworld');
});

Route::get('/test', 'App\Http\Controllers\TestController@test2');

Route::get('/user', 'App\Http\Controllers\UserController@foo');

Route::post('/whoami', 'App\Http\Controllers\WhatsMyNameController@index');

Route::get('/askme', function (){
    return view('whoami');
});

Route::get('/login', function (){
    return view('login');
});

Route::post('/dologin', 'App\Http\Controllers\LoginController@index');

Route::get('/login2', function (){
    return view('login2');
});

Route::get('/login3', function (){
    return view('login3');
});

Route::post('/dologin3', 'App\Http\Controllers\Login3Controller@index');

Route::resource('usersrest', 'App\Http\Controllers\UsersRestController');

Route::get('/guzzle', 'App\Http\Controllers\RestClientController@index');

Route::get('/loggingservice', 'App\Http\Controllers\TestLoggingController@index');
