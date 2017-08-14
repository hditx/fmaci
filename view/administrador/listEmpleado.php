<br><div align="center"><a class="buttonRegEmp" href="index.php?c=administrador&a=crear">Registrar Empleado</a> <a class="buttonRegEmp" href="index.php">Menú principal</a></div><br>
<table border="1" align="center">
    <th class="myTd3">Nombre</th>
    <th class="myTd3">Apellido</th>
    <th class="myTd3">Id Empleado</th>
    <th class="myTd3">Colas asignadas</th>
    <th class="myTd3">Eliminar</th>
    <th class="myTd3">Imprimir</th>
    <?php foreach ($empleados as $empleado) { ?>
    <tr>
        <td class="myTd3"><a class="employed" href="index.php?c=administrador&a=modificar&id=<?= $empleado->getIdEmpleado()?>"><?= $empleado->getNombre()?></a></td>
        <td class="myTd3"><?= $empleado->getApellido()?></td>
        <td class="myTd3"><?= $empleado->getIdEmpleado()?></td>
        <td class="myTd3"><?php $colas = Empleado::getColasAsignadas($empleado->getIdEmpleado());
                foreach ($colas as $c)
                    echo $c."<br>";
                ?></td>
        <td class="myTd3"><a class="employed" href="index.php?c=administrador&a=eliminar&id=<?= $empleado->getIdEmpleado()?>">X</a></td>
        <td class="myTd3"><a class="employed" href="index.php?c=administrador&a=imprimir&id=<?= $empleado->getIdEmpleado()?>&nombre=<?= $empleado->getNombre()." ".$empleado->getApellido()?>">Imprimir Código</a></td>
    </tr>
    <?php }?>
</table>

