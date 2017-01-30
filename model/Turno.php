<?php
require_once 'config/DataBase.php';

class Turno{
    private $idTurno;
    private $idCola;
    private $idCliente;
    private $posicion;
    function __construct($idTurno, $idCola = "", $idCliente = "", $posicion) {
        $this->setIdTurno($idTurno);
        $this->setIdCola($idCola);
        $this->setIdCliente($idCliente);
        $this->setPosicion($posicion);
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
            $sql = "INSERT INTO Turno(idCola, idCliente, posicion) VALUES ("
                    .$this->getIdCola().","
                    .$this->getIdCliente().","
                    .$this->getPosicion().
                    ")";
           // echo $sql;
            echo "Estoy guardando turno";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}
