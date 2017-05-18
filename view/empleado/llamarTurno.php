<div>
    <div class="cuadradoMostrar">
        <div class="letraCuadrado"><?= Turno::getLetra($turno->getIdCola())."".$turno->getPosicion()?></div>
        <div class="rectanguloMostrar">
            <div class="obraSocial"><?= Cola::getNombreColaObjeto($turno->getIdCola())?></div>
            <div class="horaNormal"><?= $turno->getHora()?></div>
            <div class="horaEspera"><?= Turno::getHoraObjeto($turno->getIdTurno()) ."MIN"?></div>
        </div>
    </div>
</div>
<div class="center">
    <a href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=2&idEmpleado=<?=$idEmpleado?>"><div class="botonLlama">LLamar nuevamente</div></a>
    <div class="posicion" id="llamados" >
        <div id="mensaje">
            <?php foreach ($listLlamado as $t) {?>
            <div class="fechas">
                <div class="textFecha"><?php echo $d; $d--;?></div>
                <div class="textFechaCentro"><?= Historial::getFecha($t->getIdHistorial())?></div>
                <div class="textFechaDer"><?= Historial::getHora($t->getIdHistorial())?></div>
            </div>
            <?php }?>
    </div>
</div>
<a class="atender" href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=3&idEmpleado=<?=$idEmpleado?>">Atender</a>
<a href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=4&idEmpleado=<?=$idEmpleado?>"><div id="noPresente">No se presento</div></a>
<a class="posicionEsperaLl" id="espera" href="index.php?c=empleado&a=estadoTurno&id=<?=$id?>&estado=2&idEmpleado=<?=$idEmpleado?>&espera=1&enEspera=1">Enviar a espera</a>