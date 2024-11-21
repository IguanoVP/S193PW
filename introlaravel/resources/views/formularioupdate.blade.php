@extends('layouts.Plantilla')

@section('titulo','Registro Clientes')

@section('contenido')

{{-- inicia Tarjeta con formulario --}}


    {{--@dump($id)--}}

    <div class="container mt-5 col-md-6">

        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                {{ __('Registro de Clientes')}}
            </div>

            <div class="card-body text-justify">

                <form action="{{ route('rutaUp') }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{__('Nombre')}}: </label>
                        <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre', $editar->nombre)}}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{__('Apellido')}}: </label>
                        <input type="text" class="form-control" name="txtapellido" value="{{old('txtapellido', $editar->apellido)}}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{__('Correo')}}: </label>
                        <input type="text" class="form-control" name="txtcorreo" value="{{old('txtcorreo', $editar->correo)}}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Teléfono')}}: </label>
                        <input type="text" class="form-control" name="txttelefono" value="{{old('txttelefono', $editar->telefono)}}">
                        <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                    </div>
            </div>
        

            <div class="card-footer text-muted">
                <div class="d-grid gap-2 mt-2 mb-1">
                    <button type="submit" class="btn btn-success btn-sm">Actualizar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    {{-- termina Tarjeta con formulario --}}

@endsection