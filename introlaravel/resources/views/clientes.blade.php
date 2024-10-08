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
                    <a href="/form" class="nav-link" aria-current="page" >Registro Clientes</a>
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

    <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
            Erick Ivan Verduzco Perdomo

        </div>

        <div class="card-body">
            <h5 class="fw-bold"> erickivanverduzco@gmail.com</h5>
            <h5 class="fw-medium">4423514456</h5>
            <p class="card-text fw-lighter"> </p>


        </div>

        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-warning btn-sm"> Actualizar</button>
            <button type="submit" class="btn btn-danger btn-sm"> Eliminar  </button>
        </div>
    </div>
    {{-- Finaliza tarjetaCliente --}}

    
    </div> {{--divContainer--}}
</body>
</html>