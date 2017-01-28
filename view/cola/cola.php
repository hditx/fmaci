<h1>Listado de colas</h1>
<a href="index.php?c=cola&a=crear">Crear cola</a>
<table border="1">
    
    <th>Nombre cola</th>
    <th>Tipo de atencion</th>
    <th>Tipo de cola</th>
    <th>Tipo obra social</th>
    <th>Eliminar</th>
    <?php foreach($data as $c){ ?>
    <tr>
        <td><a href="index.php?c=cola&a=modificar&id=<?php echo $c->getIdCola()?>"><?php echo $c->getNombreCola()?></a></td>
        <td><?php echo $c->getTipoAtencionCliente()?></td>
        <td><?php echo $c->getTipoCola()?></td>
        <td><?php echo $c->getTipoObraSocial()?></td>
        <td><a href="index.php?c=cola&a=eliminar&id=<?php echo $c->getIdCola()?>">X</a></td>
            
    </tr>
    <?php } ?>

</table> 
