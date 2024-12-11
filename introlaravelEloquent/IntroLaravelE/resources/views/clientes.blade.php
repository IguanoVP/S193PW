@extends('layouts.plantilla')
@section('titulo', 'Clientes')
@section('contenido')

    @if (session('exito'))


    <x-Alert tipo="success"> {{session('exito')}} </x-Alert>
@endif

@session('exito')
<x-Alert tipo="warning"> {{ $value }} </x-Alert>

@endsession
@session('exito')

<script>
    Swal.fire({
title: "Respuesta servidor",
text: "{{$value}}",
icon: "success"
});
</script>

@endsession


    <div class="container mt-5 col-md-8">
        @foreach ($consulta as $cliente)
            <div class="card text-justify font-monospace">
                <div class="card-header fs-5 text-primary">
                    {{ $cliente->nombre }} - {{ $cliente->apellido }}
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                    <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
                </div>
                <div class="card-footer text-muted">
              
                    <form action="{{ route('cliente.update', $cliente->id) }}" method="GET" style="display: inline;">
                        <button type="submit" class="btn btn-warning btn-sm">
                            {{ __('Actualizar') }}
                        </button>
                    </form>

                    <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" class="d-inline" onsubmit="confirmarEliminacion()">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar') }}</button>
                    </form>

                        </div>
                    </div>
                @endforeach
            </div>
            <script>
                function confirmarEliminacion() {
                    return confirm('¿Está seguro de que desea ELIMINAR los datos del cliente?');
                }
            </script>

                </div>
            </div>

    </div>



@endsection