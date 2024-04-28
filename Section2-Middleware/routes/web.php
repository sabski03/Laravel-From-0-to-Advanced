<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CalculateCode;

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
    return view('welcome');
});


Route::get('/profile', function (){
    return 'profile';
});

Route::get('/dashboard', function (){
    return 'dashboard';
});


