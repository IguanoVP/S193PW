<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de Unidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Convertidor de MB, GB, TB</h1>
        <form action="convertidorController.php" method="POST">
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" step="0.01" class="form-control" id="cantidad" name="cantidad" required>
            </div>
            <div class="mb-3">
                <label for="conversion" class="form-label">Conversión</label>
                <select class="form-select" id="conversion" name="conversion" required>
                    <option value="MBtoGB">MB a GB</option>
                    <option value="GBtoMB">GB a MB</option>
                    <option value="GBtoTB">GB a TB</option>
                    <option value="TBtoGB">TB a GB</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Convertir</button>
        </form>
        <div class="mt-4">
            <?php if (isset($_GET['resultado'])): ?>
                <div class="alert alert-success">
                    <?php echo $_GET['resultado']; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>