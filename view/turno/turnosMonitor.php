<html lang="es">
    <head>
        <title>Farmacentro</title>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="1;url=farmacentro/view/turno/turnoMonitor"/>
        <meta name="viwport" content="width=device-width, initial-scape=1.0">
        <link rel="stylesheet" type="text/css" href="view/stylesheet.css">
        <link href="view/estilos.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body>
       <table id="derecha">
        <tr>
            <th class="myTd2">Llamados</th>
        </tr>
            <?php $turnos = Turno::getMonitor();?>
            <?php foreach ($turnos as $t) {
                if($t->getAtendido() == 2){?>
                    <tr><td class="modif"><?=Turno::getLetra($t->getIdCola())."".$t->getPosicion()?></td></tr>
                <?php }else{?>
                    <tr>
                        <td class="myTd2"><?= Turno::getLetra($t->getIdCola())."".$t->getPosicion()?></td>
                    </tr>
                <?php } ?>
            <?php }?>
        
    </table> 
    </body>
</html>