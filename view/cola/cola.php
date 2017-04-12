<h1 align="center">Listado de colas</h1>
<div align="center">
    <a class="myButton" href="index.php?c=cola&a=crear">Crear cola</a>
    <table border="1">

        <th class="myTd3">Nombre cola</th>
        <th class="myTd3">Empleado/s</th>
        <th class="myTd3">Hijo de...</th>
        <th class="myTd3">Siguiente</th>
        <th class="myTd3">Letra</th>
        <th class="myTd3">Eliminar</th>
        <?php foreach($data as $c){ ?>
        <tr>
            <td class="myTd3"><a href="index.php?c=cola&a=modificar&id=<?php echo $c->getIdCola()?>"><?php echo $c->getNombreCola()?></a></td>
            <td class="myTd3"><?php $empleados = Cola::getEmpleadoAsignado($c->getIdCola());
                foreach ($empleados as $empleado){
                    echo $empleado." ";
                }?>
            </td>
            <td class="myTd3"><?php echo $c->getHijoDeObjeto()->getNombreCola()?></td>
            <td class="myTd3"><?php echo $c->getSiguiente()?></td>
            <td class="myTd3"><?php echo $c->getLetra()?></td>
            <td class="myTd3"><a href="index.php?c=cola&a=eliminar&id=<?php echo $c->getIdCola()?>">X</a></td>
        </tr>
        <?php } ?>

    </table> 
</div>