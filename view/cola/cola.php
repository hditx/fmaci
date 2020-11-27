<br/>
<div class="container-fluid">
    <div class="card">

        <div class="card-header text-center">
            <h1>Listado de Colas de Atención</h1>
        </div>

        <div class="card-body">
            <a class="btn btn-lg btn-primary" href="index.php"><i class="fa fa-arrow-left"></i> Volver</a>
            <a class="pull-right btn btn-lg btn-success" href="index.php?c=cola&a=crear"><i class="fa fa-plus"></i> Nueva</a>
            <table class="table table-bordered table-hover table-light">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Empleado</th>
                        <th scope="col">Hijo de...</th>
                        <th scope="col">Siguiente</th>
                        <th scope="col">Letra</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <?php foreach($data as $c){ ?>
                <tr>
                    <td scope="row"> <?= $c->getIdCola() ?></td>
                    <td><?php echo $c->getNombreCola()?></td>
                    <td><?php $empleados = Cola::getEmpleadoAsignado($c->getIdCola());
                        foreach ($empleados as $empleado){
                            echo $empleado."<br>";
                        }?>
                    </td>
                    <td><?php echo $c->getHijoDeObjeto()->getNombreCola()?></td>
                    <td><?php echo $c->getSiguiente()?></td>
                    <td><?php echo $c->getLetra()?></td>
                    <td>
                        <a class="employed" href="index.php?c=cola&a=eliminar&id=<?php echo $c->getIdCola()?>">
                            <i class="fa fa-trash"></i>
                        </a>
                        <a class="employed" href="index.php?c=cola&a=modificar&id=<?php echo $c->getIdCola()?>">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>

</div>