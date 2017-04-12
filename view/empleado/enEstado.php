<h1>Turnos en espera</h1>
<div style="display: inline-block">
    <table border="5" style="float: left; min-width: 150px">
        <th class="myTd1">En estado</th>
        <?php foreach ($turnos as $t){?>
                <?php if($t->getAtendido() == 2){ ?>
                    <tr> 
                        <td align="left" class="estadoLlamando">
                             <a href="?c=empleado&a=estadoTurno&id=<?=$t->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                             <?= Turno::getLetra($t->getIdCola()) . "" . $t->getPosicion()." "?>
                            <?= $t->getHora()?><br>
                            <?= Cola::getNombreColaObjeto($t->getIdCola())?>
                            <?= Turno::getHoraObjeto($t->getIdTurno()) ."MIN"?>
                             </a>
                         </td>
                    </tr>
                <?php }?>
                <?php if($t->getAtendido() == 3){ ?>
                    <tr> 
                        <td align="left" class="estadoAtendiendo">
                             <a href="?c=empleado&a=estadoTurno&id=<?=$t->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                             <?= Turno::getLetra($t->getIdCola()) . "" . $t->getPosicion()." "?>
                            <?= $t->getHora()?><br>
                            <?= Cola::getNombreColaObjeto($t->getIdCola())?>
                            <?= Turno::getHoraObjeto($t->getIdTurno()) ."MIN"?>
                             </a>
                         </td>
                    </tr>
                <?php }?>
                <?php if($t->getAtendido() == 4){ ?>
                    <tr> 
                        <td align="left" class="estadoNoPresento">
                             <a href="?c=empleado&a=estadoTurno&id=<?=$t->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                             <?= Turno::getLetra($t->getIdCola()) . "" . $t->getPosicion()." "?>
                            <?= $t->getHora()?><br>
                            <?= Cola::getNombreColaObjeto($t->getIdCola())?>
                            <?= Turno::getHoraObjeto($t->getIdTurno()) ."MIN"?>
                             </a>
                         </td>
                    </tr>
                <?php }?>
        <?php }?>
    </table>
</div>
<div style="float: right;">
    <img src="view/images/colores.jpg" width="390" height="100"><br>
    <a class="myButton" href="index.php?c=empleado&a=otrasColas&idEmpleado=<?=$idEmpleado?>">Otras Colas</a><br>
    <a class="myButton" href="index.php?c=empleado&a=listTurno&idEmpleado=<?=$idEmpleado?>">Asignada</a>
</div>
