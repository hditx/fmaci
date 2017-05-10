<?php
require_once 'model/Turno.php';
require_once 'config/DataBase.php';

$turnos = Turno::getMonitor();

echo "<div id='derecha'>
        <div class='letra'>Turno</div>";    
        foreach ($turnos as $t) {
            if($t->getAtendido() == 2){
                echo "<div class='modif'>". Turno::getLetra($t->getIdCola())."".$t->getPosicion()."</div>";
            }else {
                echo "<div class='letra'>".Turno::getLetra($t->getIdCola())."".$t->getPosicion()."</td>";
            } 
        }
echo "</div>";
?>
