<?php

use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    //$request->old('email');

    $request->cookie('laravel_session');
    return view('welcome');
})->name('home');

////if we want to save the flash as a session instead of saving it in a file /storage/framework/sessions/
////we can go to the .env file and change the SESSION_DRIVER= ---> from file to cookie
//Route::post('/flash', function (Request $request){
////    $request->flashOnly('username');
//    $request->flashExcept('email');
//    return "FLASH";
//});

Route::post('flash', function (Request $request){

    //$request->route('home')->withInput();

    return back()->withInput();
});
