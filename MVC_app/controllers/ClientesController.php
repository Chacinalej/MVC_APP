<?php
include_once '../models/Clientes.php';
class Controller {
    
    protected $data = array();
    
    public function __construct() {
        // Aquí puedes agregar cualquier código que quieras que se ejecute en todos los controladores
    }
    
    protected function loadView($view) {
        // Carga la vista correspondiente
        require_once "vista/$view.php";
    }
    
    protected function redirect($url) {
        // Redirige a la URL especificada
        header("Location: $url");
        exit();
    }
    
}
class ClientesController extends Controller{
    private $model;

    public function __construct() {
        $this->model = new Clientes();
    }

    public function index() {
        $result = $this->model->getAll();
        include '../views/clientes/index.php';
    }

	public function nuevo(){
        include_once '../views/clientes/nuevo.php';
    }

            
    public function guarda(){
        
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $tlfn = $_POST['tlfn'];
        $PrfC = $_POST['PrfC'];
        
        $clientes = new Clientes();
        $clientes->insertar($id, $nombre, $apellido, $email, $tlfn, $PrfC);
        $this->index();
    }

    public function modificar($id){
        
        $clientes = new Clientes();
   
        $cliente = $clientes->get_user($id);
        include_once '../views/clientes/editar.php';
    }
    
    public function actualizar(){

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $tlfn = $_POST['tlfn'];
        $PrfC = $_POST['PrfC'];
        

        $clientes = new Clientes();
        $clientes->modificar($id, $nombre, $apellido, $email, $tlfn, $PrfC);
        $data["titulo"] = "Clientes";
        $this->index();
    }
    
    public function eliminar($id){
        
        $clientes = new Clientes();
        $clientes->eliminar($id);
        $data["titulo"] = "Clientes";
        $this->index();
    }	

}
?>
