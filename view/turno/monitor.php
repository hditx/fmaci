<!DOCTYPE html>
<html>
    <head>
        <title>Farmacentro</title>
        
    </head>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <body>
        <script>
            $("#refresh").load("view/monitor.php");
        </script>
        <div id="refresh">
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
              
        </div>
        
    </body>
</html>