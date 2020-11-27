<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <?php if($tmp->getIdCola() == null){ ?>
            <h1>Registrar Cola</h1>
            <?php } else{ ?>
            <h1 >Modificar Cola</h1>
            <?php }?>
        </div>
        <div class="card-body">
            <form method="POST" action="index.php?c=cola&a=save">
                <a class="btn btn-primary btn-lg" href="index.php?c=cola&a=index"><i class="fa fa-arrow-left"></i> Volver</a>
                <button class="btn btn-lg btn-success pull-right" type="submit" name="B1"><i class="fa fa-plus"></i> Guardar</button>
                    <?php if($tmp->getIdCola() != null){ ?>
                    <input type="hidden" name="idCola" value="<?= $tmp->getIdCola() ?>">
                    <?php }?><br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nombre *</label>
                            <input class="form-control" type="text" name="nombreCola" size="20" value="<?= $tmp->getNombreCola() ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Cola Madre *</label>
                            <select name="madre" class="custom-select">
                                <option value="1">SI</option>
                                <option value="0">NO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Hereda</label>
                            <select name="idPadre" class="custom-select">
                                <option value = "-1">Ninguno</option>
                                <?php foreach ($padres as $padre){
                                   echo " <option value=" . $padre->getIdCola() . " ".(($tmp->getHijoDe() == $padre->getIdCola())? 'selected' : '') ."> ".$padre->getNombreCola()."</option>";
                                }?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Siguiente *</label>
                            <input class="form-control" type="text" name="siguiente" size="20" value="<?= $tmp->getSiguiente() ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form group col-md-6">
                            <label>Letra *</label>
                            <input class="form-control" type="text" name="letra" size="20" value="<?= $tmp->getLetra() ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label-lg col-sm-10 col-md-10">Empleados</label>
                        <div class="form-check col-md-3 col-sm-3">
                            <label class="col-form-label-lg">
                                <input type="checkbox" name="idEmpleado" value="-1">Ninguno
                            </label>
                        </div>
                            <?php foreach ($empleados as $empleado){
                                if($tmp->getIdCola() != null){
                                    echo "<div class='form-check col-md-3 col-sm-3'>
                                    <label class='col-form-label-lg'>
                                    <input type='checkbox' name='idEmpleado[]' value=".$empleado->getIdEmpleado()." ".(($asig[$empleado->getIdEmpleado()] == $empleado->getIdEmpleado()) ? 'checked' : '').">".$empleado->getNombre()."
                                    </label>
                                    </div>";
                                }else{
                                    echo "<div class='form-check col-md-3'
                                    <label class='col-form-label-lg'>
                                    <input type='checkbox' name='idEmpleado[]' value=".$empleado->getIdEmpleado().">".$empleado->getNombre()."
                                    </label>
                                    </div>";
                                }
                            }?>
                    </div>
            </form>
        </div>
    </div>
</div>
