<div class="doscolumnas">
    <p>
        <video width="440" height="320" controls>
        <source src="Botear usb.mp4" type="video/mp4">
        </video>
    </p>
    <table id="izquierda">
        <tr>
            <th>Llamados</th>
        </tr>
        
            <?php foreach ($turnos as $t) {
                if($t->getAtendido() == 2){?>
                    <tr><td class="modif"><?=$t->getPosicion()."".Turno::getLetra($t->getIdCola())?></td></tr>
                <?php }else{?>
                    <tr>
                        <td><?= $t->getPosicion()."".Turno::getLetra($t->getIdCola())?></td>
                    </tr>
                <?php } ?>
            <?php }?>
        
    </table>
</div>