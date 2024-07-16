<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

<<<<<<< HEAD
use Illuminate\Support\Facades\App;



Route::get('/', function () {
=======
Route::get('/{local}/inicio', function ($locale) {
>>>>>>> 51a93ded8d859d7148b94463e7db0dcbcaa40c8f
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
Route::get('/perfil', function () {
    return view('perfil_profe');
})->name('perfil');
Route::get('/listaresenia', function () {
    return view('listaresenia');
})->name('listaresenia');
Route::get('/iniciol', function () {
    return view('iniciologueado');
})->name('iniciologueado');
Route::get('/tuperfil', function () {
    return view('tuperfil');
})->name('tuperfil');
Route::get('/turesenia', function () {
    return view('turesenia');
})->name('turesenia');
Route::get('/profeguardado', function () {
    return view('profguardados');
})->name('profeguardado');
Route::get('/configuracion', function () {
    return view('configcuenta');
})->name('configuracion');



// Ruta para probar el envío de correos
Route::get('/send-test-email', function () {
    $details = [
        'title' => 'Mail from Ferreteria',
        'body' => 'This is a test email.'
    ];

    Mail::to('your_test_email@example.com')->send(new TestMail($details));
    return 'Email sent successfully!';
});


/*Route::get('locale/{locale}', function ($locale) {
    //session(['locale' => $locale]);
    return redirect()->back()->withCookie('locale', $locale);
})->name('locale.change');
/*Route::middleware(LocalCookieMiddleware::class)->group(function {
    require __DIR__ . '/auth.php';
});*/
//require __DIR__ . '/auth.php';*/
//si la URL es locale/en, el valor de $locale será en.
Route::get('locale/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
})->name('locale.change');

Route::get('/{lang}', function ($lang) {
    App::setLocale($lang);
    session(['locale' => $lang]);
    return redirect()->back();
});