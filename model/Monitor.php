<?php
require_once 'config/DataBase.php';
require_once 'model/Turno.php';
require_once 'model/cola.php';
    class Monitor{
        private $idTurno;
        private $idCola;
        private $idCliente;
        private $posicion;
        
        public function __construct($idTurno, $idCola = "", $idCliente = "", $posicion = "") {
            $this->setIdTurno($idTurno);
            $this->setIdCola($idCola);
            $this->setIdCliente($idCliente);
            $this->setPosicion($posicion);
        }

        public function getIdTurno() {
            return $this->idTurno;
        }

        public function getIdCola() {
            return $this->idCola;
        }

        public function getIdCliente() {
            return $this->idCliente;
        }

        public function getPosicion() {
            return $this->posicion;
        }

        public function setIdTurno($idTurno) {
            $this->idTurno = $idTurno;
        }

        public function setIdCola($idCola) {
            $this->idCola = $idCola;
        }

        public function setIdCliente($idCliente) {
            $this->idCliente = $idCliente;
        }

        public function setPosicion($posicion) {
            $this->posicion = $posicion;
        }
        
        public static function getTurno(){
            try {
                $mdb =  DataBase::getDb();
                $temp = $mdb->prepare('SELECT * FROM Turno');
                $temp->execute();
                $resultado = $temp->fetchAll(); 
                foreach($resultado as $fila) {
                    $data[] = new Turno($fila['idTurno'], $fila['idCola'], $fila['idCliente'], $fila['posicion']);
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
