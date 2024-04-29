<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        return view('welcome');
    }

    public function __construct(){
        $this->middleware('auth');
    }
}
