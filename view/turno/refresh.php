<div id='derecha'>
        <div class='letra'>Turno</div>
<?php
        foreach ($turnos as $t) {
?>
            <div class=<?=($t->getAtendido() == 2)? 'modif' : 'letra'?>>
                <?=Turno::getLetra($t->getIdCola())."".$t->getPosicion()?>
            </div>
<?php
        }
?>

</div>

