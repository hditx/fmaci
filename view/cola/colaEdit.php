<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <?php if($tmp->getIdCola() == null){ ?>
            <h1 class="registrarEmpleado text-light">Crear Cola</h1>
            <?php } else{ ?>
            <h1 class="registrarEmpleado text-light">Modificar Cola</h1>
            <?php }?>
        </div>
    </div>
    
    <form method="POST" action="index.php?c=cola&a=save" class="bg-light">
            <?php if($tmp->getIdCola() != null){ ?>
            <input type="hidden" name="idCola" value="<?= $tmp->getIdCola() ?>">
            <?php }?><br>
            <div class="form-group row">
                <label class="col-sm-1 col-md-1 col-form-label offset-md-2 offset-sm-2 col-form-label-lg">Nombre</label>
                <div class="col-sm-7 col-md-7">
                    <input class="form-control col-form-label-lg" type="text" name="nombreCola" size="20" value="<?= $tmp->getNombreCola() ?>">
                </div>
            </div>
            <div class="form-group row">
				<label class="col-sm-5 col-md-5 col-form-label offset-md-2 offset-sm-2 col-form-label-lg">Cola madre
					<input type="radio" name="madre" value="1">Si
					<input type="radio" name="madre" value="0">No
				</label>
            </div>
            <div class="form-group row">
                <label class="col-form-label-lg col-sm-1 col-md-1 col-form-label offset-md-2 offset-sm-2 my-1">Hijo de:</label>
                <div class="col-md-7 col-sm-7 col-form-label-lg">
                    <select name="idPadre" class="custom-select my-1 mr-sm-2">
                        <option value = "-1">Ninguno</option>
                        <?php foreach ($padres as $padre){
                           echo " <option value=" . $padre->getIdCola() . " ".(($tmp->getHijoDe() == $padre->getIdCola())? 'selected' : '') ."> ".$padre->getNombreCola()."</option>"; 
                        }?>
                    </select>
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-form-label-lg col-sm-10 col-md-10 col-form-label-lg offset-md-2 offset-sm-2">Empleado/s</label>
                <div class="form-check col-md-3 col-sm-3 offset-sm-3 offset-md-3">
                    <label class="col-form-label-lg">
                        <input type="checkbox" name="idEmpleado" value="-1">Ninguno
                    </label>
                </div>
                    <?php foreach ($empleados as $empleado){
                        if($tmp->getIdCola() != null){
                            echo "<div class='form-check col-md-3 col-sm-3 offset-sm-3 offset-md-3'>
                            <label class='col-form-label-lg'>
                            <input type='checkbox' name='idEmpleado[]' value=".$empleado->getIdEmpleado()." ".(($asig[$empleado->getIdEmpleado()] == $empleado->getIdEmpleado()) ? 'checked' : '').">".$empleado->getNombre()."
                            </label>
                            </div>";
                        }else{
                            echo "<div class='form-check col-sm-3 col-md-3 offset-sm-3 offset-md-3'
                            <label class='col-form-label-lg'>
                            <input type='checkbox' name='idEmpleado[]' value=".$empleado->getIdEmpleado().">".$empleado->getNombre()."
                            </label>
                            </div>";
                        }
                    }?>
            </div>
            <div class="form-group row">
                <label class="col-sm-1 col-md-1 col-form-label offset-md-2 offset-sm-2 col-form-label-lg">
                    Siguiente
                </label>
                <div class="col-sm-7 col-md-7">
                    <input class="form-control col-form-label-lg" type="text" name="siguiente" size="20" value="<?= $tmp->getSiguiente() ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-1 col-md-1 col-form-label offset-sm-2 offset-md-2 col-form-label-lg">
                    Letra
                </label>
                <div class="col-sm-7 col-md-7">
                    <input class="form-control col-form-label-lg" type="text" name="letra" size="20" value="<?= $tmp->getLetra() ?>">
                </div>
            </div>
            <input class="btn btn-block btn-lg btn-success" type="submit" value="Guardar datos" name="B1">
            <a class="btn btn-block btn-danger btn-lg" href="index.php?c=cola&a=index">Canelar</a>
    </form>
</div>
