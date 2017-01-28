<h1>Listado de colas</h1>
<a href="index.php?c=cola&a=crear">Crear cola</a>
<table border="1">
    
    <th>Nombre cola</th>
    <th>Id empleado</th>
    <th>Jerarquia</th>
    <th>Eliminar</th>
    <?php foreach($data as $c){ ?>
    <tr>
        <td><a href="index.php?c=cola&a=modificar&id=<?php echo $c->getIdCola()?>"><?php echo $c->getNombreCola()?></a></td>
        <td><?php echo $c->getIdEmpleado()?></td>
        <td><?php echo $c->getJerarquia()?></td>
        <td><a href="index.php?c=cola&a=eliminar&id=<?php echo $c->getIdCola()?>">X</a></td>
    </tr>
    <?php } ?>

</table> 
