<div align="center">
<h1 class="registrarEmpleado">Subir vídeo</h1>
<form method="POST" action="index.php?c=administrador&a=saveMonitor" >
    <div class="check">
        
    <?php 
        $direccion = "/var/www/html/farmacentro/view/video/";
        if($dh = opendir($direccion)){
            while(($archivo = readdir($dh)) !== false){?>
                <input type="radio" name="archivo" value="<?=$archivo;?>"<?= (strcmp($video, $archivo) == 0)? "checked" : ''?>>
                <label><?=$archivo;?></label><br>
    <?php } }?>
                
    </div>
    <input type="submit" class="myButton" name="submit" value="Cargar">
    <a href="index.php?c=administrador&a=index" class="myButton">Cancelar</a>
</form>

</div>
