<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="view/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="view/font-awesome-4.7.0/css/font-awesome.min.css">

        <title>
            Farmacentro
        </title>
    </head>
    <script type="text/javascript">
        function deshabilitaRetroceso(){
            window.location.hash="no-back-button";
            window.location.hash="Again-No-back-button" //chrome
            window.onhashchange=function(){window.location.hash="no-back-button";}
        }
    </script>
    <?php if($_REQUEST['monitor'] == 1 || $_REQUEST['monitor'] == 2){ ?>
    <script type="text/javascript">
            window.onload=function(){
		document.forms["login"].submit();
            }
        </script>
    <?php } ?>
    <body <?= ($bloqueo) ? "onload='deshabilitaRetroceso()'" : '' ?>>
    <?php if (isset($_SESSION['nombre'])) { ?>
        <div align="left">
            <b>Bienvenido <?= $_SESSION['nombre'] . " ". $_SESSION['estadoEmpleado']?>!</b>
            <a href="index.php?c=usuario&a=cerrarSesion&empleadoEstado=<?$_SESSION['empleadoEstado']?>">Cerrar Sesión</a>
        </div>
    <?php } ?>
