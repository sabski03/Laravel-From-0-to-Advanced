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

//Route::get('/', function (Request $request ) {
//    $data = $request->all();
//    return dd($data);
//});

//Route::get('/', function (Request $request ) {
//    $data = $request->collect();
////    return $data->get('name');
////    return $data->all();
////    return $data->each(function ($item, $key){
////
////    });
//    return $data->count();
//});

//Route::get('/', function (Request $request ) {
//    $data = $request->input();
//    return $data['name'];
////});
//
//Route::get('/', function (Request $request ) {
//    return view('welcome');
//});
//
//Route::post('/colors', function (Request $request ) {
//    return $request->input('colors.*.name');
//});
//
//Route::get('/custom', function (Request $request ) {
//    return $request->query('name', 'Saba');
//});


//Route::post('/date', function (Request $request){
////    dd(gettype($request->input()));
////    dd(gettype($request->input('appointment')));
////    dd(gettype($request->date('appointment')));
//
////    $obj = $request->date('appointment', 'Y-m-d');
////    return $obj->diffForHumans();
//
//    return $request->appointment;
//
//});


Route::get('/', function (Request $request){
    return view('welcome');
});

//Route::post('/custom', function (Request $request){
////    $inputs = $request->only(['email', 'checkBox']);
////    $inputs = $request->except('email');
////    $inputs = $request->only('email','password');
//
////    dd($inputs);
//
////    if($request->has('email','checkBox')){
////        return 'email is present';
////    }
//
////    if($request->hasAny('email','checkBox')){
////        return 'email is present';
////    }
//
//});

Route::get('/data', function (Request $request){
//    $inputs = $request->merge(['email' => 'saba27ge@gmail.com']);
    $inputs = $request->mergeIfMissing(['email' => 'saba27ge@gmail.com']);

    dd($request->all());

//
//    if ($request->hasAny('email','checkBox')){
//        return "values present";
//    }
//    if ($request->missing('email')){
//        return "email key is missing";
//    }
});



