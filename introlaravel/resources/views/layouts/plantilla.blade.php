<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>@yield('titulo')</title>
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
                    <a class="nav-link {{request()->routeIs('rutaForm')?'text-warning':'' }}" aria-current="page" href="{{route('rutaForm')}}" >Registro Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('rutaclientes')?'text-warning':'' }}" aria-current="page" href="{{route('rutaclientes')}}" >Consulta Clientes</a>
                </li>

                </ul>
            </div>
        </div>
    </nav>
    {{-- Finaliza navbar --}}

    @yield('contenido')
    
</body>
</html>