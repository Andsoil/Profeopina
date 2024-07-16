<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/posts', [UserController::class, 'indexWithPosts']);
Route::get('/users/process', [UserController::class, 'processUsers']);
Route::get('/users/stored-procedure', [UserController::class, 'getUsers']);
Route::get('/users/cached', [UserController::class, 'cachedUsers']);
