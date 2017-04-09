<h1>Turnos en espera</h1>
<div style="display: inline-block">
    <table border="5" style="float: left; min-width: 150px">
        <th class="myTd1">En estado</th>
        <?php foreach ($turnos as $t){?>
            <?php if($t[0]->getLetra() != NULL) { ?>
                <?php foreach ($t[1] as $c){?> 
                    <?php if($c->getAtendido() != 0 && $c->getAtendido() == 1){ ?>
                        <tr> 
                            <td align="left" class="myTd1">
                                 <a href="?c=empleado&a=estadoTurno&id=<?=$c->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                                 <?= Turno::getLetra($c->getIdCola()) . "" . $c->getPosicion()." "?>
                                <?= $c->getHora()?><br>
                                <?= Cola::getNombreColaObjeto($c->getIdCola())?>
                                <?= Turno::getHoraObjeto($c->getIdTurno()) ."MIN"?>
                                 </a>
                             </td>
                        </tr>
                    <?php }?>
                    <?php if($c->getAtendido() != 0 && $c->getAtendido() == 2){ ?>
                        <tr> 
                            <td align="left" class="estadoLlamando">
                                 <a href="?c=empleado&a=estadoTurno&id=<?=$c->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                                 <?= Turno::getLetra($c->getIdCola()) . "" . $c->getPosicion()." "?>
                                <?= $c->getHora()?><br>
                                <?= Cola::getNombreColaObjeto($c->getIdCola())?>
                                <?= Turno::getHoraObjeto($c->getIdTurno()) ."MIN"?>
                                 </a>
                             </td>
                        </tr>
                    <?php }?>
                    <?php if($c->getAtendido() != 0 && $c->getAtendido() == 3){ ?>
                        <tr> 
                            <td align="left" class="estadoAtendiendo">
                                 <a href="?c=empleado&a=estadoTurno&id=<?=$c->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                                 <?= Turno::getLetra($c->getIdCola()) . "" . $c->getPosicion()." "?>
                                <?= $c->getHora()?><br>
                                <?= Cola::getNombreColaObjeto($c->getIdCola())?>
                                <?= Turno::getHoraObjeto($c->getIdTurno()) ."MIN"?>
                                 </a>
                             </td>
                        </tr>
                    <?php }?>
                    <?php if($c->getAtendido() != 0 && $c->getAtendido() == 4){ ?>
                        <tr> 
                            <td align="left" class="estadoNoPresento">
                                 <a href="?c=empleado&a=estadoTurno&id=<?=$c->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                                 <?= Turno::getLetra($c->getIdCola()) . "" . $c->getPosicion()." "?>
                                <?= $c->getHora()?><br>
                                <?= Cola::getNombreColaObjeto($c->getIdCola())?>
                                <?= Turno::getHoraObjeto($c->getIdTurno()) ."MIN"?>
                                 </a>
                             </td>
                        </tr>
                    <?php }?>
                <?php }?>
            <?php } ?>
        <?php }?>
    </table>
</div>
<div style="float: right;">
    <img src="view/images/colores.jpg" width="390" height="100"><br>
    <a class="myButton" href="index.php?c=empleado&a=otrasColas&idEmpleado=<?=$idEmpleado?>">Otras Colas</a><br>
    <a class="myButton" href="index.php?c=empleado&a=listTurno&idEmpleado=<?=$idEmpleado?>">Asignada</a>
</div>
