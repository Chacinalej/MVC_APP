<?php
include_once '../config/db.php';

class Empleado {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conn;
    }

    public function getAll_Empleado() {
        $sql = "SELECT * FROM empleados";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function insertarEmpleado($idEmpleado, $nombre, $apellido, $tlfn, $idm, $salary){
			
        $result = $this->conn->query("INSERT INTO empleados (idEmpleado, nombre, apellido, idm, tlfn, salary) VALUES ('', '$nombre', '$apellido', '$idm', '$tlfn', '$salary')");
        
    }

    public function modificarEmpleado($idEmpleado, $nombre, $apellido, $tlfn, $idm, $salary){
        $result = $this->conn->query("UPDATE empleados SET nombre='$nombre', apellido='$apellido', idm='$idm', tlfn='$tlfn', salary='$salary' WHERE idEmpleado = '$idEmpleado'");
    }
    
    public function eliminarEmpleado($idEmpleado){
        
        $result = $this->conn->query("DELETE FROM empleados WHERE idEmpleado = '$idEmpleado'");
        
    }

    public function get_user_Empleado($idEmpleado)
    {
        $sql = "SELECT * FROM empleados WHERE idEmpleado='$idEmpleado' LIMIT 1";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();

        return $row;
    }
} 

?>
