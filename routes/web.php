<?php

use App\Http\Controllers\MensajesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Quiensoy', [App\Http\Controllers\QuiensoyController::class, 'index'])->name('Quiensoy');

Route::get('/habilidades', [App\Http\Controllers\HabilidadesController::class, 'index'])->name('habilidades');

Route::get('/certificaciones', [App\Http\Controllers\CertificacionesController::class, 'index'])->name('certificaciones');

Route::get('/portafolio', [App\Http\Controllers\PortafolioController::class, 'index'])->name('portafolio');


Route::get('/mensajes', [MensajesController::class, 'index']);