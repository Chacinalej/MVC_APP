<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
    <link rel="stylesheet" href="/MVC_APP/public/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Editar Empleado</h1>
        <form action="/MVC_APP/public/Empleado/actualizar" method="POST">
            <input type="hidden" name="idEmpleado" value="<?php echo $empleado['idEmpleado']; ?>">
            <div class="form-floating mb-3">
                <input type="text" name="nombre" class="form-control" placeholder=" " value="<?php echo $empleado['nombre']; ?>">
                <label for="nombre">Nombre:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="apellido" class="form-control" placeholder=" " value="<?php echo $empleado['apellido']; ?>">
                <label for="apellido">Apellido:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="tlfn" class="form-control" placeholder=" " value="<?php echo $empleado['tlfn']; ?>">
                <label for="tlfn">Telefono:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="idm" class="form-control" placeholder=" " value="<?php echo $empleado['idm']; ?>">
                <label for="idm">ID Manager:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="salary" class="form-control" placeholder=" " value="<?php echo $empleado['salary']; ?>">
                <label for="salary">Salario:</label>
            </div>
       
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
</body>
</html>