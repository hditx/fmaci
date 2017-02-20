<?php if ($tmp->getIdEmpleado() == null){?>
<h1>Registrar Empleado</h1>
<?php } else{ ?>
<h1>Modificar Empleado</h1>
<?php } ?>
<form method="POST" action="index.php?c=administrador&a=save">
    <?php if($tmp->getIdEmpleado() != null){ ?>
        <input type="hidden" name="idEmpleado" value="<?= $tmp->getIdEmpleado() ?>">
    <?php }?>
    <p>Apellido y Nombre <input type="text" name="apellidoNombre" size="20" value="<?= $tmp->getNombreApellido()?>"></p>
    <p><input class="myButton" type="submit" value="Guardar datos" name="B1"></p>
</form>


