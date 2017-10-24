<?php foreach ($turnos as $t){?>
<a class="myTd1" href="?c=empleado&a=estadoTurno&id=<?=$t->getIdTurno()?>&estado=<?=1?>&idEmpleado=<?=$idEmpleado?><?= ($t->getAtendido() == 3)? "&mostrar=1" : ""?>&enEspera=<?=$t->getEnEspera()?>">
    <div class="<?= ($showNext)? "cuadrado": $colorcitos[$t->getAtendido()] ?>">
            <div class="letraCuadrado"><?= Turno::getLetra($t->getIdCola()) . "" . $t->getPosicion()." "?></div>
        <div class="<?= ($showNext) ? "rectangulo" : $colorcitosRec[$t->getAtendido()]?>">
            <div class="obraSocial"><?= Cola::getNombreColaObjeto($t->getIdCola())?></div>
            <div class="horaNormal"><?= $t->getHora()?></div>
            <div class="horaEspera"><?= Turno::getHoraObjeto($t->getIdTurno())?></div>
        </div>
    </div>
</a>
<?php }?>