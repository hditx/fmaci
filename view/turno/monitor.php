<h1>Turnos</h1>
<table border="2">
    <?php foreach ($turnos as $t){?>
        <td> <?php echo Turno::getNombre($t->getIdCola()); ?></td>
    <?php }?>
    <tr>    
        <?php foreach ($turnos as $t){?>
                <td><?php echo $t->getPosicion() . " " . Turno::getLetra($t->getIdCola()); ?></td>
        <?php }?> 
    </tr>
</table>