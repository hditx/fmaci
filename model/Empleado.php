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
            $sql = "INSERT HistorialEstado(idTurno, fechaHora, estado) VALUES (".$id.",'SYSTIMESTAMP',".$estado.")";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public static function letraNumero($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT letra FROM Cola WHERE idCola = (SELECT idCola FROM Turno WHERE idTurno = ".$id.")";
            $sql1 = "SELECT posicion FROM Turno WHERE idTurno = ".$id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $temp1 = $mdb->prepare($sql1);
            $temp1->execute();
            $resultado[] = array($temp, $temp1);
            $mdb = null;            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }        
        return $resultado;
    }
    
    public static function numero($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT posicion FROM Turno WHERE idTurno = ".$id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }        
        return $temp;
    }
}
