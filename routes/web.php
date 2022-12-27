<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

# posts 
Route::resource('/posts', PostController::class);


# categories
Route::resource('/categories', CategoryController::class);


# users
Route::resource('/users', UserController::class);

