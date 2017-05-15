<?php
require_once "model/cola.php";
require_once 'model/Cliente.php';
require_once 'model/Turno.php';
require_once 'model/Empleado.php';
require_once 'config/DataBase.php';
require_once 'config/Impresora.php';

class TurnoController{
    public function index(){
        header("Location: index.php?c=turno&a=sacarTurno");
    }

    public function monitor(){
        require_once 'view/turno/monitorAjax.php';
    }
    
    public function updateMonitor(){
        $turnos = Turno::getMonitor();
        require_once 'view/turno/refresh.php';
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
        require_once 'view/footerNButton.php';
    }
    
    public function imprimir(){
        /*$impresora = fopen("/dev/usb/lp0", "a+");
        fprintf($impresora, "Prueba");*/
        Impresora::printTicket(Turno::getLetra($_REQUEST['id']), Cola::getNumeroSiguiente($_REQUEST['id']));
        Cola::incrementar($_REQUEST['id']);
        $turn = new Turno(null);
        $turn->setIdCola($_REQUEST['id']);
        $turn->setPosicion(Cola::getNumeroSiguiente($_REQUEST['id']));
        $turn->setAtendido(0);
        $turn->save();
        header("Location: index.php?c=turno&a=index");
    }
}
