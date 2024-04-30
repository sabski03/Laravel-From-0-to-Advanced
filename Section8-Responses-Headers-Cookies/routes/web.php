<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;

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

//    return response('Hello Guys', 200)
//        ->header('Content-Type','text/plain')
//        ->header('Header-1', 'this is the value for header 1')
//        ->header('Header-2', 'this is the value for header 2');

//    return response('with many headers', 200)->withHeaders([
//        'Content-Type' => 'text/plain',
//        'Header-1' => 'this is the value for header 1',
//        'Header-2' => 'this is the value for header 2'
//    ]);



});


Route::middleware('cache.headers:public;max_age=86200;etag')->group(function (){
    Route::get('/dashboard', function (){

        $user = 'Saba';

        $cookie = cookie('user',$user, 1);

        Cookie::expire('visit');

        return response('Dashboard');
        //return response('Dashboard')->withoutCookie('visit');

//        return "DASHBOARD";

    });

    Route::get('/posts', function (Request $request){

        $cookie = cookie('visit', 1, 30);

        return response('POST')->cookie($cookie);
//        return "Welcome To Your Post" . $request->cookie('user');
    });

});
