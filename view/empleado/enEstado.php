<h1>Turnos en espera</h1>
<div style="display: inline-block">
<div style="float: left" id="trans">



    <div class="encabezado" id="text">
        <?= $title ?> 
    </div>
    <br>
      <div id="global">
        <div id="mensajes">
            <?php foreach ($turnos as $t){?>
            <div>
                <?php if($t->getAtendido() == 2){ ?>    
                    <a href="?c=empleado&a=estadoTurno&id=<?=$t->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                        <div  class="estadoLlamando" id="text2">
                            <?= Turno::getLetra($t->getIdCola()) . "" . $t->getPosicion()." "?>
                            <div class="estadoLlamandoRec" id="text2">
                                <?= $t->getHora()?><br>
                                <?= Cola::getNombreColaObjeto($t->getIdCola())?>
                                <?= Turno::getHoraObjeto($t->getIdTurno()) ."MIN"?>
                        </div>
                        </div>
                    </a>
                <?php }?>
                <?php if($t->getAtendido() == 3){ ?>
                    <a href="?c=empleado&a=estadoTurno&id=<?=$t->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                        <div class="estadoAtendiendo" id="text2">
                            <?= Turno::getLetra($t->getIdCola()) . "" . $t->getPosicion()." "?>
                            <div class="estadoAtendiendoRec" id="text2">
                            <?= $t->getHora()?><br>
                            <?= Cola::getNombreColaObjeto($t->getIdCola())?>
                            <?= Turno::getHoraObjeto($t->getIdTurno()) ."MIN"?>
                        </div>
                        </div>
                    </a>
                <?php }?>
                <?php if($t->getAtendido() == 4){ ?>
                    <a href="?c=empleado&a=estadoTurno&id=<?=$t->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                        <div class="estadoNoPresento" >
                            <?= Turno::getLetra($t->getIdCola()) . "" . $t->getPosicion()." "?>
                            <div class="estadoNoPresentoRec" id="text2">
                            <?= $t->getHora()?><br>
                            <?= Cola::getNombreColaObjeto($t->getIdCola())?>
                            <?= Turno::getHoraObjeto($t->getIdTurno()) ."MIN"?>
                        </div>
                        </div>
                    </a>
                <?php }?>
            </div>
            <?php }?>
        </div>
      </div>
</div>
<div style="float: right;">
    <img class="radiuss" src="view/images/colores.jpg" width="350" height="80"><br>
    <div class="ubiBoton">
        <a class="buttonEmployed" href="index.php?c=empleado&a=otrasColas&idEmpleado=<?=$idEmpleado?>">Otras Colas</a><br>
        <a class="buttonEmployed" href="index.php?c=empleado&a=listTurno&idEmpleado=<?=$idEmpleado?>">Asignada</a>
    </div>
</div>
