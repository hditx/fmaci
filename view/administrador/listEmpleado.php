<div class="container-fluid">
    <div class="card">
        <div class="card-head text-center">
            <h1>Listado de Usuarios</h1>
        </div>
        <div class="card-body">
            <a class="btn btn-lg btn-primary" href="index.php"><i class="fa fa-arrow-left"></i> Volver</a>
            <a class="btn btn-lg btn-success pull-right" href="index.php?c=administrador&a=crear"><i class="fa fa-plus"></i> Nuevo</a>
            <table class="table table-bordered table-hover table-light">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Perfil</th>
                        <th>Colas Asignadas</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <?php foreach ($empleados as $empleado) { ?>
                <tbody>
                    <tr>
                        <td><?= $empleado->getIdEmpleado()?></td>
                        <td><?= $empleado->getNombre()?></td>
                        <td><?= $empleado->getApellido()?></td>
                        <td><?= $empleado->getPerfil()?></td>
                        <td><?php $colas = Empleado::getColasAsignadas($empleado->getIdEmpleado());
                                foreach ($colas as $c)
                                    echo $c."<br>";
                                ?></td>
                        <td>
                            <a class="employed" href="index.php?c=administrador&a=eliminar&id=<?= $empleado->getIdEmpleado()?>">
                                <i class="fa fa-trash"></i>
                            </a>
                            <a class="employed" href="index.php?c=administrador&a=modificar&id=<?= $empleado->getIdEmpleado()?>">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a class="employed" href="index.php?c=administrador&a=imprimir&id=<?= $empleado->getIdEmpleado()?>&nombre=<?= $empleado->getNombre()." ".$empleado->getApellido()?>">
                                <i class="fa fa-print"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
                <?php }?>
            </table>
        </div>
    </div>
</div>