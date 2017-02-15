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
    
    public function listTurno(){
        $colas = Cola::getList();
        $i = 0;
        foreach($colas as $c){
            $turnos[] = array($c, Turno::getTurno($c->getIdCola()));
        }
        require_once 'view/header.php';
        require_once 'view/empleado/list.php';
        require_once 'view/footer.php';
    }
    
    public function llamarTurno(){
        require_once 'view/header.php';
        require_once 'view/empleado/llamarTurno.php';
        require_once 'view/footer.php';
    }
     
    public function estadoTurno(){
        switch ($_REQUEST['estado']){
            case 1:
            case 4:
                //ATENDIDO Y ABANDONO
                Empleado::actualizar($_REQUEST['id'], $_REQUEST['estado']);
                Empleado::saveEstado($_REQUEST['id'], $_REQUEST['estado']);
                header("Location: index.php?c=empleado&a=listTurno");
                break;
            case 2:
                //LLAMADO
                Empleado::saveEstado($_REQUEST['id'], $_REQUEST['estado']);
                $id = $_REQUEST['id'];
                $temp =Turno::getLetra(Turno::getIdColaObjeto($_REQUEST['id']));
                $temp1 = Turno::getPosicionObjeto($_REQUEST['id']);                
                require_once 'view/header.php';
                require_once 'view/empleado/llamarTurno.php';
                require_once 'view/footer.php';
                break;
            case 3:
                //ATENDIENDO
                Empleado::saveEstado($_REQUEST['id'], $_REQUEST['estado']);
                $id = $_REQUEST['id'];
                $temp =Turno::getLetra(Turno::getIdColaObjeto($_REQUEST['id']));
                $temp1 = Turno::getPosicionObjeto($_REQUEST['id']);                
                require_once 'view/header.php';
                require_once 'view/empleado/atendido.php';
                require_once 'view/footer.php';
                break;
        }
    }
}
?>