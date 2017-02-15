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

    public static function actualizar($id, $estado){
        try {
        $mdb =  DataBase::getDb();
        $sql = "UPDATE Turno SET atendido =".$estado." WHERE idTurno = ". $id;
        $temp = $mdb->prepare($sql);
        $temp->execute();
        $mdb = null;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    }
    
    public static function saveEstado($id, $estado){
        try {
            $mdb =  DataBase::getDb();
            $sql = "INSERT HistorialEstado(idTurno, fechaHora, estado) VALUES (".$id.",now(),".$estado.")";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
