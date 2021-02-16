<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <?php if ($perfil->getPerfilId() == null) {
                echo "<h1>Registrar Perfil</h1>";
            } else{
                echo "<h1 >Modificar Perfil</h1>";
            } ?>
        </div>
        <div class="card-body">
            <form method="POST" action="index.php?c=administrador&a=savePerfil">
                <a class="btn-primary btn btn-lg" href="index.php?c=administrador&a=abmPerfil"><i class="fa fa-arrow-left"></i> Volver</a>
                <button class="btn-success btn btn-lg pull-right" type="submit"><i class="fa fa-plus"></i> Guardar</button>
                <br/>
                <?php if($perfil->getPerfilId() != null){ ?>
                    <input type="hidden" name="perfilId" value="<?= $perfil->getPerfilId() ?>">
                <?php }?><br>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Nombre *</label>
                        <input class="form-control" type="text" name="nombre" size="20" value="<?= $perfil->getNombre()?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Descripción </label>
                        <input class="form-control" type="text" name="descripcion" size="20" value="<?= $perfil->getDescripcion()?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Acceso *</label>
                        <select name="acceso" class="custom-select my-1 mr-sm-2">
                            <option value="1" <?= ($perfil->getAcceso() == 1) ? 'selected' : ''?> >Administrador</option>
                            <option value="2" <?= ($perfil->getAcceso() == 2) ? 'selected' : ''?> >Empleado</option>
                            <option value="3" <?= ($perfil->getAcceso() == 3) ? 'selected' : ''?> >Cliente</option>
                            <option value="4" <?= ($perfil->getAcceso() == 4) ? 'selected' : ''?> >Monitor</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


