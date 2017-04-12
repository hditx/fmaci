<h1>Turnos en espera</h1>
<div style="display: inline-block">
    
<table  style="float: left;" id="trans">
    <th class="myTd1" ><a href="?c=empleado&a=estadoTurno&id=<?=$first->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>" id="text">
            Asignado<img id="imagenPosicion"></a></th>
    <?php foreach ($turnos as $t){?>
            <tr>     
                <td border="0" align="left" class="myTd1">
                    <a href="?c=empleado&a=estadoTurno&id=<?=$t->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                        <?= Turno::getLetra($t->getIdCola()) . "" . $t->getPosicion()." "?>
                        <?= $t->getHora()?><br>
                        <?= Cola::getNombreColaObjeto($t->getIdCola())?>
                        <?= Turno::getHoraObjeto($t->getIdTurno()) ."MIN"?>
                    </a>
                </td>
            </tr>
    <?php }?>
</table>
</div>
<div style="float: right;">
    <img class="radiuss" src="view/images/colores.jpg" width="390" height="100"><br>
    <a class="myButton" href="index.php?c=empleado&a=otrasColas&idEmpleado=<?=$idEmpleado?>">Otras Colas</a><br>
    <a class="myButton" href="index.php?c=empleado&a=enEstado&idEmpleado=<?=$idEmpleado?>">En estado</a>
</div>

