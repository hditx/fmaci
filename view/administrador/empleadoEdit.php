<?php if ($tmp->getIdEmpleado() == null){?>
<h1>Registrar Empleado</h1>
<?php } else{ ?>
<h1>Modificar Empleado</h1>
<?php } ?>
<form method="POST" action="index.php?c=administrador&a=save">
    <?php if($tmp->getIdEmpleado() != null){ ?>
        <input type="hidden" name="idEmpleado" value="<?= $tmp->getIdEmpleado() ?>">
    <?php }?>
    <p>Nombre <input type="text" name="nombre" size="20" value="<?= $tmp->getNombre()?>"></p>
    <p>Apellido <input type="text" name="apellido" size="20" value="<?= $tmp->getApellido()?>"></p>
    <p>Cola asignada: 
        <select multiple name="idCola[]" size="4">
            <option value="-1">Ninguno</option>
            <?php foreach ($colas as $cola){
                echo "<option value=".$cola->getIdCola().">".$cola->getNombreCola()."</option>";
            }?>
        </select>
    </p>
    <p><input class="myButton" type="submit" value="Guardar datos" name="B1"></p>
</form>


