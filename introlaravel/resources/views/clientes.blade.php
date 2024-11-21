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
            <button type="submit" class="btn btn-danger btn-sm"> Eliminar  </button>
        </div>
    </div>
    
    @endforeach
    {{-- Finaliza tarjetaCliente --}}

    
    </div> {{--divContainer--}}
</body>
</html>