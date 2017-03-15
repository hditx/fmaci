<h1>Turnos</h1>
<table border="2">
    <th>Numeros</th>
    <?php foreach ($turnos as $t){?>
    <tr>    
        <td><?php echo $t->getPosicion() . " " . Turno::getLetra($t->getIdCola()) ." ". Turno::getNombre($t->getIdCola())."<br>". Empleado::getNombreObjeto(Cola::getIdEmpleadoObjeto($t->getIdCola()))?></td>
    </tr>
    <?php }?> 
</table>