<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;

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
Route::get('/form',[ControladorVista::class,'formulario']) ->name('rutaform');
Route::get('/consultar',[ControladorVista::class,'consulta']) ->name('rutaclientes');