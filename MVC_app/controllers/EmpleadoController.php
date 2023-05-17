<?php
include_once '../models/Empleado.php';
class EmpleadoController extends Controller{
    private $model;

    public function __construct() {
        $this->model = new Empleado();
    }

    public function index() {
        $result = $this->model->getAll_Empleado();
        include '../views/empleados/index.php';
    }

/////EMPLEADOS
    public function nuevoEmpleado(){
        
        include_once '../views/empleados/nuevo.php';
    }

            
    public function guardaEmpleado(){
        
        $idEmpleado = $_POST['idEmpleado'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tlfn = $_POST['tlfn'];
        $idm = $_POST['idm'];
        $salary = $_POST['salary'];
        
        $empleados = new Empleado();
        $empleados->insertarEmpleado($idEmpleado, $nombre, $apellido, $tlfn, $idm, $salary);
        $data["titulo"] = "Empleados";
        $this->index();
    }

    public function modificarEmpleado($id){
        
        $empleados = new Empleado();
   
        $empleado = $empleados->get_user_Empleado($id);
        $data["titulo"] = "Empleados";
        include_once '../views/empleados/editar.php';
    }
    
    public function actualizarEmpleado(){

        $idEmpleado = $_POST['idEmpleado'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tlfn = $_POST['tlfn'];
        $idm = $_POST['idm'];
        $salary = $_POST['salary'];

        $empleados = new Empleado();
        $empleados->modificarEmpleado($idEmpleado, $nombre, $apellido, $tlfn, $idm, $salary);
        $this->index();
    }
    
    public function eliminarEmpleado($id){
        
        $empleados = new Empleado();
        $empleados->eliminarEmpleado($id);
        $data["titulo"] = "Empleados";
        $this->index();
    }	
}
?>
