<h1>Turnos en espera</h1>
<div style="display: inline-block">
    <table border="2">
        <th class="myTd1"><a href="?c=empleado&a=estadoTurno&id=<?=$first[1]->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>" id="text">Otros</a></th>
        <?php foreach ($turnos as $t){?>
            <tr> 
                <td align="left" class="myTd1">
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
    <img src="view/images/colores.jpg" width="390" height="100"><br>
    <a class="myButton" href="index.php?c=empleado&a=enEstado&idEmpleado=<?=$idEmpleado?>">En estado</a><br>
    <a class="myButton" href="index.php?c=empleado&a=listTurno&idEmpleado=<?=$idEmpleado?>">Asignada</a>
</div>