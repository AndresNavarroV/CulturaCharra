<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventoController;
use Illuminate\Support\Facades\Auth;

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
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [EventoController::class, 'index'])->name('dashboard');
    Route::resource('eventos', EventoController::class);
});

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

