<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="">

    <title>Consulta Clientes </title>


</head>

<body>
    {{--inicia navbar--}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand" > Turista sin Maps</a>
            <button class="navbar-toogler" type="button" data-bs-toogle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                <li class="nav-item">
                    <a  class="nav-link" aria-current="page" >{{__('Registro Clientes')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" >Consulta Clientes</a>
                </li>

                </ul>
            </div>
        </div>
    </nav>
    {{-- Finaliza navbar --}}

    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">

        @foreach ($consultaclientes as $cliente)


    <div class="card text-justify font-monospace mt-4">

        <div class="card-header fs-5 text-primary">
            {{$cliente->nombre}}

        </div>

        <div class="card-body">
            <h5 class="fw-bold"> {{$cliente->correo}}</h5>
            <h5 class="fw-medium">{{$cliente->telefono}}</h5>
            <p class="card-text fw-lighter"> </p>


        </div>

        <div class="card-footer text-muted">
            <form action="{{route('rutaFormUp', $cliente->id)}}">
            <button type="submit" class="btn btn-warning btn-sm">{{__('Update')}}</button>
            </form>

            <form id="form-eliminar-{{ $cliente->id }}" method="POST" action="{{ route('rutaDele', $cliente->id)}}">
                @method('DELETE')
                @csrf
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmarEliminacionModal{{ $cliente->id }}">
                        {{__('Delete')}}
                    </button>
                </form>
                <div class="modal fade" id="confirmarEliminacionModal{{ $cliente->id }}" tabindex="-1" aria-labelledby="confirmarEliminacionModalLabel{{ $cliente->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="confirmarEliminacionModalLabel{{ $cliente->id }}">Confirmación</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estás seguro de que quieres eliminarlo? No podrás cambiarlo
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-danger" onclick="document.getElementById('form-eliminar-{{ $cliente->id }}').submit();">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
    
    @endforeach
    {{-- Finaliza tarjetaCliente --}}

    
    </div> {{--divContainer--}}
</body>
</html>