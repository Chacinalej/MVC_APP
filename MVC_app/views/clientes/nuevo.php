<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Cliente</title>
    <link rel="stylesheet" href="/MVC_APP/public/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Nuevo Cliente</h1>
        <form action="/MVC_APP/public/Clientes/guardar" method="POST">
            <input type="hidden" name="id" value="">
            <div class="form-floating mb-3">
                <input type="text" name="nombre" class="form-control" placeholder=" " value="">
                <label for="nombre">Nombre:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="apellido" class="form-control" placeholder=" " value="">
                <label for="apellido">Apellido:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="email" class="form-control" placeholder=" " value="">
                <label for="email">Email:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="tlfn" class="form-control" placeholder=" " value="">
                <label for="tlfn">Telefono:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="PrfC" class="form-control" placeholder=" " value="">
                <label for="prfC">Contacto de Preferencia:</label>
            </div>
       
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Guardar Datos</button>
            </div>
        </form>
    </div>
</body>
</html>