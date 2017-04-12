<iframe height="615px" width="900px" src="view/turno/video.php"></iframe>
<table id="derecha">
        <tr>
            <th class="myTd2">Llamados</th>
        </tr>
            <?php foreach ($turnos as $t) {
                if($t->getAtendido() == 2){?>
                    <tr><td class="modif"><?=Turno::getLetra($t->getIdCola())."".$t->getPosicion()?></td></tr>
                <?php }else{?>
                    <tr>
                        <td class="myTd2"><?= Turno::getLetra($t->getIdCola())."".$t->getPosicion()?></td>
                    </tr>
                <?php } ?>
            <?php }?>
</