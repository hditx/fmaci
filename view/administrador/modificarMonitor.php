<div align="center">
<h1 class="registrarEmpleadoMo">Subir vídeo</h1>
<form method="POST" action="index.php?c=administrador&a=saveMonitor" >
    <div class="checkMo">
        
    <?php 
        $direccion = "/var/www/html/farmacentro/view/video/";
/*	$direccion = "/media/firefly/fire1/imagenes/";*/
        if($dh = opendir($direccion)){
            while(($archivo = readdir($dh)) !== false){?>
                <input type="checkbox" name="archivo[]" value="<?=$archivo;?>" <?= Turno::comprobarArchivo($archivo, $video)?>>
                <label><?=$archivo;?></label><br>
    <?php } }?>
                
    </div>
    <input type="submit" class="myButton" name="submit" value="Cargar">
    <a href="index.php?c=administrador&a=index" class="myButton">Cancelar</a>
</form>

</div>
