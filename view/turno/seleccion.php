<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/stylesheet.css">
    <title>
        Farmacentro
    </title>
</head>
<body>
<h1 align="center">BIENVENIDO!</h1><br>

<div class="center">
<?php foreach ($colas as $c){
    echo "<a href='index.php?c=turno&a=sacarTurno&id=" . $c->getIdCola() . "'>";?>
    <div class="queueSelection">
        <div class="queueTitle"><?= $c->getNombreCola(); ?> </div>
        <div class="queueInformation">
            <div class="izq">Turnos en <br/> espera: <?= Turno::getEspera($c->getIdCola())?></div>
            <div class="der"><?= ($c->getLetra() == null)? "Siguiente" : $c->getLetra() . "" .$c->getSiguiente(); ?></div>
        </div>
    </div> 
<?php
    echo "</a><br /><br /> ";
    }
?>
</div>
