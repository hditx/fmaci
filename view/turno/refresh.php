<div id='derecha'>
        <div class='monitorTecla'>TURNO</div>
<?php
        foreach ($turnos as $t) {
?>
        <div class="monitorTecla">
            <div class=<?=($t->getAtendido() == 2)? 'modif' : 'letra'?>>
                <?=Turno::getLetra($t->getIdCola())."".$t->getPosicion()?>
            </div>
        </div>
<?php
        }
?>

</div>

