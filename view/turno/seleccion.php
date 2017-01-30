<?php foreach ($colas as $c){
    echo "<a href='index.php?c=turno&a=sacarTurno&id=" . $c->getIdCola() . "'>";?>
    <div style="color:#0000FF; border: 1px solid rgb(204, 102, 204); width: 200px">
    <h3><?= $c->getNombreCola(); ?> </h3>
    <?php if($c->getLetra() == null){
        echo "<p>SIGUIENTE</p>";
    }else{
        echo "<p>" . $c->getLetra() . " - " .$c->getSiguiente() ."</p>";
    }
    ?>
    </div> 
<?php
    echo "</a> ";
    }
?>
