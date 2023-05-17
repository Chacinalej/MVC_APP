<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar País</title>
    <link rel="stylesheet" href="/MVC_APP/public/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Insertar País</h1>
        <form action="/MVC_APP/public/Paises/guardar" method="POST">
            <input type="hidden" name="idPais" value="">
            <div class="form-floating mb-3">
                <input type="text" name="iso" class="form-control" placeholder=" " value="">
                <label for="iso">ISO:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="iso3" class="form-control" placeholder=" " value="">
                <label for="iso3">ISO3:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="isonumeric" class="form-control" placeholder=" " value="">
                <label for="isonumeric">ISO Numeric:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="nombre" class="form-control" placeholder=" " value="">
                <label for="nombre">Nombre:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="capital" class="form-control" placeholder=" " value="">
                <label for="capital">Capital:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="code" class="form-control" placeholder=" " value="">
                <label for="code">Código:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="currency" class="form-control" placeholder=" " value="">
                <label for="currency">Moneda:</label>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Guardar Datos</button>
            </div>
        </form>
    </div>
</body>
</html>