<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="1;url=view/Turno/monitor.php"/>
    </head>
    <body>
        <div class="myTd2">Llamados</div>
        <?php require_once 'model/Turno.php';
            $turnos = Turno::getMonitor();
            foreach ($turnos as $t) {
            if($t->getAtendido() == 2){?>
        
                <div class="modif"><?=Turno::getLetra($t->getIdCola())."".$t->getPosicion()?>asdas</div>
            <?php }else{?>
                
                <div class="myTd2"><?= Turno::getLetra($t->getIdCola())."".$t->getPosicion()?></div>
            <?php } ?>
        <?php }?>        
                <div>asdas</div>
    </body>
</html>