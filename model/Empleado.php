<?php
require_once 'config/DataBase.php';
require_once 'model/Turno.php';

class Empleado{
    private $idEmpleado;
    private $nombreApellido;
    
    public function __construct($idEmpleado, $nombreApellido) {
        $this->setEmpleado($idEmpleado);
        $this->setNombreApellido($nombreApellido);
    }

    public function getIdEmpleado() {
        return $this->idEmpleado;
    }

    public function getNombreApellido() {
        return $this->nombreApellido;
    }

    public function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    public function setNombreApellido($nombreApellido) {
        $this->nombreApellido = $nombreApellido;
    }

    public static function actualizar($id){
        echo "comenzando";
        try {
        $mdb =  DataBase::getDb();
        echo "entre";
        $sql = "UPDATE Turno SET atendido = 1 WHERE idTurno = ". $id;
        echo "entre1";
        $temp = $mdb->prepare($sql);
        echo "entre2";
        $temp->execute();
        echo "entre3";
        $mdb = null;
        echo "entre4";
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    }
    
    
}
