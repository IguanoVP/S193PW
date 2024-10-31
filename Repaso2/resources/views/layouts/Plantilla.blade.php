<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources/js/app.js"])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>
<body> 
    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <div class="container-fluid">
           
            <div class="collapse navbar-collapse" id="navbarNav">
                    <a class="navbar-brand" href="/">Inicio
                        <div class="navbar-nav">
                        <a href="{{ route('rutaRegistro') }}" class="nav-link {{ request()->routeIs('rutaRegistro') ? 'text-dark' : '' }}">Registro Libro</a>
            </div>
        </div>
    </nav>

    @yield('contenido')

        <footer>
        @yield('footer')<h3>Contacto</h3>
        <p>Teléfono: 4423514456</p>
        <p>Email: 122044076@upq.edu.mx</p>
        </footer>
</body>
</html>