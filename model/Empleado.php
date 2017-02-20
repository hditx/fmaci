<?php
require_once 'config/DataBase.php';
require_once 'model/Turno.php';

class Empleado{
    
    private $idEmpleado;
    private $nombreApellido;
    
    public function __construct($idEmpleado, $nombreApellido = "") {
        $this->setIdEmpleado($idEmpleado);
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
    
    public function save(){
        try {
            $mdb =  DataBase::getDb();
            if($this->getIdEmpleado() != null){
                $sql = "UPDATE Empleado SET apellidoNombre = '".$this->getNombreApellido()."' WHERE idEmpleado =".$this->getIdEmpleado();
            }else{
                $sql = "INSERT Empleado(apellidoNombre) VALUES ('".$this->getNombreApellido()."')";
            }
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public static function delete($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "DELETE FROM Empleado WHERE idEmpleado = ".$id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        } 
    }

    public static function get($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM Empleado WHERE idEmpleado =".$id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            $data = new Empleado($resultado[0]['idEmpleado'], $resultado[0]['apellidoNombre']);
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }

    public static function getEmpleado(){
        try {
            $mdb =  DataBase::getDb();
            $sql = 'SELECT * FROM Empleado ORDER BY apellidoNombre';
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            foreach ($resultado as $fila){
                $data[] = new Empleado($fila['idEmpleado'], $fila['apellidoNombre']);
            }
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
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
