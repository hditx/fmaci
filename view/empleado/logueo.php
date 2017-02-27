<h1>Iniciar Sesion</h1>
<div style="text-align: center;">
<form method="POST" action="index.php?c=empleado&a=listTurno&idEmpleado=idEmpleado">
    <p>Empleado
        <select name="idEmpleado">
            <?php foreach ($empleados as $empleado){
                echo "<option value=".$empleado->getIdEmpleado().">".$empleado->getNombre()."</option>";
            }?>
        </select>
    <p><input class="myButton" type="submit" value="Go" name="B1"></p>
</form>
</div>

