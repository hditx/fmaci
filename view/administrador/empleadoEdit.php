<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?php if ($tmp->getIdEmpleado() == null){?>
            <h1 class="registrarEmpleado text-light">Registrar Empleado</h1>
        <?php } else{ ?>
            <h1 class="registrarEmpleado text-light">Modificar Empleado</h1>
        <?php } ?>
        </div>
    </div>
    <form method="POST" action="index.php?c=administrador&a=save" class=" bg-light">
        <?php if($tmp->getIdEmpleado() != null){ ?>
            <input type="hidden" name="idEmpleado" value="<?= $tmp->getIdEmpleado() ?>">
        <?php }?><br>
        <div class="form-group row">
            <label class="col-sm-1 col-md-1 col-form-label offset-md-2 offset-sm-2 col-form-label-lg">Nombre</label>
            <div class="col-sm-7 col-md-7">
                <input class="form-control col-form-label-lg" type="text" name="nombre" size="20" value="<?= $tmp->getNombre()?>">
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-form-label-lg col-sm-1 col-md-1 col-form-label offset-md-2 offset-sm-2 text-dark">Apellido</label>
            <div class="col-sm-7 col-md-7">
                <input class="form-control col-form-label-lg" type="text" name="apellido" size="20" value="<?= $tmp->getApellido()?>">
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-form-label-lg col-sm-1 col-md-1 col-form-label offset-md-2 offset-sm-2">DNI</label>
            <div class="col-sm-7 col-md-7">
                <input class="form-control col-form-label-lg" type="text" name="dni" size="20" value="<?= $tmp->getDni() ?>">
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-form-label-lg col-sm-1 col-md-1 col-form-label offset-md-2 offset-sm-2 my-1">Perfil</label>
            <div class="col-md-7 col-sm-7 col-form-label-lg">
                <select name="perfil" class="custom-select my-1 mr-sm-2">
                    <option value="1" <?= ($tmp->getPerfil() == 1) ? 'selected' : ''?> >Administrador</option>
                    <option value="2" <?= ($tmp->getPerfil() == 2) ? 'selected' : ''?> >Empleado</option>
                    <option value="3" <?= ($tmp->getPerfil() == 3) ? 'selected' : ''?> >Cliente</option>
                    <option value="4" <?= ($tmp->getPerfil() == 4) ? 'selected' : ''?> >Monitor</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label-lg col-sm-10 col-md-10 col-form-label-lg offset-md-2 offset-sm-2">Cola/s a asignadar:</label>
            <div class="form-check col-md-3 col-sm-3 offset-sm-3 offset-md-3">
                <label class="col-form-label-lg">
                    <input type="checkbox" name="idCola[]" value="-1" >Ninguno
                </label>
            </div>
            <?php foreach ($colas as $cola){
                    if($tmp->getIdEmpleado() != null){
                        echo "<div class='form-check col-md-3 col-sm-3 offset-sm-3 offset-md-3'>
                        <label class='col-form-label-lg'>
                        <input type='checkbox' name='idCola[]' value=".$cola->getIdCola()." ".(($asig[$cola->getIdCola()] == $cola->getIdCola()) ? 'checked' : '').">".$cola->getNombreCola()."
                        </label>
                        </div>";
                    }else {
                        echo "<div class='form-check col-sm-3 col-md-3 offset-sm-3 offset-md-3'>
                        <label class='col-form-label-lg'>
                        <input type='checkbox' name='idCola[]' value=".$cola->getIdCola().">".$cola->getNombreCola()."
                        </label>
                        </div>";
                    }
             }?>
         </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <input class="btn btn-success bnt-lg btn-block myButton col-form-label-lg" type="submit" value="Guardar datos" name="B1">
            </div>
            <div class="col-sm-12 col-md-12">
                <a class="btn-danger btn btn-lg btn-block col-form-label-lg" href="index.php?c=administrador&a=abmEmpleado">Cancelar</a>
            </div>
        </div>
    </form>
</div>


