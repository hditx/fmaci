
<div class="container row">
    <div class="offset-sm-5 offset-md-5">
        <a class="btn btn-lg btn-success" href="index.php?c=administrador&a=crear">Registrar Empleado</a> 
    </div>
    <div class="col-sm-1 col-md-1">
        <a class="btn btn-lg btn-success" href="index.php">Menú principal</a>
    </div>
</div>

<div class="table-responsive-sm table-responsive-md">
    <table class="table table-bordered table-hover table-light">
        <tr class="table-dark">
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Id Empleado</th>
            <th>Colas asignadas</th>
            <th>Eliminar</th>
            <th>Imprimir</th>
        </tr>
        <?php foreach ($empleados as $empleado) { ?>
        <tr>
            <td><a class="employed" href="index.php?c=administrador&a=modificar&id=<?= $empleado->getIdEmpleado()?>"><?= $empleado->getNombre()?></a></td>
            <td><?= $empleado->getApellido()?></td>
            <td><?= $empleado->getIdEmpleado()?></td>
            <td><?php $colas = Empleado::getColasAsignadas($empleado->getIdEmpleado());
                    foreach ($colas as $c)
                        echo $c."<br>";
                    ?></td>
            <td><a class="employed" href="index.php?c=administrador&a=eliminar&id=<?= $empleado->getIdEmpleado()?>">X</a></td>
            <td><a class="employed" href="index.php?c=administrador&a=imprimir&id=<?= $empleado->getIdEmpleado()?>&nombre=<?= $empleado->getNombre()." ".$empleado->getApellido()?>">Imprimir Código</a></td>
        </tr>
        <?php }?>
    </table>
</div>
