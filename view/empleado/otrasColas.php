<h1>Turnos en espera</h1>
<div style="display: inline-block">
<div style="float: left" id="trans">

    <a href="?c=empleado&a=estadoTurno&id=<?=$first->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>" id="text">
        <div class="encabezado" id="text">
            <?= $title ?> <img id="imagenPosicion">
        </div>
    </a>
    <br>
    <div id="global">
        <div id="mensajes">
            <?php foreach ($turnos as $t){?>
                <div>
                    <a class="myTd1" href="?c=empleado&a=estadoTurno&id=<?=$t->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                        <div class="cuadrado">
                            <?= Turno::getLetra($t->getIdCola()) . "" . $t->getPosicion()." "?>
                            <div class="rectangulo">
                                <?= $t->getHora()?><br>
                                <?= Cola::getNombreColaObjeto($t->getIdCola())?>
                                <?= Turno::getHoraObjeto($t->getIdTurno()) ."MIN"?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php }?>
        </div>
    </div>
</div>
</div>
<div style="float: right;">
    <img class="radiuss" src="view/images/colores.jpg" width="350" height="80"><br>
    <div class="ubiBoton">
        <a class="buttonEmployed" href="index.php?c=empleado&a=enEstado&idEmpleado=<?=$idEmpleado?>"><?= $otras ?></a><br>
        <a class="buttonEmployed" href="index.php?c=empleado&a=listTurno&idEmpleado=<?=$idEmpleado?>">Asignada</a>
    </div>
</div>