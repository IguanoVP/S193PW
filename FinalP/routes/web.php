<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/',[controladorVistas::class,'welcome']) ->name('rutawelcome');

Route::get('/Regis',[controladorVistas::class,'Registro']) ->name('rutaRegistro');

route::post('/registrarLibro',[controladorVistas::class,'procesarLibro']) ->name('RutaEnvioRe');