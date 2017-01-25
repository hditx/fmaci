<?php
Class Cliente{
    private $idCliente;
    private $nombreApellido;
    private $dni;
    private $direccion;
    private $telefono;

    function __construct($dni, $idCliente, $nombreApellido = "", $direccion = "", $telefono = "") {
        $this->setDni($dni);
        $this->setIdCliente($idCliente);
        $this->setNombreApellido($nombreApellido);
        $this->setDireccion($direccion);
        $this->setTelefono($telefono);
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getNombreApellido() {
        return $this->nombreApellido;
    }

    function getDni() {
        return $this->dni;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNombreApellido($nombreApellido) {
        $this->nombreApellido = $nombreApellido;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }


}
