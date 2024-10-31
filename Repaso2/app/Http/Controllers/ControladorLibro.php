<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorLibro;

class ControladorLibro extends Controller
{
    public function welcome()
    {
        return view('Inicio');
    }
    public function Registro()
    {
        return view('Registro Libro');
    }
    public function procesarLibro(validadorLibro $peticionV)
    {
        $Libro= $peticionV->input('txttitulo');
        session()->flash('chido','todo correcto: Libro '.$Libro.' guardado');
        return to_route('rutaRegistro');
    }
}
