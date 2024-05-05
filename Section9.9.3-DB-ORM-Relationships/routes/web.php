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

//    dd(User::find(1)->posts()->whereId(10)->delete());


//    $comment = Comment::find(1);
//    $post = Post::find(12);
//    $comment->post()->associate($post);
//    $comment->save();
//    Comment::find(1)->post()->associate()->save();


//    $post = Comment::find(1)->post->title;
//    $post = Comment::find(1)->post;
//    $post->title = "new Title";
//    $post->body = "new Body";
//    $post->save();


//    $post = Post::find(12);
//    dd($post->user);
//    dd($post->comments);

//    $post->title = "updated from the push show post";
//    $post->comments[0]->message = "updated from the push show comment";
//    $post->user->name = "saba";
//    $post->push();


    return response(200);

});
