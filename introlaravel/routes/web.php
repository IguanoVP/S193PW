<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;
use App\Http\Controllers\clienteController;

/* Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio');

Route::get('/form', function () {
    return view('formulario');
})->name('rutaform');
Route::get('/consultar', function () {
    return view('clientes');
})->name('rutaClientes'); */

//Route::view('/','inicio')->name('rutaInicio');
//Route::view('/form','formulario')->name('rutaform');
//Route::view('/consultar','clientes')->name('rutaClientes');

Route::view('/component','componentes')->name('rutacomponent');

//rutas para controlador

Route::get('/',[ControladorVista::class,'home']) ->name('rutainicio');
/* Route::get('/form',[ControladorVista::class,'formulario']) ->name('rutaform'); */

/* Route::post('/enviarCliente',[ControladorVista::class,'procesarCliente']) ->name('rutaEnviar'); */

Route::get('/cliente/create',[clienteController::class, 'create'])->name('rutaForm');

Route::post('/cliente',[clienteController::class, 'store'])->name('rutaEnviar');

Route::get('/cliente',[clienteController::class,'index']) ->name('rutaclientes');

Route::get('/cliente/{id}/editar',[clienteController::class, 'edit']) ->name('rutaFormUp');