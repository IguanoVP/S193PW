<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('rutaWelcome');
Route::view('/vista-repaso-1', 'vista_repaso_1')->name('rutaVistaRepaso1');


