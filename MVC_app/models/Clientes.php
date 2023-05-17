<?php
include_once '../config/db.php';

class Clientes {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conn;
    }

    public function getAll() {
        $sql = "SELECT * FROM clientes";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function insertar($id, $nombre, $apellido, $email, $tlfn, $PrfC){
			
        $result = $this->conn->query("INSERT INTO clientes (id, nombre, apellido, email, tlfn, PrfC) VALUES ('$id', '$nombre', '$apellido', '$email', '$tlfn', '$PrfC')");
        
    }

    public function modificar($id, $nombre, $apellido, $email, $tlfn, $PrfC){
        $result = $this->conn->query("UPDATE clientes SET nombre='$nombre', apellido='$apellido', email='$email', tlfn='$tlfn', PrfC='$PrfC' WHERE id = '$id'");
    }
    
    public function eliminar($id){
        
        $result = $this->conn->query("DELETE FROM clientes WHERE id = '$id'");
        
    }

    public function get_user($id)
    {
        $sql = "SELECT * FROM clientes WHERE id='$id' LIMIT 1";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();

        return $row;
    }
} 

?>
