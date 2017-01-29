<?php
require_once "model/cola.php";
require_once 'config/DataBase.php';

    class MonitorController{
        public function index(){
            $colas = Cola::getList();
            require_once 'view/header.php';
            require_once 'view/monitor/monitor.php';
            require_once 'view/footer.php';
        }
    }
?>
