<br><div style="display: inline-block">
<div style="float: left" id="trans">
    <?php if ($showNext) {?>
        <a href="?c=empleado&a=estadoTurno&id=<?=$first->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
    <?php } ?>
        <div class="encabezado" id="text">
            <?= $title ?> 
            <?php if ($showNext) {?>
                <img id="imagenPosicion">
            <?php } ?>
        </div>
    </a>
    <br>
    <div id="global">
        <div id="mensajes">
            <?php foreach ($turnos as $t){?>
                <div>    
                    <a class="myTd1" href="?c=empleado&a=estadoTurno&id=<?=$t->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                        <div class="<?= ($showNext)? "cuadrado": $colorcitos[$t->getAtendido()] ?>">
                                <div class="letraCuadrado"><?= Turno::getLetra($t->getIdCola()) . "" . $t->getPosicion()." "?></div>
                            <div class="<?= ($showNext) ? "rectangulo" : $colorcitosRec[$t->getAtendido()]?>">
                                <div class="obraSocial"><?= Cola::getNombreColaObjeto($t->getIdCola())?></div>
                                <div class="horaNormal"><?= $t->getHora()?></div>
                                <div class="horaEspera"><?= Turno::getHoraObjeto($t->getIdTurno()) ."MIN"?></div>
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
        <?php foreach ($links as $key => $value){
            echo "<a class='buttonEmployed' href='index.php?c=empleado&a=" . $value . "&idEmpleado=$idEmpleado'>$key</a><br>";
        }
       ?>
    </div>
</div>