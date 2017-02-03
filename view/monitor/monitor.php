<h1>Turnos</h1>
<table border="2">
    <th>Cola</th>
    <th>Numero</th>
    <?php foreach ($turnos as $t){?>
        <tr>
            <td><?php echo Monitor::getNombre($t->getIdCola()); ?></td>
            <td><?php echo $t->getPosicion() . " " . Monitor::getLetra($t->getIdCola()); ?></td>
        </tr>
   <?php }?> 
</table>