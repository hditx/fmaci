<?php if($tmp->getIdCola() == null){ ?>
<h1>Crear Cola</h1>
<?php } else{ ?>
<h1>Modificar Cola</h1>
<?php }?>
<form method="POST" action="index.php?c=cola&a=save">
        <?php if($tmp->getIdCola() != null){ ?>
        <input type="hidden" name="idCola" value="<?= $tmp->getIdCola() ?>">
        <?php }?>
        <p>Nombre cola <input type="text" name="nombreCola" size="20" value="<?= $tmp->getNombreCola() ?>"></p>
        <p>Hijo de...
            <select name="idPadre">
                <option value = "-1">Ninguno</option>
                <?php foreach ($padres as $padre){
                   echo " <option value=" . $padre->getIdCola() . "> ".$padre->getNombreCola()."</option>"; 
                }?>
            </select>
        <p>Id Empleado <input type="text" name="idEmpleado" size="20" value="<?= $tmp->getIdEmpleado() ?>"></p>
        <p><input type="submit" value="Guardar datos" name="B1"></p>  
</form>
