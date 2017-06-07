<div class="posicionAdmin">
<?php if ($tmp->getIdEmpleado() == null){?>
    <h1 class="registrarEmpleado">Registrar Empleado</h1>
<?php } else{ ?>
<h1 class="registrarEmpleado">Modificar Empleado</h1>
<?php } ?>

    <form method="POST" action="index.php?c=administrador&a=save">
        <?php if($tmp->getIdEmpleado() != null){ ?>
            <input type="hidden" name="idEmpleado" value="<?= $tmp->getIdEmpleado() ?>">
        <?php }?>
        <p class="formulario">Nombre <input class="inputText" type="text" name="nombre" size="20" value="<?= $tmp->getNombre()?>"></p>
        <p class="formulario">Apellido <input  class="inputText" type="text" name="apellido" size="20" value="<?= $tmp->getApellido()?>"></p>
        <p class="formulario">Cola/s asignada/s: </p>
        <p class="check">
        <input type="checkbox" name="idCola[]" value="-1"><label>Ninguno</label><br>
        <?php foreach ($colas as $cola){
                if($tmp->getIdEmpleado() != null){
                    echo "<input type='checkbox' name='idCola[]' value=".$cola->getIdCola()." ".(($asig[$cola->getIdCola()] == $cola->getIdCola()) ? 'checked' : '')."><label>".$cola->getNombreCola()."</label><br>";
                }else {
                    echo "<input type='checkbox' name='idCola[]' value=".$cola->getIdCola()."><label>".$cola->getNombreCola()."</label><br>";
                }
         }?>
        </p>
        <p align="center"><input class="myButton" type="submit" value="Guardar datos" name="B1"></p>
    </form>
</div>


