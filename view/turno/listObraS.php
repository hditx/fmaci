<h1>Colas</h1> 
<table border="1">
    <th> Obra Social</th>
    <th> Seleccionar</th>
    <?php $data = Cola::getList(); ?>
    <?php foreach ($data as $c){ ?>
    <tr>
        <td><?php echo $c->getNombreCola() ?></td>
        <td><a href="index.php?c=turno&a=turnoObraSocial">X</a>
    </tr>
    <?php } ?>
</table>
