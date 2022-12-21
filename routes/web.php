<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/greet/{one}/{two}', [TestController::class, 'greet']);

// Route::get('/greeting', [TestController::class, 'greeting']);
// Route::get('/about', [TestController::class, 'about']);
// Route::get('/posts', [PostController::class, 'post']);
// Route::get('/posts/create', [PostController::class, 'create']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
// Route::post('/posts/{id}', [PostController::class, 'update']);
// Route::post('/posts/{id}/delete', [PostController::class, 'destory']);
//Route::get('/posts/create/{title}', [PostController::class, 'create']);
// ('/route', [array])
// [Controller, Method]

Route::resource('/posts', PostController::class);

Route::resource('/categories', CategoryController::class);

Route::resource('/users', UserController::class);
