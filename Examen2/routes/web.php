<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Regis',[controladorPrenda::class,'welcome']) ->name('rutawelcome');
route::post('/registrar',[ControladorLibro::class,'procesarPrenda']) ->name('RutaEnvioPre');