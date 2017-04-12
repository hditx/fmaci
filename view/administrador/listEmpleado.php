<h1>Lista de empleados</h1>
<a class="myButton" href="index.php?c=administrador&a=crear">Registrar Empleado</a>
<table border="1" align="center">
    <th class="myTd3">Nombre</th>
    <th class="myTd3">Apellido</th>
    <th class="myTd3">Id Empleado</th>
    <th class="myTd3">Colas asignadas</th>
    <th class="myTd3">Eliminar</th>
    <?php foreach ($empleados as $empleado) { ?>
    <tr>
        <td class="myTd3"><a href="index.php?c=administrador&a=modificar&id=<?= $empleado->getIdEmpleado()?>"><?= $empleado->getNombre()?></a></td>
        <td class="myTd3"><?= $empleado->getApellido()?></td>
        <td class="myTd3"><?= $empleado->getIdEmpleado()?></td>
        <td class="myTd3"><?php $colas = Empleado::getColasAsignadas($empleado->getIdEmpleado());
                foreach ($colas as $c)
                    echo $c." ";
                ?></td>
        <td class="myTd3"><a href="index.php?c=administrador&a=eliminar&id=<?= $empleado->getIdEmpleado()?>">X</a></td>
    </tr>
    <?php }?>
</table>

