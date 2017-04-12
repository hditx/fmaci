<h1 align="center">Llamada al cliente</h1>
<div class="center">
    <p class="letra" style="font-size: 30px">Turno <?=$temp."". $temp1?></p>
    <div style="align-content: right">
    <a class="myButton" href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=3&idEmpleado=<?=$idEmpleado?>">Atender</a>
    <a id="noPresente" href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=4&idEmpleado=<?=$idEmpleado?>">No se presento</a>
    <a id="espera" href="index.php?c=empleado&a=estadoTurno&id=<?$id?>&estado=3&idEmpleado=<?=$idEmpleado?>&espera=1">Poner en espera</a>
    <a id="llamarNuevamente" href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=2&idEmpleado=<?=$idEmpleado?>">LLamar nuevamente</a>
</div>
<table border="1" align="center">
    <tr>
        <th class="myTd1">Llamados</th>
        <th class="myTd1">Hora</th>
    </tr>
    <?php foreach ($listLlamado as $t) {?>
    <tr>
        <td class="myTd1"><?php echo $d; $d++;?></td>
        <td class="myTd1"><?= $t->getFechaHora()?></td>
    </tr>
    <?php }?>
</table>


</div>