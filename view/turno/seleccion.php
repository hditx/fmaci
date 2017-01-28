<?php foreach ($colas as $c)
    echo "<a href='index.php?c=turno&a=imprimir&n=" . $c->getNombreCola() . "'>" . $c->getNombreCola() . "</a> ";
?>
