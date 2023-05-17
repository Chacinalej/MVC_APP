<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Empleados</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="../public/js/jquery-3.7.0.min.js"></script>
    <script src="../public/js/script.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Tabla Empleados</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>ID Manager</th>
                    <th>Salario</th>
                    <th>Fecha de Contratacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                    <td><?php echo $row["idEmpleado"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["apellido"]; ?></td>
                        <td><?php echo $row["tlfn"]; ?></td>
                        <td><?php echo $row["idm"]; ?></td>
                        <td><?php echo $row["salary"]; ?></td>
                        <td><?php echo $row["fecha"]; ?></td>
                        <td>
                            <button id="btnEditar"onclick="editarEmpleado(<?php echo $row['idEmpleado']; ?>)" class="btn btn-primary">Editar</button>
                            <button onclick="eliminarEmpleado(<?php echo $row['idEmpleado']; ?>)" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <div class="col-md-6">
            <a href="/MVC_APP/public/" class="btn btn-primary">Volver</a>
            <a href="/MVC_APP/public/Empleado/nuevo" class="btn btn-primary">Nuevo Empleado</a>
        </div>
    </div>
</body>
</html>