<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorPrenda;

class controladorPrenda extends Controller
{
    public function Registro()
    {
        return view('Registro prenda');
    }

    public function procesarPrenda(validadorPrenda $peticionV)
    {
        $Prenda= $peticionV->input('txtprenda');
        session()->flash('chido','todo correcto: Prenda '.$Prenda.' guardada');
        return to_route('rutaRegistro');
    }
}
