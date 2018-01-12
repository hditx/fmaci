<form action="index.php?c=administrador&a=informe" method="post">
    <label>Colas: </label><br>
    <input type="checkbox" name="colas[]" value="-1"><label>Todas</label><br>
    <?php foreach($colas as $cola) { 
        echo "<input type='checkbox' name='colas[]' value=".$cola->getIdCola()."><label>".$cola->getNombreCola()."</label><br>";
    }?>
    <br>
    <label>Fecha Inicio</label>
    <input type="date" name="fechaInicio">
    <label>Fecha Fin</label>
    <input type="date" name="fechaFin"><br>
    <input type="submit" value="Aceptar" name="Aceptar">
</form>