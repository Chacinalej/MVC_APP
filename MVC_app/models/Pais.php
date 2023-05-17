<?php
include_once '../config/db.php';
class Paises {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conn;
    }

    public function getAll_Pais() {
        $sql = "SELECT * FROM paises";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function insertarPais($idPais, $iso, $iso3, $isonumeric, $nombre, $capital, $code, $currency){
			
        $result = $this->conn->query("INSERT INTO paises (idPais, iso, iso3, isonumeric, nombre, capital, code, currency) VALUES ('$idPais', '$iso', '$iso3', '$isonumeric', '$nombre', '$capital', '$code', '$currency'");
        
    }

    public function modificarPais($idPais, $iso, $iso3, $isonumeric, $nombre, $capital, $code, $currency){
        $result = $this->conn->query("UPDATE paises SET iso='$iso', iso3='$iso3', isonumeric='$isonumeric', nombre='$nombre', capital='$capital', code='$code', currency='$currency' WHERE idPais = '$idPais'");
    }
    
    public function eliminarPais($idPais){
        
        $result = $this->conn->query("DELETE FROM paises WHERE idPais = '$idPais'");
        
    }

    public function get_user_Pais($idPais)
    {
        $sql = "SELECT * FROM paises WHERE idPais = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $idPais);
        $stmt->execute();
        $result = $stmt->get_result();
        $pais = $result->fetch_assoc();
        return $pais;

    }
} 

?>
