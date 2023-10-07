<?php

use App\Http\Controllers\MensajesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Ruta para el home admin

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ruta para quien soy en el admin

Route::get('/Quiensoy', [App\Http\Controllers\QuiensoyController::class, 'index'])->name('Quiensoy');
Route::get('/Quiensoy/create', [App\Http\Controllers\QuiensoyController::class, 'create'])->name('admin.quiensoy.create');
Route::post('/Quiensoy/store', [App\Http\Controllers\QuiensoyController::class, 'store'])->name('admin.quiensoy.store');



// Portafolio y todas sus rutas

Route::get('/portafolio_admin', function () {
    return view('admin.portafolio.admin');
});

Route::get('/portafolio', [App\Http\Controllers\PortafolioController::class, 'index'])->name('portafolio');

Route::get('/categoria', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categoria');

Route::get('/habilidad', [App\Http\Controllers\HabilidadController::class, 'index'])->name('habilidad');

Route::get('/certificacion', [App\Http\Controllers\CertificacionController::class, 'index'])->name('certificacion');

// Ruta mensajes

Route::get('/mensajes', [MensajesController::class, 'index']);