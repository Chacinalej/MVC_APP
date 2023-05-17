<?php
include_once '../models/Pais.php';



class PaisesController extends Controller {
    private $model;

    public function __construct() {
        $this->model = new Paises();
    }

    public function index() {
        $result = $this->model->getAll_Pais();
        include '../views/paises/index.php';
    }

    
   public function nuevoPais(){
        
    $data["titulo"] = "Paises";
    require_once "../views/paises/nuevo.php";
}

   
public function guardaPais(){
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $iso = $_POST['iso'];
    $iso3 = $_POST['iso3'];
    $isonumeric = $_POST['isonumeric'];
    $capital = $_POST['capital'];
    $code = $_POST['code'];
    $currency = $_POST['currency'];

    
    $paises = new Paises();
    $paises->insertarPais($id, $nombre, $iso, $iso3, $isonumeric, $capital, $code, $currency);
    $data["titulo"] = "Empleados";
    $this->index();
}

public function modificarPais($idPais){
    $paises = new Paises();
    $pais = $paises->get_user_Pais($idPais);
    include_once '../views/paises/editar.php';
 
}

public function actualizarPais(){

    $idPais = $_POST['idPais'];
    $nombre = $_POST['nombre'];
    $iso = $_POST['iso'];
    $iso3 = $_POST['iso3'];
    $isonumeric = $_POST['isonumeric'];
    $capital = $_POST['capital'];
    $code = $_POST['code'];
    $currency = $_POST['currency'];

    $paises = new Paises();
    $paises->modificarPais($idPais, $iso, $iso3, $isonumeric, $nombre,  $capital, $code, $currency);
    $this->index();
}

public function eliminarPais($idPais){
    
    $paises = new Paises();
    $paises->eliminarPais($idPais);
    $data["titulo"] = "Paises";
    $this->index();

    
}	
}


?>
