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
                $sql = "UPDATE Usuario SET nombre = '".$this->getNombre()."', apellido = '".$this->getApellido()."' WHERE usuarioId =".$this->getIdEmpleado();
            }else{
                $sql = "INSERT Usuario(nombre, apellido, fechaDeAlta, perfil) VALUES ('".$this->getNombre()."', '".$this->getApellido()."', NOW(), 3)";
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
            Empleado::deleteUnion($id);
            $mdb =  DataBase::getDb();
            $sql = "DELETE FROM Usuario WHERE usuarioId = ".$id;
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
            $sql = "SELECT * FROM Usuario WHERE usuarioId =".$id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            $data = new Empleado($resultado[0]['usuarioId'], $resultado[0]['nombre'], $resultado[0]['apellido']);
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
            $sql = "SELECT nombre FROM Usuario WHERE usuarioId =".$id;
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
            $sql = 'SELECT * FROM Usuario ORDER BY apellido';
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            foreach ($resultado as $fila){
                $data[] = new Empleado($fila['usuarioId'], $fila['nombre'], $fila['apellido']);
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
            $sql = "SELECT idCola FROM cola_empleado WHERE usuarioId =".$id;
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
            $sql = "INSERT HistorialEstado(idTurno, fechaHora, estado, idEmpleado) VALUES ($id,now(),$estado, '$idEmpleado')";
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
            Empleado::deleteUnion($idEmpleado);
            $mdb =  DataBase::getDb();
            $sql = "INSERT cola_empleado(idCola, idEmpleado) VALUES ($idCola, $idEmpleado)";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }        
    }
    
    public static function deleteUnion($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "DELETE FROM cola_empleado WHERE idEmpleado =".$id;
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
            $sql = "SELECT usuarioId FROM Usuario WHERE perfil = 3 AND fechaDeAlta = (SELECT MAX(fechaDeAlta) FROM Usuario)";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            return $resultado[0]['usuarioId'];
            $mdb = null;            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }        
    }
    
    public static function getColasAsignadas($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT nombreCola FROM Cola WHERE idCola IN (SELECT idCola FROM cola_empleado WHERE idEmpleado = $id)";
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
    
    public static function saveSession($idEmpleado, $idTurno, $estado){
        try {
            $mdb =  DataBase::getDb();
            $sql = "INSERT SesionEmpleado (idUsuario, idTurno, estado, ultimaSesion) VALUES ($idEmpleado, $idTurno, $estado, NOW())";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }        
    }
}
