<div class="container">
    <div class="row">
        <h1 class="registrarImg text-light col-sm-8 col-md-8 offset-sm-2 offset-md-2">Cargar nueva imagen</h1>
    </div>
    <form method="POST" action="index.php?c=administrador&a=cargarImagen" class="bg-light col-sm-8 col-md-8 offset-sm-2 offset-md-2" enctype="multipart/form-data">
        <div class="form-group row">
            <label class="col-form-label-lg col-sm-4 col-md-4 col-form-label-lg offset-sm-4 offset-md-4">
                Ingrese nueva imagen 
            </label>
            <div class="col-md-9 col-sm-9 offset-sm-1 offset-md-1">
                <input type="file" name="archivo" accept="image/*" class="form-control-file btn"/>
            </div>
        </div>
        <div class="form-group col-sm-12 col-md-12">
            <input type="submit" name="submit" value="Cargar" class="btn btn-lg btn-success btn-block">
            <a class="btn btn-lg btn-block btn-danger" href="index.php?c=administrador&a=modificarMonitor">Cancelar</a>
        </div>
        <br>
    </form>
    
</div>
