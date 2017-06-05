<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="view/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="view/font-awesome.min.css">

        <title>
            Farmacentro
        </title>
    </head>
    <body>
        <div align="left">
            <b>Bienvenido <?= $_SESSION['nombre'] ?>!</b>
            <a href="index.php?c=empleado&a=cerrarSesion">Cerrar Sesión</a>
        </div>
