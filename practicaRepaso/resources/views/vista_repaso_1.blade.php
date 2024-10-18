<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de Unidades</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Convertidor de MB, GB, TB</h1>
        <form action="{{ route('convertir') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" step="0.01" class="form-control" id="cantidad" name="cantidad" required>
            </div>
            <div class="mb-3">
                <label for="conversion" class="form-label">Conversión</label>
                <select class="form-select" id="conversion" name="conversion" required>
                    <option value="MBaGB">MB a GB</option>
                    <option value="GBaMB">GB a MB</option>
                    <option value="GBaTB">GB a TB</option>
                    <option value="TBaGB">TB a GB</option>
                </select>
            <button type="submit" class="btn btn-primary">Convertir</button>
        </form>
        <div class="mt-4 alert alert-info">
            {{$resultado}}
        </div>
    </div>
    </div>
</body>
</html>