<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [PostsController::class, 'index']);

//Route::get('/', [UserController::class, 'show']);

Route::resource('categories', CategoriesController::class);

