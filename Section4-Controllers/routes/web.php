<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [PostsController::class, 'index']);

//Route::get('/', [UserController::class, 'show']);

//Route::resources([
//    'categories' => CategoriesController::class,
//    'photos' => PhotosController::class,
//]);

//Route::resource('categories', CategoriesController::class)->only(['index','show']);

//Route::resource('categories', CategoriesController::class)->except(['create','store', 'update', 'destroy']);

//Route::apiResource('categories', CategoriesController::class);

//Route::resource('/categories', CategoriesController::class)->names([
//    'destroy' => 'categories.delete',
//]);

//Route::resource('/categories', CategoriesController::class)->parameters([
//    'categories' => 'category_id'
//]);


Route::get('categories/attach/post', [CategoriesController::class, 'attach_post']);





