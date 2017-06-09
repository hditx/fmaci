<h1 class="center">BIENVENIDO!</h1><br>
<div class="center">
<?php foreach ($colas as $c){
    echo "<a href='index.php?c=turno&a=sacarTurno&id=" . $c->getIdCola() . "'>";?>
    <div class="queueSelection">
        <div class="queueTitle"><?= $c->getNombreCola(); ?> </div>
        <div class="queueInformation">
            <div class="izq">Tiempo de <br/> espera</div>
            <div class="der"><?= ($c->getLetra() == null)? "Siguiente" : $c->getLetra() . "" .$c->getSiguiente(); ?></div>
        </div>
    </div> 
<?php
    echo "</a><br /><br /> ";
    }
?>
</div>