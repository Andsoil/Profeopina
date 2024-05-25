<?php

use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('inicio');
});

// Rutas de Autenticación...
Auth::routes(['verify' => true]);

// Rutas protegidas que requieren autenticación
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/send-test-email', function () {
    Mail::to('gulcochia97cancer@gmail.com')->send(new TestEmail());
    return 'Email sent!';
});
Route::get('/iniciarsesion', function () {
    return view('iniciarsesion');
})->name('iniciarsesion');
Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');
Route::get('/registro', function () {
    return view('registro');
})->name('registro');

