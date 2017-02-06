<h1>Actualizar</h1>
<table border="2">
    <?php foreach ($turnos as $t){?>
    <a href="index.php?c=empleado&a=actualizarTurno&id=<?php echo $t->getIdTurno()?>"><?php echo Turno::getNombre($t->getIdCola()); ?></a>
    <?php }?>
    <tr>
    <?php foreach ($turnos as $t){?>
        <td><?php echo $t->getPosicion() . " " . Turno::getLetra($t->getIdCola()); ?></td>
        
    <?php }?> 
    </tr>
</table>
