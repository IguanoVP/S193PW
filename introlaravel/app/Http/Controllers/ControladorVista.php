<?php

namespace App\Http\Controllers;

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
    public function procesarCliente(Request $peticion)
    {
        $validacion = $peticion->validate([
            'txtnombre'=> 'required |min:4 | max:20',
            'txtapellido'=> 'required',
            'txtcorreo'=> 'required',
            'txttelefono'=> 'required |numeric'
        ]);


        //redireccion con un mensaje  flash en session
        $usuario= $peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaform');
    }

}