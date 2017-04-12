<?php if($tmp->getIdCola() == null){ ?>
<h1>Crear Cola</h1>
<?php } else{ ?>
<h1>Modificar Cola</h1>
<?php }?>
<form method="POST" action="index.php?c=cola&a=save">
        <?php if($tmp->getIdCola() != null){ ?>
        <input type="hidden" name="idCola" value="<?= $tmp->getIdCola() ?>">
        <?php }?>
        <p class="formulario">Nombre cola <input class="inputText" type="text" name="nombreCola" size="20" value="<?= $tmp->getNombreCola() ?>"></p>
        <p class="formulario">Hijo de...
            <select name="idPadre">
                <option value = "-1">Ninguno</option>
                <?php foreach ($padres as $padre){
                   echo " <option value=" . $padre->getIdCola() . "> ".$padre->getNombreCola()."</option>"; 
                }?>
            </select>
        </p>
        <p class="formulario">Empleado/s 
            <select multiple name="idEmpleado[]">
                <option value="-1">Ninguno</option>
                <?php foreach ($empleados as $empleado){
                    echo "<option value=".$empleado->getIdEmpleado().">".$empleado->getNombre()."</option>";
                }?>
            </select>
        </p>
        <p class="formulario">Siguiente <input class="inputText" type="text" name="siguiente" size="20" value="<?= $tmp->getSiguiente() ?>"></p>
        <p class="formulario">Letra <input class="inputText" type="text" name="letra" size="20" value="<?= $tmp->getLetra() ?>"></p>
        <p><input class="myButton" type="submit" value="Guardar datos" name="B1"></p>  
</form>
