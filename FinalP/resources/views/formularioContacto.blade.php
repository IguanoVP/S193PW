    @extends('layouts.plantillaNav')

    @section('titulo')

    @section('contenido')

    <h1 class="display-1 text-prmiary text-center">Gestión de Contactos </h1>

    <form action='/registrarLibro' method="POST">
        @csrf

    <div class="container">

    <form>
        <div  class="mb-3" >
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" >
            <small class="text-danger fst-italic">{{ $errors->first('nombre') }}</small>
        </div>

        <div  class="mb-3" >
            <label for="correo" class="form-label" >Correo:</label>
            <input type="mail" class="form-control" name="Correo" value="{{old('Correo')}}" >
            <small class="text-danger fst-italic">{{ $errors->first('Correo') }}</small>
        </div>

        <div class="mb-3" >
            <label for="telefono" class="form-label" >Telefono:</label>
            <input type="text" class="form-control" name="telefono" value="{{old('telefono')}}" >
            <small class="text-danger fst-italic">{{ $errors->first('telefono') }}</small>
        </div>
  
    </form>

    <div>
        <button type="submit" class="btn btn-danger">Agregar Contacto</button>
        </div>

    @endsection


