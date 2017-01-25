<?php
class Turno{
    private $nombre;
    private $obraSocial;
    function __construct($nombre, $obraSocial) {
        $this->setNombre($nombre);
        $this->setObraSocial($obraSocial);
    }

    function getNombre() {
        return $this->nombre;
    }

    function getObraSocial() {
        return $this->obraSocial;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setObraSocial($obraSocial) {
        $this->obraSocial = $obraSocial;
    }


}
