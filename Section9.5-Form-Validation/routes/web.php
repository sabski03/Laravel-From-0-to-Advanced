<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;



Route::resource('posts', PostsController::class);
