<table>
    <tr>
        <td>Días</td>
        <td>Cantidad</td>
    </tr>
<?php foreach($todo as $t){ ?>
    <tr>
        <td><?=$t['fecha']?></td>
        <td><?=$t['total']?></td>
    </tr>
<?php } ?>
</table>