<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaclientes= DB::table('clientes')->get();
        return view('clientes',compact('consultaclientes'));
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
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            "Nombre" => $request->input('txtnombre'),
            "Apellido" => $request->input('txtapellido'),
            "Correo" => $request->input('txtcorreo'),
            "Telefono" => $request->input('txttelefono'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        $usuario=$request->input('txtnombre');
        session()->flash('Exito','Se guardo el usuario: ',$usuario);
        return to_route('rutaForm');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editar = DB::table('clientes')->where('id', $id)->first();
        return view('formularioupdate', compact('editar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtcorreo' => 'required|email|max:255',
            'txttelefono' => 'required|string|max:20',
        ]);
    
        DB::table('clientes')
            ->where('id', $id)
            ->update([
                'nombre' => $request->input('txtnombre'),
                'apellido' => $request->input('txtapellido'),
                'correo' => $request->input('txtcorreo'),
                'telefono' => $request->input('txttelefono'),
            ]);
    
        return to_route('rutaClientes')->with('success', 'Cliente actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
