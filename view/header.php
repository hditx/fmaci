<html>
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minumum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="view/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="view/font-awesome-4.7.0/css/font-awesome.min.css">

        <title>
            Farmacentro
        </title>
    </head>
    <body>
    <div class="contenedor">
    <?php if (isset($_SESSION['nombre'])) { ?>
        <div align="left">
            <b>Bienvenido <?= $_SESSION['nombre'] ?>!</b>
            <a href="index.php?c=usuario&a=cerrarSesion">Cerrar Sesión</a>
        </div>
    <?php } ?>
