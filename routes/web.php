<?php

use Illuminate\Support\Facades\Route;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
