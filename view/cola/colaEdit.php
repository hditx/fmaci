<?php if($tmp->getIdCola() == null){ ?>
<h1>Crear Cola</h1>
<?php } else{ ?>
<h1>Modificar Cola</h1>
<?php }?>
<form method="POST" action="index.php?c=cola&a=save">
        <?php if($tmp->getIdCola() != null){ ?>
        <input type="hidden" name="idCola" value="<?= $tmp->getIdCola() ?>">
        <?php }?>
        <p>Nombre cola <input type="text" name="nombreCola" size="20" value="<?= $tmp->getNombreCola() ?>"></p>
        <p>Tipo Atencion <input type="text" name="tipoAtencion" size="20" value="<?= $tmp->getTipoAtencionCliente() ?>"></p>
        <p>Tipo de cola <input type="text" name="tipoCola" size="20" value="<?= $tmp->getTipoCola() ?>"></p>
        <p>Tipo de obra social <input type="text" name="tipoObraSocial" size="20" value="<?= $tmp->getTipoObraSocial() ?>"></p>
        <p><input type="submit" value="Guardar datos" name="B1"></p>  
</form>
