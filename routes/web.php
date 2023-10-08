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
Route::get('/Quiensoy/{quiensoy}/edit', [App\Http\Controllers\QuiensoyController::class, 'edit'])->name('quiensoy.edit');
Route::put('/Quiensoy/{quiensoy}', [App\Http\Controllers\QuiensoyController::class, 'update'])->name('admin.quiensoy.update');
Route::delete('/Quiensoy/{quiensoy}', [App\Http\Controllers\QuiensoyController::class, 'destroy'])->name('admin.quiensoy.destroy');


// Portafolio y todas sus rutas

Route::get('/portafolio_admin', function () {
    return view('admin.portafolio.admin');
});

Route::get('/portafolio', [App\Http\Controllers\PortafolioController::class, 'index'])->name('portafolio');

// Ruta para Categoria y su CRUD

Route::get('/categoria', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categoria');
Route::get('/categoria/create', [App\Http\Controllers\CategoriaController::class, 'create'])->name('admin.categoria.create');
Route::post('/categoria/store', [App\Http\Controllers\CategoriaController::class, 'store'])->name('admin.categoria.store');
Route::get('/categoria/{categoria}/edit', [App\Http\Controllers\CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put('/categoria/{categoria}', [App\Http\Controllers\CategoriaController::class, 'update'])->name('admin.categoria.update');
Route::delete('/categoria/{categoria}', [App\Http\Controllers\CategoriaController::class, 'destroy'])->name('admin.categoria.destroy');


// Ruta para Habilidad y su CRUD

Route::get('/habilidad', [App\Http\Controllers\HabilidadController::class, 'index'])->name('habilidad');
Route::get('/habilidad/create', [App\Http\Controllers\HabilidadController::class, 'create'])->name('admin.habilidad.create');
Route::post('/habilidad/store', [App\Http\Controllers\HabilidadController::class, 'store'])->name('admin.habilidad.store');
Route::get('/habilidad/{habilidad}/edit', [App\Http\Controllers\HabilidadController::class, 'edit'])->name('habilidad.edit');
Route::put('/habilidad/{habilidad}', [App\Http\Controllers\HabilidadController::class, 'update'])->name('admin.habilidad.update');
Route::delete('/habilidad/{habilidad}', [App\Http\Controllers\HabilidadController::class, 'destroy'])->name('admin.habilidad.destroy');



Route::get('/certificacion', [App\Http\Controllers\CertificacionController::class, 'index'])->name('certificacion');

// Ruta mensajes

Route::get('/mensajes', [MensajesController::class, 'index']);