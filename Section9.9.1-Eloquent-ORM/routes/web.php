<?php

use App\Models\Post;
use App\Models\User;
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
//      creating data
//    $post = new Post;
//    $post->title = 'my first post';
//    $post->body = "this is the body";
//    $post->save();

    //  READING
//    $post = Post::find(1);
//    Post::where('role', 'status')->first();
//    Post::firstWhere('role', 'status');
//    Post::findOr(1, function (){
//
//    });
//    Post::all();
//    User::select('email')->orderBy('id', 'desc')->get();


    // UPDATING
//    $user = User::find(1);
//    $user->name = "saba";
//    $user->save();
    // OR
//    $user = User::find(1);
//    $user->name = "saba";
//    $user->where('id', 1)->update([
//        'name' => "saba",
//        'email' => "saba27ge@gmail.com",
//    ]);


//    $user = User::find(1)->delete();
//    $user = User::create([
//        'id' => 1,
//        'name' => "saba",
//        'email' => "saba27ge@gmail.com",
//        'password' => 'secret',
//    ]);


    return 'post created';

});
