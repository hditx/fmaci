<?php

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

    public static function actualizarTurno($id){
        try {
        $mdb =  DataBase::getDb();
        
        $sql = "UPDATE Turno SET atendido = 1 WHERE idTurno = ". $id;
        $temp = $mdb->prepare($sql);
        $temp->execute();
        $mdb = null;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    }
    
    
}
