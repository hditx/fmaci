<?php
require_once 'config/DataBase.php';
Class Cliente{
    private $idCliente;
    private $nombreApellido;
    private $dni;
    private $direccion;
    private $telefono;
    private $obraSocial;

    function __construct($idCliente, $dni = "", $nombreApellido = "", $direccion = "", $telefono = "", $obraSocial = "") {
        $this->setIdCliente($idCliente);
        $this->setDni($dni);
        $this->setNombreApellido($nombreApellido);
        $this->setDireccion($direccion);
        $this->setTelefono($telefono);
        $this->setObraSocial($obraSocial);
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getNombreApellido() {
        return $this->nombreApellido;
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
    
    function getObraSocial() {
        return $this->obraSocial;
    }

    
    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNombreApellido($nombreApellido) {
        $this->nombreApellido = $nombreApellido;
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

    function setObraSocial($obraSocial) {
        $this->obraSocial = $obraSocial;
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
}
?>