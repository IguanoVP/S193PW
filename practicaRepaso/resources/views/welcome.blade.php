<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .div-P {
            background-color: #f8f9fa;
            padding: 20px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }
        .div-P h3 {
            color: #343a40;
        }
        .div-P img {
            width: 150px;
            margin-bottom: 20px; 
        }
    </style>
</head>
<body>

    <h1 style="text-align: center">Vista Principal</h1>

    <div class="div-P">
        <img src="IMG\Logo_UPQ.png" class="img-fluid" alt="Logo UPQ">
        
        <h3>Erick Ivan Verduzco Perdomo</h3>
        <h3>Programacion Web</h3>
        <h3>122044076</h3>
        <h3>S193</h3>

        <button type="button" class="btn btn-dark" onclick="window.location.href='{{ route('rutaVistaRepaso1') }}'">Repaso 1</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
