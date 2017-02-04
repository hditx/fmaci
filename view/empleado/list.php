<h1>Actualizar</h1>
<table border="2">
    <?php foreach ($turnos as $t){?>
    <a href="index.php?c=empleado&a=actualizarTurno&id=<?php $t->getIdTurno()?>"><?php echo Turno::getNombre($t->getIdCola()); ?></a>
    <?php }?>
    <tr>
    <?php foreach ($turnos as $t){?>
        <td><?php echo $t->getPosicion() . " " . Turno::getLetra($t->getIdCola()); ?></td>
        <td><?php echo $t->getIdTurno(). "hola"?></td>
    <?php }?> 
    </tr>
</table>
