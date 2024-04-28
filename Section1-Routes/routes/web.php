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

Route::get('/{id}', function (int $id = null) {
    return $id;
});
Route::get('/user/{id}', function ($id) {
    return $id;
})->where('id',23);

Route::get('/user/{name}', function ($name){
    return $name;
})->where('name','[A-Za-z]+');

Route::get('/user/{name}/{id}', function (string $name,int $id){
    return $name . $id;
})->where(['name' =>'[A-Za-z]+', 'id' => '[0-9]+']);

//when you use whereAlpha you cant input integer when there should be a string
Route::get('/user/{name}/{id}', function ($name, $id){
    return $name . $id;
})->whereAlpha(['name']);

//when you use whereNumber you cant input string when there should be an integer
Route::get('/user/{name}/{id}', function ($name, $id){
    return $name . $id;
})->whereNumber(['id']);

//when you use whereIn you should write whatever the parameters are in the url
Route::get('/user/{categories}', function ($categories){
    return $categories;
})->whereIn('categories', ['php','java']);

Route::get('/', function (){
    return view('welcome');
})->name('home');

Route::get('/contact', function (){
    return "contact";
})->name('company.contact');

Route::get('/profile', function (){
    return "profile";
})->name('company.profile');






