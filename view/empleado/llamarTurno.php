<h1>Llamada al cliente</h1>
<div class="center">
    <p class="letra">Turno <?=$temp."". $temp1?></p>
    <div style="align-content: right">
    <a class="myButton" href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=4&idEmpleado=<?=$idEmpleado?>">No se presento</a>
    <a class="myButton" href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=3&idEmpleado=<?=$idEmpleado?>">Atender</a>
    <a class="myButton" href="index.php?c=empleado&a=estadoTurno&id=<?$id?>&estado=3&idEmpleado=<?=$idEmpleado?>&espera=1">Poner en espera</a>
    <a class="myButton" href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=2&idEmpleado=<?=$idEmpleado?>">LLamar nuevamente</a>
</div>
<table border="1" style="align-content: left">
    <tr>
        <th>Llamados</th>
        <th>Hora</th>
    </tr>
    <?php foreach ($listLlamado as $t) {?>
    <tr>
        <td><?php echo $d; $d++;?></td>
        <td><?= $t->getFechaHora()?></td>
    </tr>
    <?php }?>
</table>


</div>