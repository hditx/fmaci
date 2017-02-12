<<<<<<< HEAD
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
=======
<h1>Turnos en espera</h1>
<div style="display: inline-block">
<?php foreach ($turnos as $t){?>
    <?php if($t[0]->getLetra() != NULL) { ?>
    <table border="2" style="float: right; min-width: 150px">
        <th><?= $t[0]->getNombreCola()?></th>
        <?php foreach ($t[1] as $c){?>
        <tr>
            <td align="center">
                <a href="?c=empleado&a=actualizarTurno&id=<?=$c->getIdTurno()?>">
                <?= Turno::getLetra($c->getIdCola()) . "-" . $c->getPosicion() ?>
                </a>
            </td>
        </tr>
        <?php }?>
    </table>
    <?php } ?>
<?php }?>
</div>
>>>>>>> errores
