@extends('layouts.plantilla')

@section('titulo','Clientes')

@section('contenido')
  <div class="container mt-5 col-md-8">
    <div class="card text-justify font-monospace">
      <div class="card-header fs-5 text-primary">
        Ivan Tisoy Guerra <!--Se deja?-->
      </div>
      <div class="card-body">
        <h5 class="fw-bold">ivan.guerrae@hot.com</h5>
        <p class="card-text fw-lighter">4422830365</p>
      </div>
      <button type="submit" class="btn btn-warning btn-sm">{{__('Actualizar')}}</button>
      <button type="submit" class="btn btn-danger btn-sm">{{__('Eliminar')}}</button>
    </div>
  </div>
</body>
</html>
@endsection