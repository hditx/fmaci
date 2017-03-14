<?php
require_once 'config/DataBase.php';
Class Cliente{
    private $idCliente;
    private $nombre;
    private $apellido;
    private $dni;
    private $direccion;
    private $telefono;

    function __construct($idCliente, $nombre = "", $apellido = "", $dni = "", $direccion = "", $telefono = "") {
        $this->setIdCliente($idCliente);
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setDni($dni);
        $this->setDireccion($direccion);
        $this->setTelefono($telefono);
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getDni() {
        return $this->dni;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
            
    public function save(){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT dni FROM Cliente WHERE dni = ".$this->getDni();
            $resultado = mysql_query($sql);
            if(!$resultado){
                echo "entre en el if";
                $sql = "INSERT INTO Cliente(nombreApellido, dni, direccion, telefono, obraSocial) VALUES ("
                        . "'".$this->getNombreApellido()."', "
                        . "'".$this->getDni()."', "
                        . "'".$this->getDireccion()."', "
                        . "'".$this->getTelefono()."', "
                        . "'".$this->getObraSocial()."' "
                        . ")";
                $temp = $mdb->prepare($sql);
                $temp->execute();
                $mdb = null;
                echo " termine el if";
            }
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public static function saveCliente($nombre, $apellido, $dni, $telefono){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM Cliente WHERE dni =".$dni;
            $tempQ = mysql_query($sql);
            if(!$tempQ || mysql_num_rows($tempQ) == 0){
                $sql = "INSERT INTO Cliente(nombre, apellido, dni, telefono) VALUES ('".$nombre."', '".$apellido."', ".$dni.", ".$telefono.")";
            }
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public static function getDniObjeto($dni){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT idCliente FROM Cliente WHERE dni = ".$dni;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            $mdb = null;
            return $resultado[0]['idCliente'];
            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }        
    }
    
    public static function getCliente($dni){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM Cliente WHERE dni = ".$dni;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            $mdb = null;
            $data = new Cliente ($resultado[0]['idCliente'], $resultado[0]['nombre'], 
                    $resultado[0]['apellido'], $resultado[0][dni], $resultado[0]['direccion'], $resultado[0]['telefono']);
            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
}
?>