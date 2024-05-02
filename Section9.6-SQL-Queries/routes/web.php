<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

//    DB::insert('INSERT INTO users (name, email, password) VALUES(?, ?, ?)', ['SABA', 'saba27ge@gmail.com', 'secret']);

//    $users = DB::select('SELECT * FROM users WHERE id = ?', [1]);
//    dd($users);

//    $newHashedPassword = Hash::make('secret');
//    $result = DB::update("UPDATE users SET PASSWORD = '$newHashedPassword', CREATED_AT = current_timestamp, UPDATED_AT = current_timestamp WHERE ID = 1");
//    dd($result);

    $delete = DB::delete("DELETE FROM users WHERE id = 3");
    dd($delete);

    return view('welcome');


});
