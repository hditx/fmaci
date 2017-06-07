<div id='derecha'>
        <div class='monitorTecla'>TURNO</div>
<?php
        foreach ($turnos as $t) {
?>
        <div class="monitorTecla">
            <div class=<?=($t->getAtendido() == 2)? 'blink' : 'letra'?>>
                <?=Turno::getLetra($t->getIdCola())."".$t->getPosicion()."  <span id='nombreMonitor'>".Turno::getNombreEmpleadoMonitor($t->getIdTurno()).'</span>'?>
            </div>
        </div>
<?php
        }
?>

</div>

