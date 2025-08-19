<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\SonidoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\AsignarController;
use App\Http\Controllers\IAController;
use Illuminate\Support\Facades\Auth;


//IA

Route::get('/ia/armonica', [IAController::class, 'index'])->name('IA.ARMonica.index');

// Esta es la ruta que ejecutará el script Python
Route::post('/ia/armonica', [IAController::class, 'generarPlaylist'])->name('IA.ARMonica.generar');


//Sonido

Route::resource('articulos','App\Http\Controllers\SonidoController');

// Mariachi 

Route::get('/', function () {
    return view('welcome'); // Aquí coloca la vista que quieres mostrar primero
})->name('inicio');

// Rutas de autenticación
/*Route::get('/login', function () {
    return view('login');
})->name('login');*/ 

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Rutas protegidas por autenticación
//redirige del dashboard al index de mariachis
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [EventoController::class, 'index'])->name('dashboard');
    Route::resource('eventos', EventoController::class);
});

//redirige del dashboard al index del sonido
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [SonidoController::class, 'index'])->name('dashboard');
    Route::resource('sonido', SonidoController::class);
});

//redirige del dashboard al index del usuario
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::resource('sistema', UserController::class);
    //vistas de adminlte
    Route::resource('/roles', RoleController::class)->names('roles');
    Route::resource('/permisos', PermisoController::class)->names('permisos');
    Route::resource('/usuarios', AsignarController::class)->names('asignar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('views.dashboard');

//vistas de home
Route::get('/cultura', function () {
    return view('vistas_home.cultura');
})->name('cultura');

Route::get('/servicios', function () {
    return view('vistas_home.servicios');
})->name('servicios');

Route::get('/galeria', function () {
    return view('vistas_home.galeria');
})->name('galeria');

Route::get('/socios', function () {
    return view('vistas_home.socios');
})->name('socios');

Route::get('/precios', function () {
    return view('vistas_home.precios');
})->name('precios');

Route::get('/contacto', function () {
    return view('vistas_home.contacto');
})->name('contacto');

//get, post, put, patch, delete

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

