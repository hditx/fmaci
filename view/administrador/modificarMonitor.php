<div class="container-fluid">
    <div class="card">
        <div class="card-header text-center">
            <h1>Multimedia</h1>
            <a href="index.php?c=administrador&a=cargarImagenNuevo" class="btn btn-lg btn-success text-light pull-right"><i class="fa fa-plus"></i> Nueva</a>
        </div>
        <div class="card-body">
            <form method="POST" action="index.php?c=administrador&a=saveMonitor">
                <a href="index.php?c=administrador&a=index" class="btn btn-lg btn-primary"><i class="fa fa-arrow-left"></i> Volver</a>
                <button type="submit" class="btn btn-lg btn-success pull-right"><i class="fa fa-floppy-o"></i> Guardar</button>
                <br/>
                <div class="form-group row">
                    <?php
                        $direccion = "/var/www/html/farmacia/view/video/";
                /*	$direccion = "/media/firefly/fire1/imagenes/";*/
                        if($dh = opendir($direccion)){
                            while(($archivo = readdir($dh)) !== false){
                                if($archivo != '..' && $archivo != '.') {?>
                                    <div class="col-md-2">
                                        <div class="card bg-light mb-3" style="max-width: 18rem;">
                                            <div class="card-header">
                                                <img src="<?="view/video/$archivo"?>" alt="" style="width: 15rem; height: 15rem;"><br/>
                                            </div>
                                            <div class="card-body">
                                                <input type="checkbox" name="archivo[]" value="<?=$archivo;?>" <?= Turno::comprobarArchivo($archivo, $video)?>>
                                                <b><?=$archivo;?></b>
                                            </div>
                                        </div>
                                    </div>
                    <?php } } }?>
                </div>
            </form>
        </div>
    </div>
</div>
