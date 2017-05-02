<?php
require_once 'config/DataBase.php';
require_once 'model/Turno.php';

$turnos = Turno::getMonitor();
foreach ($turnos as $t) {
    echo $t->getIdCola();
}
?>