<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorForm;

class controladorVistas extends Controller
{
    public function welcome()
    {
        return view('Inicio');
    }
    public function Registro()
    {
        return view('formularioContacto');
    }
    public function procesarLibro(validadorForm $peticionV)
    {
        $Libro= $peticionV->input('nombre');
        session()->flash('chido','todo correcto: Libro '.$Libro.' guardado');
        return to_route('rutaRegistro');
    }
}