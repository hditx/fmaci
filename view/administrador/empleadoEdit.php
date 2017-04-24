<?php if ($tmp->getIdEmpleado() == null){?>
<h1>Registrar Empleado</h1>
<?php } else{ ?>
<h1>Modificar Empleado</h1>
<?php } ?>
<form method="POST" action="index.php?c=administrador&a=save">
    <?php if($tmp->getIdEmpleado() != null){ ?>
        <input type="hidden" name="idEmpleado" value="<?= $tmp->getIdEmpleado() ?>">
    <?php }?>
    <p class="formulario">Nombre <input class="inputText" type="text" name="nombre" size="20" value="<?= $tmp->getNombre()?>"></p>
    <p class="formulario">Apellido <input  class="inputText" type="text" name="apellido" size="20" value="<?= $tmp->getApellido()?>"></p>
    <p class="formulario">Cola/s asignada/s: 
        <br><input type="checkbox" name="idCola[]" value="-1"><label>Ninguno</label><br>
        <?php foreach ($colas as $cola){
            echo "<input type='checkbox' name='idCola[]' value=".$cola->getIdCola()."><label>".$cola->getNombreCola()."</label><br>";
        }?>
    </p>
    <p><input class="myButton" type="submit" value="Guardar datos" name="B1"></p>
</form>


