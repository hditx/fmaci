<h1>Llamada al cliente</h1>
<div class="center">
<p>Turno <?= $temp." - ". $temp1?></p>
<p>Primer llamado</p>
<p>Segundo llamado</p>
<p>
    <a class="myButton" href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=4&idEmpleado=<?=$idEmpleado?>">No se presento</a>
    <a class="myButton" href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=3&idEmpleado=<?=$idEmpleado?>">Atender</a>
</p>
</div>