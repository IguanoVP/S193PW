<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorCliente;
use Illuminate\Http\Request;

class ControladorVista extends Controller
{

    //Controlador para administrar la logica de las vistas 

        public function home()
    {
        return view('inicio');
    }
        public function formulario()
    {
        return view('formulario');
    }
        public function consulta()
    {
        return view('clientes');
    }
    public function procesarCliente(validadorCliente $peticionV)
    {


        //redireccion con un mensaje  flash en session
        $usuario= $peticionV->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaform');
    }

}