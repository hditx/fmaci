<h1>Actualizar</h1>
<table border="2">
    <?php for ($i = 0; $i < count($turnos); ++$i ){?>
    <tr><?php echo $t[$i]?></tr>
<!--    <a href="index.php?c=empleado&a=actualizarTurno&id=<?php// echo $t['idTurno']?>"><?php// echo Turno::getNombre($t['idCola']); ?></a>-->
    <?php }?>
    <tr>
<!--    <?php// foreach ($turnos as $t){?>
        <td><?php// echo $t['posicion'] . " " . Turno::getLetra($t['idCola']); ?></td>
        
    <?php// }?> -->
    </tr>
</table>
