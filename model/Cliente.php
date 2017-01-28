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
            if($this->getIdCliente() != null){
            $sql = "UPDATE Cliente SET nombreApellido  = '".$this->getNombreApellido()."', "
                                    . "dni             = '".$this->getDni()."', "
                                    . "direccion       = '".$this->getDireccion()."',"
                                    . "telefono        = '".$this->getTelefono()."', "
                                    . "obraSocial      = '".$this->getObraSocial()."'"
                 . " WHERE idCliente = ".$this->getIdCliente();
            }else{
                $sql = "INSERT INTO Cliente(nombreApellido, dni, direccion, telefono, obraSocial) VALUES ("
                        . "'".$this->getNombreApellido()."', "
                        . "'".$this->getDni()."', "
                        . "'".$this->getDireccion()."', "
                        . "'".$this->getTelefono()."', "
                        . "'".$this->getObraSocial()."' "
                        . ")";
            }
            //echo $sql;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
?>