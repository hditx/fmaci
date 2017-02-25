<h1>Lista de empleados</h1>
<a class="myButton" href="index.php?c=administrador&a=crear">Registrar Empleado</a>
<table border="1">
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Id Empleado</th>
    <th>Eliminar</th>
    <?php foreach ($empleados as $empleado) { ?>
    <tr>
        <td><a href="index.php?c=administrador&a=modificar&id=<?= $empleado->getIdEmpleado()?>"><?= $empleado->getNombre()?></a></td>
        <td><?= $empleado->getApellido()?></td>
        <td><?= $empleado->getIdEmpleado()?></td>
        <td><a href="index.php?c=administrador&a=eliminar&id=<?= $empleado->getIdEmpleado()?>">X</a></td>
    </tr>
    <?php }?>
</table>

