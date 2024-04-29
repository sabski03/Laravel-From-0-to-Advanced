<?php

use App\Http\Controllers\PostsController;
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

Route::get('/', function (Request $request){
//   return $request->host();

//    return $request->getHttpHost();

//    return $request->getSchemeAndHttpHost();

//    if($request->method('get')){
//        return "true";
//    }

//    return $request->ip();


});

//Route::patch('/posts/{id}', [PostsController::class, 'update']);

//Route::get('posts/path', [PostsController::class, 'the_path'])->name('posts.path');
