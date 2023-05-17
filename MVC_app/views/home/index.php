<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio</title>
    <link rel="stylesheet" href="/MVC_APP/public/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            padding: 50px;
            background-color: #f8f9fa;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 30px;
        }
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="container">
    <h1 class="text-center">Bienvenido a mi MVC CRUD</h1>
    <h2 class="text-center mb-4">Selecciona una Lista:</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Clientes</h5>
                    <a href="/MVC_APP/public/Clientes" class="btn btn-primary">Ver Lista</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Empleado</h5>
                    <a href="/MVC_APP/public/Empleado" class="btn btn-primary">Ver Lista</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Paises</h5>
                    <a href="/MVC_APP/public/Paises" class="btn btn-primary">Ver Lista</a>
                </div>
            </div>
        </div>
    </div>

    <script src="/MVC_APP/public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

