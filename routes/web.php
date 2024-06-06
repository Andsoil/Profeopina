<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::get('/', function () {
    return view('inicio');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
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
Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos');

// Ruta para probar el envío de correos
Route::get('/send-test-email', function () {
    $details = [
        'title' => 'Mail from Ferreteria',
        'body' => 'This is a test email.'
    ];

    Mail::to('your_test_email@example.com')->send(new TestMail($details));
    return 'Email sent successfully!';
});
