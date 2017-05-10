<div class="doscolumnas">
    <div style="izquierda">
        <video width="440" height="320" controls>
        <source src="Botear usb.mp4" type="video/mp4">
        </video>
    </div>
    <table id="derecha">
        <tr>
            <th class="letra">Llamados</th>
        </tr>
        
            <?php foreach ($turnos as $t) {
                if($t->getAtendido() == 2){?>
                    <tr><td class="modif"><?=Turno::getLetra($t->getIdCola())."".$t->getPosicion()?></td></tr>
                <?php }else{?>
                    <tr>
                        <td class="letra"><?= Turno::getLetra($t->getIdCola())."".$t->getPosicion()?></td>
                    </tr>
                <?php } ?>
            <?php }?>
        
    </table>
</div>