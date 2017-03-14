<h1>Llamada al cliente</h1>
<div class="center">
<p>Turno <?= $temp." - ". $temp1?></p>
<table border="1">
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
<p>
    <a class="myButton" href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=4&idEmpleado=<?=$idEmpleado?>">No se presento</a>
    <a class="myButton" href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=3&idEmpleado=<?=$idEmpleado?>">Atender</a>
</p>
<a class="myButton" href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=2&idEmpleado=<?$idEmpleado?>">LLamar nuevamente</a>
</div>