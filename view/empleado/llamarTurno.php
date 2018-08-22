<br>
<div class="container-fluid d-flex flex-row justify-content-between">
    <div class="d-flex flex-column ">
        <div class="container-fluid">
            <?php if($turno->getEnEspera() == 0) { ?>
            <a href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=1&idEmpleado=<?= $_SESSION['usuario'] ?>" class="botonLlama col-sm-3 col-md-3">
                Llamar nuevamente
            </a>
            <?php } else{?>
                <div class="botonLlama col-sm-3 col-md-3">Llamar nuevamente</div>
            <?php } ?>
            <div class="col-sm-12 col-md-12 llamados" >
                    <?php foreach ($listLlamado as $t) {?>
                    <div class="fechas row">
                        <label class="col-sm-2 col-md-2 textFecha"><?php echo $d; $d--;?></label>
                        <label class="col-sm-4 col-md-4 textFechaCentro offset-sm-1 offset-md-1"><?= $t->getFecha()?></label>
                        <label class="col-sm-4 col-md-4 textFechaDer"><?= $t->getHora()?></label>
                    </div>
                    <?php }?>
            </div>
        </div>
        <a href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=4&idEmpleado=<?=$idEmpleado?>" class="col-sm-11 col-md-11 noPresente">
            No se presento
        </a>
        <a class="col-sm-11 col-md-11 espera" href="index.php?c=empleado&a=estadoTurno&id=<?=$id?>&estado=2&idEmpleado=<?=$idEmpleado?>&espera=1&enEspera=1">
            Enviar a espera
        </a>
    </div>
    
    <div class="col-sm-4 col-md-4">    
        <h1 class="clientePosicion">Cliente</h1>
        <form method="POST" name="seleccion" class="formularioCliente">
            <div class="form-group row">
                <label class="col-sm-2 col-md-2 col-fomr-label">
                    Nombre
                </label>
                <div class="col-sm-8 col-md-8 offset-sm-1 offset-md-1">
                    <input class="form-control" type="text" name="nombre" size="20">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-md-2 col-fomr-label">
                    Apellido 
                </label>
                <div class="col-sm-8 col-md-8 offset-sm-1 offset-md-1">
                    <input class="form-control" type="text" name="apellido" size="20" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-md-2 col-fomr-label">
                    DNI
                </label>
                <div class="col-sm-8 col-md-8 offset-sm-1 offset-md-1">
                    <input class="form-control" type="text" name="dni" size="20">
                    <input type="button" value="...">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-md-2 col-fomr-label">
                    TEL
                </label>
                <div class="col-sm-8 col-md-8 offset-sm-1 offset-md-1">
                    <input class="form-control" type="text" name="telefono" size="20">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-md-2 col-fomr-label">
                    Dirección
                </label>
                <div class="col-sm-8 col-md-8 offset-sm-1 offset-md-1">
                    <input class="form-control" type="text" name="direccion" size="20">
                </div>
            </div>
        </form>
    </div>
    
    <div class="col-sm-4 col-md-4">
            <div id="refreshEspera"></div>
            <a class="finAtencion" href="index.php?c=empleado&a=estadoTurno&id=<?=$id?>&estado=3&idEmpleado=<?=$idEmpleado?>">
                Fin de Atención
            </a>
    </div>
</div>

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