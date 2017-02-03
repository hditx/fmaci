<?php
require_once "model/Monitor.php";
require_once 'model/Turno.php';
require_once 'config/DataBase.php';

    class MonitorController{
        public function index(){
            $turnos = Monitor::getTurno();
            require_once 'view/header.php';
            require_once 'view/monitor/monitor.php';
            require_once 'view/footer.php';
        }
        
        
    }
?>
