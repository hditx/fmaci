<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/stylesheet.css">
    <title>
        Farmacentro
    </title>
    <script type="text/javascript" src="config/jquery-1.7.2.min.js"></script>
    <script>
        $(document).on("ready", function(){
            function reloadTurno(){
                $.get("index.php?c=empleado&a=updateTurno&showNext=<?=$showNext?>&tipo=<?=$tipo?>", function(data){
                    $("#refresh").html(data);
                    
                });
            }
            setInterval(reloadTurno,1000);
        });
    </script>
    
    
</head>
<body>
<?php if (isset($_SESSION['nombre'])) { ?>
        <div align="left">
            <b>Bienvenido <?= $_SESSION['nombre'] ?>!</b>
            <a href="index.php?c=usuario&a=cerrarSesion">Cerrar Sesión</a>
        </div>
<?php } ?>
    
<div>
    <?php if ($showNext) {?>
        <a href="?c=empleado&a=estadoTurno&id=<?=$first->getIdTurno()?>&estado=2&idEmpleado=<?=$idEmpleado?>">
    <?php } ?>
        <div class="encabezado" id="text">
            <?= $title ?> 
            <?php if ($showNext) {?>
                <img id="imagenPosicion">
            <?php } ?>
        </div>
    </a>
    <br>
    <div id="global">
        <div id="mensajes">
            <div id="refresh">    
            </div>
        </div>
    </div>
</div>
<div style="float: right;">
    <img class="radiuss" src="view/images/colores.jpg" width="350" height="80"><br>
    <div class="ubiBoton">
        <?php foreach ($links as $key => $value){
            echo "<a class='buttonEmployed' href='index.php?c=empleado&a=" . $value . "&idEmpleado=$idEmpleado'>$key</a><br>";
        }
       ?>
    </div>
</div>