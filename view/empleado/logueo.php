<br><h1 align="center">Iniciar Sesion</h1>
<div align="center">
<form method="POST" action="index.php?c=empleado&a=listTurno&idEmpleado=idEmpleado">
    <p class="formulario">Empleado
        <select name="idEmpleado">
            <?php foreach ($empleados as $empleado){
                echo "<option value=".$empleado->getIdEmpleado().">".$empleado->getNombre()."</option>";
            }?>
        </select>
    <p><input class="myButton" type="submit" value="Iniciar" name="B1"></p>
</form>
</div>

