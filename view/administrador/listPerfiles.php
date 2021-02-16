<div class="container-fluid">
    <div class="card">
        <div class="card-head text-center">
            <h1>Listado de Perfiles</h1>
        </div>
        <div class="card-body">
            <a class="btn btn-lg btn-primary" href="index.php"><i class="fa fa-arrow-left"></i> Volver</a>
            <a class="btn btn-lg btn-success pull-right" href="index.php?c=administrador&a=crearPerfil"><i class="fa fa-plus"></i> Nuevo</a>
            <table class="table table-bordered table-hover table-light">
                <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Acceso</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <?php foreach ($perfiles as $perfil) { ?>
                    <tbody>
                    <tr>
                        <td><?= $perfil->getPerfilId()?></td>
                        <td><?= $perfil->getNombre()?></td>
                        <td><?= $perfil->getDescripcion()?></td>
                        <?php
                            switch ($perfil->getAcceso()) {
                                case 1:
                                    echo "<td>Acceso de Administrador</td>";
                                    break;
                                case 2:
                                    echo "<td>Acceso de Empleado</td>";
                                    break;
                                case 3:
                                    echo "<td>Acceso de Cliente</td>";
                                    break;
                                case 4:
                                    echo "<td>Acceso de Monitor</td>";
                                    break;
                                default:
                                    echo "<td>Sin acceso</td>";
                            }
                        ?>
                        <td>
                            <a class="employed" href="index.php?c=administrador&a=eliminarPerfil&id=<?= $perfil->getPerfilId()?>">
                                <i class="fa fa-trash"></i>
                            </a>
                            <a class="employed" href="index.php?c=administrador&a=modificarPerfil&id=<?= $perfil->getPerfilId()?>">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                <?php }?>
            </table>
        </div>
    </div>
</div>