<div class="doscolumnas">
    <p>
        <video width="440" height="320" controls>
        <source src="Botear usb.mp4" type="video/mp4">
        </video>
    </p>
    <p class="modif" id="izquierda">
    <?php foreach ($turnos as $t) {
        if($t->getAtendido() == 2){
            echo $t->getPosicion()."".Turno::getLetra($t->getIdCola());?><br>
        <?php }else{
            $prub=$t->getPosicion()."".Turno::getLetra($t->getIdCola()); ?>
        <?='<font class="normal"color="black">'.$prub.'</font><br>'?>
        <?php } ?>
    <?php }?>
    </p>
</div>