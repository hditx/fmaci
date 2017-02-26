<h1>Turnos en espera</h1>
<div style="display: inline-block">
<?php foreach ($turnos as $t){?>
    <?php if($t[0]->getLetra() != NULL) { ?>
    <table border="2" style="float: right; min-width: 150px">
        <th><?= $t[0]->getNombreCola()?></th>
        <?php foreach ($t[1] as $c){?>
        <tr>
            <td align="center">
                <a href="?c=empleado&a=estadoTurno&id=<?=$c->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
                <?= Turno::getLetra($c->getIdCola()) . "-" . $c->getPosicion() ?>
                </a>
            </td>
        </tr>
        <?php }?>
    </table>
    <?php } ?>
<?php }?>
</div>
