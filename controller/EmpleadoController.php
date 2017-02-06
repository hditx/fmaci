<?php
require_once 'model/cola.php';
require_once 'model/Turno.php';
require_once 'config/DataBase.php';
require_once 'model/Empleado.php';

class EmpleadoController{
    public function index(){
        require_once 'view/header.php';
        require_once 'view/empleado/empleado.php';
        require_once 'view/footer.php';
    }
    
    public function actualizarTurno(){
        echo "Actualizar";
        Empleado::actualizar($_REQUEST['id']);
        echo "Sali";
        header("Location: index.php?c=empleado&a=index");
    }
    public function listTurno(){
        $turnos = Turno::getTurno();
        require_once 'view/header.php';
        require_once 'view/empleado/list.php';
        require_once 'view/footer.php';
    }
}
?>