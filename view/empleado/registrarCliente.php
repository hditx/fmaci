<h1>Registrar Cliente</h1>
<form method="POST" action="index.php?c=empleado&a=saveCliente">
    <input type="hidden" name="id" value="<?= $id?>">
    <input type="hidden" name="estado" value="<?= $estado?>">
    <input type="hidden" name="idEmpleado" value="<?= $idEmpleado?>">
    <p>Nombre <input type="text" name="nombre" size="20"></p>
    <p>Apellido <input type="text" name="apellido" size="20"></p>
    <p><input class="myButton" type="submit" value="Guardar datos" name="B1"></p>
</form>