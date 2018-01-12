<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Farmacentro
    </title>
    <script type="text/javascript" src="config/jquery-1.7.2.min.js"></script>
    <script>
        $(document).on("ready", function() {
            function reloadTurno() {
                $.get('index.php?c=empleado&a=refreshEspera&id=<?=$turno->getIdTurno()?>', function(data) {
                    $("#refreshEspera").html(data);

                });
            }
            setInterval(reloadTurno, 1000);
        });

    </script>
</head>
<div id="refreshEspera"></div>
<?php if($turno->getEnEspera() == 0) { ?>
<a href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=1&idEmpleado=<?= $_SESSION['usuario'] ?>">
    <div class="botonLlama">Llamar nuevamente</div>
</a>
<?php } else{?>
    <div class="botonLlama">Llamar nuevamente</div>
<?php } ?>
<div class="posicion" id="llamados">
    <div id="mensaje">
        <?php foreach ($listLlamado as $t) {?>
        <div class="fechas">
            <label class="textFecha"><?php echo $d; $d--;?></label>
            <label class="textFechaCentro"><?= $t->getFecha()?></label>
            <label class="textFechaDer"><?= $t->getHora()?></label>
        </div>
        <?php }?>
    </div>
</div>
<h1 class="clientePosicion">Cliente</h1>
<form method="POST" name="seleccion" class="formularioCliente">
    <label class="formulario">Nombre   <input class="inputText" type="text" name="nombre" size="20"></label><br/>
    <label class="formulario">Apellido <input class="inputText" type="text" name="apellido" size="20" ></label><br/>
    <label class="formulario">DNI      <input class="inputText" type="text" name="dni" size="20"><input type="button" value="..."></label><br/>
    <label class="formulario">TEL <input class="inputText" type="text" name="telefono" size="20"></label><br/>
    <label class="formulario">Dirección<input class="inputText" type="text" name="direccion" size="20"></label>
</form>

<a id="finAtencion" href="index.php?c=empleado&a=estadoTurno&id=<?= $id ?>&estado=3&idEmpleado=<?=$idEmpleado?>">Fin de Atención</a>
<a href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=2&idEmpleado=<?=$idEmpleado?>">
    <div id="noPresente">No se presento</div>
</a>
<a class="posicionEspera" id="espera" href="index.php?c=empleado&a=estadoTurno&id=<?=$id?>&estado=2&idEmpleado=<?=$idEmpleado?>&espera=1&enEspera=1">Enviar a espera</a>
