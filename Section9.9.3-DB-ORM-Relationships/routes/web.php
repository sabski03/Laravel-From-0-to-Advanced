<?php

use App\Models\Comment;
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

//    \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
//
//    User::truncate();
//    Post::truncate();
//    Comment::truncate();

//    dd(Comment::find(1)->user->name);


//    $user = [
//        'name' => "saba",
//        'email' => "saba27ge@gmail.com",
//        'password' => 'secret',
//    ];
//
//    $newUser = new User($user);
//
//    $comment = Comment::find(1)->user()->save($newUser);


//    dd(User::find(1)->posts);
//    dd(Post::find(1)->user);



//    $post = new Post([
//        'title' => 'NEW',
//        'body' => 'BODY',
//    ]);
//    User::find(1)->posts()->save($post);



    dd(User::find(1)->posts()->whereId(10)->delete());

    return response(200);

});
