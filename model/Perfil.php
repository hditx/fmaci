<?php

require_once 'config/DataBase.php';

class Perfil {
    private $perfilId;
    private $nombre;
    private $descripcion;
    private $acceso;


    public function __construct($perfilId, $nombre = "", $descripcion = "", $acceso = "") {
        $this->setPerfilId($perfilId);
        $this->setNombre($nombre);
        $this->setDescripcion($descripcion);
        $this->setAcceso($acceso);
    }

    public function getPerfilId() {
        return $this->perfilId;
    }

    public function setPerfilId($perfilId) {
        $this->perfilId = $perfilId;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getAcceso() {
        return $this->acceso;
    }

    public function setAcceso($acceso) {
        $this->acceso = $acceso;
    }

    public static function getPerfiles () {
        try {
            $mdb = DataBase::getDb();
            $sql = "SELECT * FROM perfil";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            foreach ($resultado as $fila) {
                $data[] = new Perfil($fila['perfilId'], $fila['nombre'], $fila['descripcion'], $fila['acceso']);
            }
            return $data;
        } catch (Exception $e) {
            print $e->getMessage();
            die;
        }
    }

    public function save () {
        try {
            $mdb = DataBase::getDb();
            if ($this->getPerfilId() != null) {
                $sql = "UPDATE perfil SET 
                                descripcion = '".$this->getDescripcion()."', 
                                nombre = '".$this->getNombre()."',
                                acceso = ".$this->getAcceso()."
                                WHERE perfilId = ". $this->getPerfilId();
            } else {
                $sql = "INSERT INTO perfil (nombre, descripcion, acceso) VALUES 
                                        ('".$this->getNombre() ."', '" .$this->getDescripcion()."', ".$this->getAcceso().")";
            }
            $temp = $mdb->prepare($sql);
            $temp->execute();
        } catch (Exception $e) {
            print $e->getMessage();
            die;
        }
    }

    public static function delete ($id) {
        try {
            $mdb = DataBase::getDb();
            $sql = "DELETE FROM perfil WHERE perfilId = ". $id;
            $execute = $mdb->prepare($sql);
            $execute->execute();
        } catch (Exception $e) {
            print $e->getMessage();
            die;
        }
    }

    public static function get ($id) {
        try {
            $mdb = DataBase::getDb();
            $sql = "SELECT * FROM perfil WHERE perfilId = ". $id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            $perfil = new Perfil($resultado[0]['perfilId'], $resultado[0]['nombre'], $resultado[0]['descripcion'], $resultado[0]['acceso']);
            return $perfil;
        } catch (Exception $e) {
            print $e->getMessage();
            die;
        }
    }

}