<div id='derecha'>
    <div>
        <div class='monitorTeclaLeft'>Nro</div><div class="monitorTeclaRight"> Vendedor</div>
     </div>
<?php
        foreach ($turnos as $t) {
?>
        <div>
            <div class="monitorTeclaIzq">
                <?php switch ($t->getAtendido()){ case 1: $c="gris";break;case 2: $c="blink";break;case 3: $c="letra";break; }?>
                <div class=<?=$c?>>
                     <?=Turno::getLetra($t->getIdCola())."".$t->getPosicion()?>
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

