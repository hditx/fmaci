<?php
require_once 'config/DataBase.php';
require_once 'model/Turno.php';

class Empleado{
    
    private $idEmpleado;
    private $nombre;
    private $apellido;
    
    public function __construct($idEmpleado, $nombre = "", $apellido = "") {
        $this->setIdEmpleado($idEmpleado);
        $this->setNombre($nombre);
        $this->setApellido($apellido);
    }

    public function getIdEmpleado() {
        return $this->idEmpleado;
    }

    public function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function save(){
        try {
            $mdb =  DataBase::getDb();
            if($this->getIdEmpleado() != null){
                $sql = "UPDATE Empleado SET nombre = '".$this->getNombre()."', apellido = '".$this->getApellido()."' WHERE idEmpleado =".$this->getIdEmpleado();
            }else{
                $sql = "INSERT Empleado(nombre, apellido, fechaDeAlta) VALUES ('".$this->getNombre()."', '".$this->getApellido()."', NOW())";
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
            $sql2 = "DELETE FROM cola_empleado WHERE idEmpleado = ".$id;
            $temp2 = $mdb->prepare($sql2);
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
            $data = new Empleado($resultado[0]['idEmpleado'], $resultado[0]['nombre'], $resultado[0]['apellido']);
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function getNombreObjeto($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT nombre FROM Empleado WHERE idEmpleado =".$id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            $data = $resultado[0]['nombre'];
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
            $sql = 'SELECT * FROM Empleado ORDER BY apellido';
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            foreach ($resultado as $fila){
                $data[] = new Empleado($fila['idEmpleado'], $fila['nombre'], $fila['apellido']);
            }
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function getAsignadas($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT idCola FROM cola_empleado WHERE idEmpleado =".$id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            foreach ($resultado as $fila){
                $data[] = $fila['idCola'];
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
            $sql = "UPDATE Turno SET atendido = ".$estado." WHERE idTurno = ". $id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public static function saveEstado($id, $estado, $idEmpleado){
        try {
            $mdb =  DataBase::getDb();
            $sql = "INSERT HistorialEstado(idTurno, fechaHora, estado, idEmpleado) VALUES (".$id.",now(),".$estado.", '".$idEmpleado."')";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public static function saveUnion($idEmpleado, $idCola){
        try {
            $mdb =  DataBase::getDb();
            $sql = "INSERT cola_empleado(idCola, idEmpleado) VALUES (".$idCola.", ".$idEmpleado.")";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }        
    }
    
    public static function getNuevoEmpleado(){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT idEmpleado FROM Empleado WHERE fechaDeAlta = (SELECT MAX(fechaDeAlta) FROM Empleado)";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            return $resultado[0]['idEmpleado'];
            $mdb = null;            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }        
    }
    
    public static function getColasAsignadas($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT nombreCola FROM Cola WHERE idCola IN (SELECT idCola FROM cola_empleado WHERE idEmpleado = ".$id.")";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            foreach ($resultado as $fila){
                $data[] = $fila['nombreCola'];
            }
            return $data;
            $mdb = null;            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }        
    }
}
