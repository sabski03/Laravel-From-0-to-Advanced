<?php

use App\Http\Controllers\SessionsController;
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
//    session(['secret' => '1234 my password']);
//    $value = session('secret');
//    return view('welcome', compact('value'));


});

Route::prefix('sessions')->controller(SessionsController::class)->group(function (){
    Route::get('/', 'index');
    Route::get('/set', 'set');
    Route::get('/delete', 'delete');
});
