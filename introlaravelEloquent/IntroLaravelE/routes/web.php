<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\ClienteController;

Route::get('/',[ClienteController::class,'home']) ->name('rutaInicio');
Route::resource('cliente',ClienteController::class);
Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');