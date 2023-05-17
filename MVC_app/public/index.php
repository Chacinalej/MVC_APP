<?php
// Incluye los controladores y crea las instancias
include_once '../controllers/ClientesController.php';
include_once '../controllers/EmpleadoController.php';
include_once '../controllers/PaisesController.php';

$clienteController = new ClientesController();
$empleadoController = new EmpleadoController();
$paisController = new PaisesController();


$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$baseUri = '/MVC_APP/public';

// Enrutador básico
function route($requestUri, $baseUri, $routes) {
    foreach ($routes as $route => $action) {
        if ($requestUri == $baseUri . $route) {
            $action();
            return;
        }
    }
    include_once '../views/home/index.php';
}

// Rutas de Clientes
$routeClientes = [
    '/Clientes' => function() use ($clienteController) { $clienteController->index(); },
    '/Clientes/guardar' => function() use ($clienteController, $baseUri) {
        $clienteController->guarda();
        header('Location: ' . $baseUri . '/Clientes');
    },
    '/Clientes/editar' => function() use ($clienteController) { $clienteController->modificar($_GET['id']); },
    '/Clientes/actualizar' => function() use ($clienteController, $baseUri) {
        $clienteController->actualizar();
        header('Location: ' . $baseUri . '/Clientes');
    },
    '/Clientes/nuevo' => function() use ($clienteController) { $clienteController->nuevo(); },
    '/Clientes/eliminar' => function() use ($clienteController) { $clienteController->eliminar($_POST['id']); },
];

// Rutas de Empleados
$routeEmpleados = [
    '/Empleado' => function() use ($empleadoController) { $empleadoController->index(); },
    '/Empleado/guardar' => function() use ($empleadoController, $baseUri) {
        $empleadoController->guardaEmpleado();
        header('Location: ' . $baseUri . '/Empleado');
    },
    '/Empleado/editar' => function() use ($empleadoController) { $empleadoController->modificarEmpleado($_GET['idEmpleado']); },
    '/Empleado/actualizar' => function() use ($empleadoController, $baseUri) {
        $empleadoController->actualizarEmpleado();
        header('Location: ' . $baseUri . '/Empleado');
    },
    '/Empleado/nuevo' => function() use ($empleadoController) { $empleadoController->nuevoEmpleado(); },
    '/Empleado/eliminar' => function() use ($empleadoController) { $empleadoController->eliminarEmpleado($_POST['idEmpleado']); },
];

// Rutas de Paises
$routePaises = [
    '/Paises' => function() use ($paisController) { $paisController->index(); },
    '/Paises/guardar' => function() use ($paisController, $baseUri) {
        $paisController->guardaPais();
        header('Location: ' . $baseUri . '/Paises');
    },
    '/Paises/editar' => function() use ($paisController) { $paisController->modificarPais($_GET['idPais']); },
    '/Paises/actualizar' => function() use ($paisController, $baseUri) {
        $paisController->actualizarPais();
        header('Location: ' . $baseUri . '/Paises');
    },
    '/Paises/nuevo' => function() use ($paisController) { $paisController->nuevoPais(); },
    '/Paises/eliminar' => function() use ($paisController) { $paisController->eliminarPais($_POST['idPais']); },
];

// Ejecutar enrutador
route($requestUri, $baseUri, array_merge($routeClientes, $routeEmpleados, $routePaises));

// Define las rutas y llama a los métodos correspondientes
// $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// $baseUri = '/MVC_APP/public';

// if ($requestUri == $baseUri . '/Clientes') {
//     $clienteController->index();
// } elseif ($requestUri == $baseUri . '/Clientes/guardar') {
//     $clienteController->guarda();
// }  elseif ($requestUri == $baseUri . '/Clientes/editar') {
//     $clienteController->modificar($_GET['id']);
// } elseif ($requestUri == $baseUri . '/Clientes/actualizar') {
//     $clienteController->actualizar();
// } elseif ($requestUri == $baseUri . '/Clientes/nuevo') {
//     $clienteController->nuevo();
// } elseif ($requestUri == $baseUri . '/Clientes/eliminar') {
//     $clienteController->eliminar($_POST['id']);
// } elseif ($requestUri == $baseUri . '/Empleado') {
//     $empleadoController->index();
// } elseif ($requestUri == $baseUri . '/Empleado/guardar') {
//     $empleadoController->guardaEmpleado();
// }  elseif ($requestUri == $baseUri . '/Empleado/editar') {
//     $empleadoController->modificarEmpleado($_GET['idEmpleado']);
// }  elseif ($requestUri == $baseUri . '/Empleado/actualizar') {
//     $empleadoController->actualizarEmpleado();
// } elseif ($requestUri == $baseUri . '/Empleado/nuevo') {
//     $empleadoController->nuevoEmpleado();
// } elseif ($requestUri == $baseUri . '/Empleado/eliminar') {
//     $empleadoController->eliminarEmpleado($_POST['idEmpleado']);
// } elseif ($requestUri == $baseUri . '/Paises') {
//     $paisController->index();
// } elseif ($requestUri == $baseUri . '/Paises/guardar') {
//     $paisController->guardaPais();
// }  elseif ($requestUri == $baseUri . '/Paises/editar') {
//     $paisController->modificarPais($_GET['idPais']);
// } elseif ($requestUri == $baseUri . '/Paises/actualizar') {
//     $paisController->actualizarPais();
// } elseif ($requestUri == $baseUri . '/Paises/nuevo') {
//     $paisController->nuevoPais();
// } elseif ($requestUri == $baseUri . '/Paises/eliminar') {
//     $paisController->eliminarPais($_POST['idPais']);
// } else {
//     include_once '../views/home/index.php';
// }

