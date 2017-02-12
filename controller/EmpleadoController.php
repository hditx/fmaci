<?php
require_once 'model/cola.php';
require_once 'model/Turno.php';
require_once 'config/DataBase.php';
require_once 'model/Empleado.php';

class EmpleadoController{
    public function index(){
//        require_once 'view/header.php';
//        require_once 'view/empleado/empleado.php';
//        require_once 'view/footer.php';
        header("Location: index.php?c=empleado&a=listTurno");
    }
    
    public function actualizarTurno(){
        Empleado::actualizar($_REQUEST['id']);
        header("Location: index.php?c=empleado&a=llamarTurno");
    }
    
    public function listTurno(){
        $colas = Cola::getList();
        $i = 0;
        foreach($colas as $c){
            $turnos[] = array($c, Turno::getTurno($c->getIdCola()));
        }
        
        //print_r($turnos);
        require_once 'view/header.php';
        require_once 'view/empleado/list.php';
        require_once 'view/footer.php';
    }
    
    public function llamarTurno(){
        require_once 'view/header.php';
        require_once 'view/empleado/llamarTurno.php';
        require_once 'view/footer.php';
    }
}
?>