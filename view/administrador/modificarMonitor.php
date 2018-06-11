<div class="container">
    <div class="row">
        <div class="col-sm-10 col-md-10 offset-sm-1 offset-md-1">
            <h1 class="registrarEmpleadoMo text-light">Subir vídeo</h1>
        </div>
    </div>
    
    <div class="row">
        <form method="POST" action="index.php?c=administrador&a=saveMonitor" class="bg-light col-sm-10 col-md-10 offset-sm-1 offset-md-1">
           <div class="form-group row">
                <?php 
                    $direccion = "/var/www/html/farmacentro/view/video/";
            /*	$direccion = "/media/firefly/fire1/imagenes/";*/
                    if($dh = opendir($direccion)){
                        while(($archivo = readdir($dh)) !== false){?>
                                <div class="form-check col-md-5 col-sm-5 offset-sm-1 offset-md-1">
                                    <label class="col-form-label-lg">
                                        <input type="checkbox" name="archivo[]" value="<?=$archivo;?>" <?= Turno::comprobarArchivo($archivo, $video)?>>
                                        <b><?=$archivo;?></b>
                                    </label>
                                </div>
                <?php } }?>
            </div>
            <input type="submit" class="btn btn-lg btn-block btn-success" name="submit" value="Cargar">
            <a href="index.php?c=administrador&a=cargarImagenNuevo" class="btn btn-lg btn-block btn-warning text-light">Cargar nueva imagen</a>
            <a href="index.php?c=administrador&a=index" class="btn btn-lg btn-block btn-danger">Cancelar</a>
            <br>
        </form>    
    </div>
</div>
