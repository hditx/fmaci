<?php
require_once "model/cola.php";
require_once 'model/Cliente.php';
require_once 'model/Turno.php';
require_once 'config/DataBase.php';

class TurnoController{
    public function index(){
        require_once 'view/header.php';
        require_once 'view/turno/Turno.php';
        require_once 'view/footer.php';
    }

    public function sacarTurno(){
        $temp = new Cliente(null);
        $temp->setDni($_REQUEST['dni']);
        $temp->save();
        $colas = Cola::getList();
        require_once 'view/header.php';
        require_once 'view/turno/seleccion.php';
        require_once 'view/footer.php';
    }
    
    public function imprimir($n){
        $temp = Cola::getC(n);
        if($temp->getJerarquia() != 0){
            echo "En proceso";
            //colas = Cola::getListRestante();
        }else{
            echo "Imprimiendo turno";
            header("Location: index.php?c=turno&a=index");
        }
    }
}
