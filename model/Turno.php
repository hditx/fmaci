<?php
require_once 'config/DataBase.php';
require_once 'model/cola.php';

class Turno{
    private $idTurno;
    private $idCola;
    private $posicion;
    private $atendido;
    
    function __construct($idTurno, $idCola = "", $posicion = "", $atendido = "") {
        $this->setIdTurno($idTurno);
        $this->setIdCola($idCola);
        $this->setPosicion($posicion);
        $this->setAtendido($atendido);
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

    public function save(){
        try {
            $mdb =  DataBase::getDb();
            $sql = "INSERT Turno(idCola, posicion, atendido) VALUES (".$this->getIdCola().",".$this->getPosicion().",".'".$this->getAtendido()."'.")";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public static function getTurno($id){
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare("SELECT idTurno, posicion FROM Turno WHERE atendido = 0 AND idCola = ".$id."ORDER BY idCola, posicion");
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            foreach($resultado as $fila) {
                $data[] = new Turno($fila['idTurno'],"", $fila['posicion']);
            }
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


}
