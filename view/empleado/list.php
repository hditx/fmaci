<h1>Turnos en espera</h1>
<div style="display: inline-block">
    
<table  style="float: left;" id="trans">
<th><a href="?c=empleado&a=estadoTurno&id=<?=$first[1]->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>" style="float: right; min-width: 150px">
        Asignado<img src="view/images/siguiente.png" width="20" height="20" style="float: right"></a></th>
    <?php foreach ($turnos as $t){?>
        <?php if($t[0]->getLetra() != NULL) { ?>
            <?php foreach ($t[1] as $c){?> 
                <?php if($t[0]->getIdEmpleado() == $idEmpleado && $c->getAtendido() != 4){ ?>
                    <tr>     
                        <td border="0" align="left" class="myTd1">
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
    <img class="radiuss" src="view/images/colores.jpg" width="390" height="100"><br>
    <a class="myButton" href="index.php?c=empleado&a=otrasColas&idEmpleado=<?=$idEmpleado?>">Otras Colas</a><br>
    <a class="myButton" href="index.php?c=empleado&a=enEstado&idEmpleado=<?=$idEmpleado?>">En estado</a>
</div>

