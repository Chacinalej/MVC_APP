<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Paises</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="../public/js/jquery-3.7.0.min.js"></script>
    <script src="../public/js/script.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Tabla Paises</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ISO</th>
                    <th>ISO3</th>
                    <th>ISONumerico</th>
                    <th>Nombre</th>
                    <th>Capital</th>
                    <th>Código</th>
                    <th>Moneda</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                    <td><?php echo $row["idPais"]; ?></td>
                        <td><?php echo $row["iso"]; ?></td>
                        <td><?php echo $row["iso3"]; ?></td>
                        <td><?php echo $row["isonumeric"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["capital"]; ?></td>
                        <td><?php echo $row["code"]; ?></td>
                        <td><?php echo $row["currency"]; ?></td>
                        <td>
                            <button id="btnEditar"onclick="editarPais(<?php echo $row['idPais']; ?>)" class="btn btn-primary">Editar</button>
                            <button onclick="eliminarPais(<?php echo $row['idPais']; ?>)" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <div class="col-md-6">
            <a href="/MVC_APP/public/" class="btn btn-primary">Volver</a>
            <a href="/MVC_APP/public/Paises/nuevo" class="btn btn-primary">Nuevo Pais</a>
        </div>
    </div>
</body>
</html>
