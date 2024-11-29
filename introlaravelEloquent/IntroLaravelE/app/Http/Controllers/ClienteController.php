<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use App\Http\Requests\ValidadorCliente;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('inicio');
    }


    public function index()
    {
        $consulta = cliente::all();
        return view('clientes', compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidadorCliente $request)
    {
        $addCliente = new cliente();
        $addCliente->nombre = $request->input('txtnombre');
        $addCliente->apellido = $request->input('txtapellido');
        $addCliente->correo = $request->input('txtcorreo');
        $addCliente->telefono = $request->input('txttelefono');
        $addCliente->save();
        $msj = $request->input('txtnombre');
        session()->flash('Exito','Se guardo el cliente: '.$msj);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = cliente::find($id);
        return view('edit',['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidadorCliente $request, string $id)
    {
        $addCliente = new cliente();
        $addCliente->nombre = $request->input('txtnombre');
        $addCliente->apellido = $request->input('txtapellido');
        $addCliente->correo = $request->input('txtcorreo');
        $addCliente->telefono = $request->input('txttelefono');
        $addCliente->save();
        $msj = $request->input('txtnombre');
        session()->flash('Exito','Se guardo el cliente: '.$msj);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
{
    $msj = $cliente->nombre;
    $cliente->delete();
    session()->flash('Exito', 'Se eliminó el cliente: ' . $msj);
    return redirect()->back();
}

}
