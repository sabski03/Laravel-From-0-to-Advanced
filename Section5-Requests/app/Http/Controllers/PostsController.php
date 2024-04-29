<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request){
        return view('welcome');
    }

    public function update(Request $request, string $id){
        return "updating post # " . $id;
    }

    public function the_path(Request $request){
//        if($request->is('posts/path')){
//            return "true";
//        }

        if($request->routeIs('posts.path')){
            return "the route name is posts.path";
        }
    }
}
