<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorPrenda;

class controladorPrenda extends Controller
{
    public function welcome()
    {
        return view('Inicio');
    }

    public function procesarPrenda(validadorPrenda $peticionV)
    {
        $Prenda= $peticionV->input('txtprenda');
        session()->flash('chido','todo correcto: Prenda '.$Prenda.' guardada');
        return to_route('rutaWelcome');
    }
}
