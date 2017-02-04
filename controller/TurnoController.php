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

    public function monitor(){
        $turnos = Turno::getTurno();
        require_once 'view/header.php';
        require_once 'view/turno/monitor.php';
        require_once 'view/footer.php';
    }
    
    public function sacarTurno(){
//        if(isset($_REQUEST['dni'])){
//            $temp = new Cliente(null);
//            $temp->setDni($_REQUEST['dni']);
//            $temp->save();
//        }
        if(isset($_REQUEST['id'])){
            $t = Cola::get($_REQUEST['id']);
            if ($t->getSiguiente() == null){
                $colas = Cola::getList3($t->getIdCola());
            }else {
                header("Location: index.php?c=turno&a=imprimir&id=".$t->getIdCola());
            }
        }else{
            $colas = Cola::getList2();
        }
        require_once 'view/header.php';
        if($colas != null){
            require_once 'view/turno/seleccion.php';
        }else{
            echo "Imprimiendo turno";
        }
        require_once 'view/footer.php';
    }
    
    public function imprimir(){
        Cola::incrementar($_REQUEST['id']);
        $turn = new Turno(null);
        $turn->setIdCola($_REQUEST['id']);
        $turn->setPosicion(Cola::getNumeroSiguiente($_REQUEST['id']));
        //$turno->setAtendido(1);
        echo "<br>". $turn->getIdCola() . "<br>";
        echo $turn->getPosicion();
        $turn->save();
        header("Location: index.php?c=turno&a=index");
    }
}