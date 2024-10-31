<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/Registro','Registro Libro')->name('rutaRegistro');