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

class User{
    public $username;
    public $email;

    function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }
}

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', function () {
//    $user = new User('saba','saba27ge@gmail.com');
//    return view('profile', ['user'=>$user]);

    return view('profile');


});
Route::view('/dashboard', 'dashboard');
Route::view('/posts', 'posts.create');


