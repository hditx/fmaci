<?php foreach ($turnos as $t){?>
<a href="?c=empleado&a=estadoTurno&id=<?=$t->getIdTurno()?>&estado=<?=1?>&idEmpleado=<?=$idEmpleado?><?= ($t->getAtendido() == 3)? "&mostrar=1" : ""?>"&enEspera=<?=$t->getEnEspera()?>" class="row justify-content-between text-dark">
        <div class="<?= ($showNext)? "cuadrado": $colorcitos[$t->getAtendido()] ?> letraCuadrado">
            <?= Turno::getLetra($t->getIdCola()) . "" . $t->getPosicion()." "?>
        </div>
        <div class="<?= ($showNext) ? "rectangulo" : $colorcitosRec[$t->getAtendido()]?> col-sm-8 col-md-8">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <b><?= Cola::getNombreColaObjeto($t->getIdCola())?></b>
                </div>
                <div class="col-sm-4 col-sm-4 offset-sm-3 offset-md-3">
                    <b><?= $t->getHora()?></b>
                </div>
            </div>
            <div class="horaEspera col-sm-4 col-md-4 offset-sm-3 offset-md-3">
                <?= Turno::getHoraObjeto($t->getIdTurno())?>
            </div>
        </div>
</a>
<?php }?>