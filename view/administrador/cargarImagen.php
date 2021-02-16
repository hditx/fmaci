<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h1>Registrar Archivo Multimedia</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="index.php?c=administrador&a=cargarImagen" class="" enctype="multipart/form-data">
                <a class="btn btn-lg btn-primary" href="index.php?c=administrador&a=modificarMonitor"><i class="fa fa-arrow-left"></i> Volver</a>
                <button type="submit" class="btn btn-lg btn-success pull-right"><i class="fa fa-plus"></i> Guardar</button>
                <div class="form-group row">
                    <label class="col-form-label-lg col-sm-4 col-md-4 col-form-label-lg offset-sm-4 offset-md-4">
                        Seleccione un archivo
                    </label>
                    <div class="col-md-9 col-sm-9 offset-sm-1 offset-md-1">
                        <input type="file" name="archivo" accept="image/*" class="form-control-file btn"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php if ($showError) { ?>
<script type="text/javascript">
    alert('Extension de archivo no valido.');
</script>
<?php } ?>
