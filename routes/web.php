<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ReseniaController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\StudentController;

// Rutas generales
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/iniciarsesion', function () {
    return view('iniciarsesion');
})->name('iniciarsesion');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos');

Route::get('/perfil', function () {
    return view('perfil_profe');
})->name('perfil');

Route::get('/iniciologueado', function () {
    return view('iniciologueado');
})->name('iniciologueado');

Route::get('/tuperfil', function () {
    return view('tuperfil');
})->name('tuperfil');

Route::get('/busqueda', function () {
    return view('busqueda');
})->name('busqueda');

Route::get('/turesenia', function () {
    return view('turesenia');
})->name('turesenia');

Route::get('/profeguardado', function () {
    return view('profguardados');
})->name('profeguardado');

Route::get('/configuracion', function () {
    return view('configcuenta');
})->name('configuracion');

//Route::get('/iniciologueado', [StudentController::class, 'iniciologueado'])->name('iniciologueado');

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/login_student', [StudentController::class, 'showLoginForm'])->name('login.student');
Route::post('/login_student', [StudentController::class, 'login'])->name('login.student.post');

Route::get('/register_student', [StudentController::class, 'create'])->name('register.student');
Route::post('/register_student', [StudentController::class, 'store']);


/*Route::get('/login_student' ,function () {
    return view('auth.login_student', [StudentController::class, 'showLoginForm']);
})->name('login.student');
Route::get('/register_student', function () {
    return view('auth.register_student', [StudentController::class, 'create']);
})->name('register.student');

Route::post('/register_student', [StudentController::class, 'store']);

//Route::get('/login_student', [StudentController::class, 'showLoginForm'])->name('login.student');
Route::post('/login_student', [StudentController::class, 'login']);*/

// Rutas específicas con controladores
Route::get('/profesor/{id}/reseñas', [ProfesorController::class, 'verResenias'])->name('profesor.resenias');
Route::get('/buscar_profesor', [ProfesorController::class, 'buscar'])->name('buscar.profesor');
Route::get('/perfil_profesor/{id}', [ProfesorController::class, 'perfil'])->name('perfil.profesor');
Route::get('/listaresenia', [ReseniaController::class, 'index'])->name('listaresenia');

Route::get('/ventas', [SalesController::class, 'index'])->name('ventas');

// Ruta para probar el envío de correos
Route::get('/send-test-email', function () {
    $details = [
        'title' => 'Mail from Ferreteria',
        'body' => 'This is a test email.'
    ];

    Mail::to('your_test_email@example.com')->send(new TestMail($details));
    return 'Email sent successfully!';
});

// Rutas para el cambio de idioma
Route::get('locale/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
})->name('locale.change');

Route::get('/{lang}', function ($lang) {
    App::setLocale($lang);
    session(['locale' => $lang]);
    return redirect()->back();
});

// Middleware para autenticación
/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/



Route::middleware('auth:student')->group(function () {
    Route::get('/iniciologueado', function () {
        return view('iniciologueado');
    })->name('iniciologueado');
});
