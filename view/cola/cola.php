<div class="container row">
    <div class="offset-md-5 offset-sm-5">
        <a class="btn btn-lg btn-success" href="index.php?c=cola&a=crear">Crear cola</a>
    </div>
    <div class="col-sm-1 col-md-1">
        <a class="btn btn-lg btn-success" href="index.php">Menú principal</a>
    </div>
</div>
<div class="table-responsive-sm table-responsive-md">
    <table class="table table-bordered table-hover table-light">
        <tr class="table-dark">
            <th>Nombre cola</th>
            <th>Empleado/s</th>
            <th>Hijo de...</th>
            <th>Siguiente</th>
            <th>Letra</th>
            <th>Eliminar</th>
        </tr>
        <?php foreach($data as $c){ ?>
        <tr>
            <td><a class="employed" href="index.php?c=cola&a=modificar&id=<?php echo $c->getIdCola()?>"><?php echo $c->getNombreCola()?></a></td>
            <td><?php $empleados = Cola::getEmpleadoAsignado($c->getIdCola());
                foreach ($empleados as $empleado){
                    echo $empleado."<br>";
                }?>
            </td>
            <td><?php echo $c->getHijoDeObjeto()->getNombreCola()?></td>
            <td><?php echo $c->getSiguiente()?></td>
            <td><?php echo $c->getLetra()?></td>
            <td><a class="employed" href="index.php?c=cola&a=eliminar&id=<?php echo $c->getIdCola()?>">X</a></td>
        </tr>
        <?php } ?>
    </table> 
</div>