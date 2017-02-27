<h1>Turnos en espera</h1>
<div style="display: inline-block">
    <table border="2" style="float: left; min-width: 150px" >
        <th>Asignada</th>
        <?php foreach ($turnos as $t){?>
            <?php if($t[0]->getLetra() != NULL) { ?>
                <?php foreach ($t[1] as $c){?> 
                    <?php if($t[0]->getIdEmpleado() == $idEmpleado && $c->getAtendido() != 4){ ?>
                       <tr>       
                           <td align="center">
                            <a href="?c=empleado&a=estadoTurno&id=<?=$c->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                                <?= Turno::getLetra($c->getIdCola()) . "-" . $c->getPosicion()?>
                            </a><br>
                            <?=$c->getHora()?>
                            </td>
                        </tr>
                    <?php }?>
                <?php }?>
            <?php } ?>
        <?php }?>
    </table>
    <table border="2" style="float: left; min-width: 150px">
        <th>Otras</th>
        <?php foreach ($turnos as $t){?>
            <?php if($t[0]->getLetra() != NULL) { ?>
                <?php foreach ($t[1] as $c){?> 
                    <?php if($t[0]->getIdEmpleado() != $idEmpleado && $c->getAtendido() != 4){ ?>
                       <tr>       
                           <td align="center">
                            <a href="?c=empleado&a=estadoTurno&id=<?=$c->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                                <?= Turno::getLetra($c->getIdCola()) . "-" . $c->getPosicion()?>
                            </a><br>
                            <?=$c->getHora()?>
                            </td>
                            
                        </tr>
                    <?php }?>
                <?php }?>
            <?php } ?>
        <?php }?>
    </table>
    <table border="2" style="float: right; min-width: 150px">
        <th>Menor prioridad</th>
        <?php foreach ($turnos as $t){?>
            <?php if($t[0]->getLetra() != NULL) { ?>
                <?php foreach ($t[1] as $c){?> 
                    <?php if($c->getAtendido() == 4){ ?>
                       <tr>       
                           <td align="center">
                            <a href="?c=empleado&a=estadoTurno&id=<?=$c->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                                <?= Turno::getLetra($c->getIdCola()) . "-" . $c->getPosicion()?>
                            </a><br>
                            <?=$c->getHora()?>
                            </td>
                        </tr>
                    <?php }?>
                <?php }?>
            <?php } ?>
        <?php }?>
    </table>
</div>

