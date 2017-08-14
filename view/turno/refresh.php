<div id='derecha'>
        <div class='monitorTecla'>LLAMANDO</div>
<?php
        foreach ($turnos as $t) {
?>
        <div>
            <div class="monitorTeclaIzq">
                <div class=<?=($t->getEstado() == 2)? 'blink' : 'letra'?>>
                    <?=Turno::getLetra(Turno::getIdColaObjeto($t->getIdTurno()))."". Turno::getPosicionObjeto($t->getIdTurno())?>
                </div>
                <div class="monitorTeclaDer">
                    <div class="monitorTeclaPosicion"><?= Turno::getNombreEmpleadoMonitor($t->getIdTurno())?></div>
                </div>
            </div>
        </div>
<?php
        }
?>

</div>

