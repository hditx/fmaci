<div class="container">
    <div class="card">
        <div class="card-header text-center">
        <?php if ($tmp->getIdEmpleado() == null){?>
            <h1>Registrar Usuario</h1>
        <?php } else{ ?>
            <h1 >Modificar Usuario</h1>
        <?php } ?>
        </div>
        <div class="card-body">
            <form method="POST" action="index.php?c=administrador&a=save">
                <a class="btn-primary btn btn-lg" href="index.php?c=administrador&a=abmEmpleado"><i class="fa fa-arrow-left"></i> Volver</a>
                <button class="btn-success btn btn-lg pull-right" type="submit"><i class="fa fa-plus"></i> Guardar</button>

                <?php if($tmp->getIdEmpleado() != null){ ?>
                    <input type="hidden" name="idEmpleado" value="<?= $tmp->getIdEmpleado() ?>">
                <?php }?><br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nombre *</label>
                        <input class="form-control" type="text" name="nombre" size="20" value="<?= $tmp->getNombre()?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Apellido</label>
                        <input class="form-control" type="text" name="apellido" size="20" value="<?= $tmp->getApellido()?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>DNI *</label>
                        <input class="form-control" type="text" name="dni" size="20" value="<?= $tmp->getDni() ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Perfil *</label>
                        <select name="perfil" class="custom-select my-1 mr-sm-2">
                            <?php foreach ($perfiles as $perfil) {
                                $select =  $tmp->getPerfil() == $perfil->getPerfilId() ?  'selected' : '';
                                echo "<option value='".$perfil->getPerfilId()."'
                                            ". $select ." >".$perfil->getNombre()."</option>";
                            } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label-lg col-sm-10 col-md-10">Colas Asignadas</label>
                    <div class="form-check col-md-3">
                        <label class="col-form-label-lg">
                            <input type="checkbox" name="idCola[]" value="-1" >Ninguna
                        </label>
                    </div>
                    <?php foreach ($colas as $cola){
                            if($tmp->getIdEmpleado() != null){
                                echo "<div class='form-check col-md-3'>
                                <label class='col-form-label-lg'>
                                <input type='checkbox' name='idCola[]' value=".$cola->getIdCola()." ".(($asig[$cola->getIdCola()] == $cola->getIdCola()) ? 'checked' : '').">".$cola->getNombreCola()."
                                </label>
                                </div>";
                            }else {
                                echo "<div class='form-check col-md-3'>
                                <label class='col-form-label-lg'>
                                <input type='checkbox' name='idCola[]' value=".$cola->getIdCola().">".$cola->getNombreCola()."
                                </label>
                                </div>";
                            }
                     }?>
                 </div>
            </form>
        </div>
    </div>
</div>


