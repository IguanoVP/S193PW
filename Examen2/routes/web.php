<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorPrenda;

route::get('/',[controladorPrenda::class,'Registro']) ->name('rutaRegistro');
route::post('/registroPrenda',[controladorPrenda::class,'procesarPrenda']) ->name('rutaEnvioRe');