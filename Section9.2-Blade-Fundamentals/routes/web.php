<?php

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
    return view('welcome', ['username' => 'saba', 'counts' => 20, 'status' => 'active', 'datas' => [1,2,3,4,5,6,7,8,9,10]]);

//    return view('welcome',
//        ['users' => [
//            'name' => ['saba','mari']
//        ]]);
});
