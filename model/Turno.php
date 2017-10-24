<?php
require_once 'config/DataBase.php';
require_once 'model/cola.php';
require_once 'model/Historial.php';

class Turno{
    private $idTurno;
    private $idCola;
    private $posicion;
    private $atendido;
    private $hora;
    private $enEspera;
    
    function __construct($idTurno, $idCola = "", $posicion = "", $atendido = "", $hora = "", $enEspera = "") {
        $this->setIdTurno($idTurno);
        $this->setIdCola($idCola);
        $this->setPosicion($posicion);
        $this->setAtendido($atendido);
        $this->setHora($hora);
        $this->setEnEspera($enEspera);
    }

    function getIdTurno() {
        return $this->idTurno;
    }

    function getIdCola() {
        return $this->idCola;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getPosicion() {
        return $this->posicion;
    }

    function getAtendido() {
        return $this->atendido;
    }
    
    function getHora(){
        return $this->hora;
    }
    
    function getEnEspera(){
        return $this->enEspera;
    }
            
    function setAtendido($atendido) {
        $this->atendido = $atendido;
    }
    
    function setIdTurno($idTurno) {
        $this->idTurno = $idTurno;
    }

    function setIdCola($idCola) {
        $this->idCola = $idCola;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setPosicion($posicion) {
        $this->posicion = $posicion;
    }
    
    function setHora($hora){
        $this->hora = $hora;
    }
    
    function setEnEspera($enEspera){
        $this->enEspera = $enEspera;
    }

    public function save(){
        try {
            $mdb =  DataBase::getDb();
            $sql = "INSERT INTO Turno (idCola, posicion, atendido, hora, enEspera, fecha, horaModificacion) VALUES (".$this->getIdCola().",".$this->getPosicion().",".$this->getAtendido().", TIME(NOW()), 0, DATE(NOW()), TIME(NOW()))";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;  
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    
    public static function getHoraObjeto($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT TIMEDIFF(TIME(NOW()) , hora) AS hora  FROM Turno WHERE idTurno =". $id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            return $resultado[0]['hora'];
            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public static function getTurno($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT idTurno, posicion, atendido, hora, enEspera FROM Turno WHERE atendido IN (2,3,4) AND idCola = ".$id." ORDER BY hora";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            foreach($resultado as $fila) {
                $data[] = new Turno($fila['idTurno'],$id, $fila['posicion'], $fila['atendido'], $fila['hora'], $fila['enEspera']);
            }
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function getTurnoUnico($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT idTurno, idCola, LPAD(posicion, 3, '0') AS posicion, atendido, hora, enEspera FROM Turno WHERE idTurno = ".$id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $fila = $temp->fetchAll(); 
            $data = new Turno($fila[0]['idTurno'], $fila[0]['idCola'],  $fila[0]['posicion'], $fila[0]['atendido'], $fila[0]['hora'], $fila['enEspera']);
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function getTurnoPropio($idEmp){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT idTurno, idCola, atendido, hora, LPAD(posicion, 3, '0') AS posicion, enEspera FROM Turno WHERE atendido IN (0) "
                    . "AND idCola IN ((SELECT idCola FROM cola_empleado WHERE idEmpleado =".$idEmp."))"
                    . "AND fecha = DATE(NOW()) ORDER BY hora";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            foreach($resultado as $fila) {
                $data[] = new Turno($fila['idTurno'], $fila['idCola'], $fila['posicion'], $fila['atendido'], $fila['hora'], $fila['enEspera']);
            }
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function getTurnoNoEmpleado($idEmp){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT idTurno, idCola, LPAD(posicion, 3, '0') AS posicion, atendido, hora, enEspera FROM Turno WHERE atendido IN (0) AND "
                    . "idCola NOT IN ((SELECT idCola FROM cola_empleado WHERE idEmpleado =".$idEmp.")) "
                    . "AND fecha = DATE(NOW()) ORDER BY hora";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            foreach($resultado as $fila) {
                $data[] = new Turno($fila['idTurno'],$fila['idCola'], $fila['posicion'], $fila['atendido'], $fila['hora'], $fila['enEspera']);
            }
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }

    public static function getMonitor(){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT idTurno, idCola, atendido, hora, LPAD(posicion, 3, '0') AS posicion, enEspera FROM Turno WHERE atendido NOT IN (0) AND fecha = CURDATE() ORDER BY atendido,  horaModificacion DESC LIMIT 5";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            foreach($resultado as $fila) {
                $data[] = new Turno($fila['idTurno'], $fila['idCola'], $fila['posicion'], $fila['atendido'], $fila['hora'], $fila['enEspera']);
            }
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }

    public static function getNombreEmpleadoMonitor($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT nombre FROM Usuario WHERE usuarioId = (SELECT idEmpleado FROM HistorialEstado WHERE idTurno = $id AND DATE(fechaHora) = DATE(NOW()) LIMIT 1)";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            $data = $resultado[0]['nombre'];
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }


    public static function getNombre($id){
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare("SELECT nombreCola FROM Cola WHERE idCola =".$id);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            $data = $resultado[0]['nombreCola'];
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }

    public static function getLetra($id){
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare("SELECT letra FROM Cola WHERE idCola =".$id);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            $data = $resultado[0]['letra'];
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function getIdColaObjeto($id){
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare("SELECT idCola FROM Turno WHERE idTurno =".$id);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            $data = $resultado[0]['idCola'];
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function getPosicionObjeto($id){
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare("SELECT posicion FROM Turno WHERE idTurno =".$id);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            $data = $resultado[0]['posicion'];
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function getFirstTurno($idEmp){
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare("SELECT * FROM Turno WHERE idCola IN ((SELECT idCola FROM cola_empleado WHERE idEmpleado =".$idEmp.")) "
                    . "AND hora = (SELECT MIN(hora) FROM Turno WHERE atendido = 0 "
                    . "AND idCola IN ((SELECT idCola FROM cola_empleado WHERE idEmpleado =".$idEmp.")) AND fecha = DATE(NOW())) AND atendido = 0");
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            $data = new Turno($resultado[0]['idTurno'],$id, $resultado[0]['posicion'], $resultado[0]['atendido'], $resultado[0]['hora'], $fila['enEspera']);
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;        
    }
            
    public static function getFirstTurnoNoE($idEmp){
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare("SELECT * FROM Turno WHERE idCola NOT IN ((SELECT idCola FROM cola_empleado WHERE idEmpleado =".$idEmp.")) "
                    . "AND hora = (SELECT MIN(hora) FROM Turno WHERE atendido = 0 "
                    . "AND idCola NOT IN ((SELECT idCola FROM cola_empleado WHERE idEmpleado =".$idEmp.")) AND fecha = DATE(NOW())) AND atendido = 0");
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            $data = new Turno($resultado[0]['idTurno'],$id, $resultado[0]['posicion'], $resultado[0]['atendido'], $resultado[0]['hora'], $fila['enEspera']);
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function getTurnoEstado(){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT idTurno, idCola, LPAD(posicion, 3, '0') AS posicion, atendido, hora, enEspera FROM Turno WHERE atendido IN (2,3,4) AND enEspera = 1 AND fecha = DATE(NOW()) ORDER BY hora";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            foreach($resultado as $fila) {
                $data[] = new Turno($fila['idTurno'], $fila['idCola'], $fila['posicion'], $fila['atendido'], $fila['hora'], $fila['enEspera']);
            }
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function setEnEsperaObjeto($id, $opcion){
        switch($opcion){
            case 0:
                $sql = "UPDATE Turno SET enEspera = 0 WHERE idTurno = ".$id;
                break;
            case 1:
                $sql = "UPDATE Turno SET enEspera = 1 WHERE idTurno = ".$id;
                break;
            case 2:
                $sql = "UPDATE Turno SET enEspera = 2 WHERE idTurno = ".$id;
                break;
            
        }
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public static function getEspera($id){
        try{
            $mdb = DataBase::getDb();
            $sql = "SELECT LPAD((MAX(posicion) - MIN(posicion)), 3, '0') AS espera FROM Turno WHERE atendido = 0 AND idCola = $id AND fecha = CURDATE()";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            $data = $resultado[0]['espera'];
            $mdb = null;
        } catch (PDOException $e){
            print "Error" . $e->getMessage();
            die();
        }
        ($data == null)? $data = 0 : $data+=1;
        return $data;
    }
    
    public static function monitorImg(){
        try {
            $mdb = DataBase::getDb();
            $sql = 'SELECT nombre FROM Video LIMIT 1';
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
        } catch (PDOException $e) {
            print "ERROR". $e->getMessage();
        }
        
        return $resultado[0]['nombre'];
    }
    
    public static function getBlink($id){
        try {
            $mdb = DataBase::getDb();
            $sql = "SELECT (CASE WHEN TIME(NOW()) < (SELECT ADDTIME(horaModificacion, '00:00:03') AS hora FROM Turno WHERE idTurno = $id) THEN 1 ELSE 0 END) hora FROM Turno WHERE idTurno = $id AND atendido = 1";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
        } catch (PDOException $e) {
            print "ERROR". $e->getMessage();
        }
        
        return $resultado[0]['hora'];
    }
}
