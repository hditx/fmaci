<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/stylesheet.css">
    <link href="config/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
        <div align="left" class="text-light">
            <b>Bienvenido <?= $_SESSION['nombre'] ?>!</b>
            <a href="index.php?c=usuario&a=cerrarSesion">Cerrar Sesión</a>
        </div>
<?php } ?>
    
<div class="container-fluid">
    <div class="row">
       <div class="encabezado col-md-4">
        <?php if ($showNext) {?>
            <a href="?c=empleado&a=estadoTurno&id=<?=$first->getIdTurno()?>&estado=1&idEmpleado=<?=$idEmpleado?>" class=" letraNaranja">
        <?php } ?>       
                <?= $title ?> 
                <?php if ($showNext) {?>
                <img id="imagenPosicion">
                <?php } ?>
            </a>
        </div>
        <div class="col-sm-4 col-md-4 offset-sm-4 offset-md-4">
            <img style="border-radius: 1rem" src="view/images/colores.jpg">
        </div>
    </div>
    <div class="row justify-content-between myContenedor">
        <div id="global" class="col-sm-4 col-md-4 col-lg-4 align-items-stretch">
            <div id="mensajes">
                <div id="refresh"></div>
            </div>
        </div>
        
        <div class="col-sm-4 col-md-4">
            <?php foreach ($links as $key => $value){
                echo "<a class='buttonEmployed text-center' href='index.php?c=empleado&a=" . $value . "&idEmpleado=$idEmpleado'>$key</a><br>";
            }?>
        </div>
    </div>

</div>