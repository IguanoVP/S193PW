<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorLibro;

Route::get('/',[ControladorLibro::class,'welcome']) ->name('rutawelcome');
Route::get('/Regis',[ControladorLibro::class,'Registro']) ->name('rutaRegistro');
route::post('/registrarLibro',[ControladorLibro::class,'procesarLibro']) ->name('RutaEnvioRe');