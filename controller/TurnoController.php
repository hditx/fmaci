<?php
require_once "model/cola.php";
require_once 'model/Cliente.php';
require_once 'model/Turno.php';

class TurnoController{
    public function index(){
        
        require_once 'view/header.php';
        require_once 'view/turno/Turno.php';
        require_once 'view/footer.php';
        
    }
    
//    public function crear(){
//        require_once 'view/header.php';
//        require_once 'view/turno/seleccion.php';
//        require_once 'view/footer.php';
//    }

    public function sacarTurno(){
        $t= $_REQUEST['dni'];
        $temp= new Cliente($t, 1);
        require_once 'view/header.php';
        require_once 'view/turno/seleccion.php';
        require_once 'view/footer.php';
    }
    public function perfumeria(){
        $t= "Perfumeria";
        $temp = new Turno($t);
        require_once 'view/header.php';
        require_once 'view/turno/imprimir.php';
        require_once 'view/footer.php';
    }
    
    public function particular(){
        $t= "Particular";
        $temp = new Turno($t);
        require_once 'view/header.php';
        require_once 'view/turno/imprimir.php';
        require_once 'view/footer.php';
    }
    public function obraSocial(){
        require_once 'view/header.php';
        require_once 'view/turno/listObraS.php';
        require_once 'view/footer.php';
    }
    public function turnoObraSocial(){
        $t = "Obra Social";
        $t1 = $_REQUEST['nombreS'];
        $temp = new Turno($t, $t1);
        require_once 'view/header.php';
        require_once 'view/turno/imprimir.php';
        require_once 'view/footer.php';
    }
}
