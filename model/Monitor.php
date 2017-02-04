<?php
require_once 'config/DataBase.php';
require_once 'model/Turno.php';

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
        
    }
