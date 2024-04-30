<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('teacher', [TeacherController::class, 'index']);
Route::get('teacher/{id}', [TeacherController::class, 'show']);
Route::post('teacher', [TeacherController::class, 'store']);
Route::patch('teacher/{id}', [TeacherController::class, 'update']);
Route::delete('teacher/{id}', [TeacherController::class, 'destroy']);

Route::get('user', [UserController::class, 'index']);

Route::get('review', [ReviewController::class, 'index']);

Route::get('profile', [ProfileController::class, 'index']);

Route::get('subscription', [SubscriptionController::class, 'index']);

Route::get('subscription', [SubscriptionController::class, 'index']);

Route::get('reply', [ReplyController::class, 'index']);

Route::get('college', [CollegeController::class, 'index']);

Route::get('comment', [CommentController::class, 'index']);
Route::post('comment', [CommentController::class, 'store']);
