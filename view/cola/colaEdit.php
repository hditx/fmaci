<div class="posicionAdmin">
<?php if($tmp->getIdCola() == null){ ?>
<h1 class="registrarEmpleado">Crear Cola</h1>
<?php } else{ ?>
<h1 class="registrarEmpleado">Modificar Cola</h1>
<?php }?>
<form method="POST" action="index.php?c=cola&a=save">
        <?php if($tmp->getIdCola() != null){ ?>
        <input type="hidden" name="idCola" value="<?= $tmp->getIdCola() ?>">
        <?php }?>
        <p class="formulario">Nombre<input class="inputText" type="text" name="nombreCola" size="20" value="<?= $tmp->getNombreCola() ?>"></p>
        <p class="formulario">Hijo de...
            <select name="idPadre">
                <option value = "-1">Ninguno</option>
                <?php foreach ($padres as $padre){
                   echo " <option value=" . $padre->getIdCola() . " ".(($tmp->getHijoDe() == $padre->getIdCola())? 'selected' : '') ."> ".$padre->getNombreCola()."</option>"; 
                }?>
            </select>
        </p>
        <p class="formulario">Empleado/s </p>
            
        <p class="check"><input type="checkbox" name="idEmpleado" value="-1"><label>Ninguno</label><br>
            <?php foreach ($empleados as $empleado){
                if($tmp->getIdCola() != null){
                    echo "<input type='checkbox' name='idEmpleado[]' value=".$empleado->getIdEmpleado()." ".(($asig[$empleado->getIdEmpleado()] == $empleado->getIdEmpleado()) ? 'checked' : '')."><label>".$empleado->getNombre()."</label><br>";
                }else{
                    echo "<input type='checkbox' name='idEmpleado[]' value=".$empleado->getIdEmpleado()."><label>".$empleado->getNombre()."</label><br>";
                }
            }?>
        </p>
        <p class="formulario">Siguiente <input class="inputText" type="text" name="siguiente" size="20" value="<?= $tmp->getSiguiente() ?>"></p>
        <p class="formulario">Letra <input class="inputText" type="text" name="letra" size="20" value="<?= $tmp->getLetra() ?>"></p>
        <p align="center"><input class="myButton" type="submit" value="Guardar datos" name="B1"></p>  
</form>
</div>