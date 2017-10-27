<div>
    <div class="cuadradoMostrar">
        <div class="letraCuadrado"><?= Turno::getLetra($turno->getIdCola())."".$turno->getPosicion()?></div>
        <div class="rectanguloMostrar">
            <div class="obraSocial"><?= Cola::getNombreColaObjeto($turno->getIdCola())?></div>
            <div class="horaNormal"><?= $turno->getHora()?></div>
            <div class="horaEspera"><?= Turno::getHoraObjeto($turno->getIdTurno())?></div>
        </div>
    </div>
</div>

    
<a href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=1&idEmpleado=<?= $_SESSION['usuario'] ?>"><div class="botonLlama">Llamar nuevamente</div></a>
<div class="posicion" id="llamados" >
        <div id="mensaje">
            <?php foreach ($listLlamado as $t) {?>
            <div class="fechas">
                <label class="textFecha"><?php echo $d; $d--;?></label>
                <label class="textFechaCentro"><?= Historial::getFecha($t->getIdHistorial())?></label>
                <label class="textFechaDer"><?= Historial::getHora($t->getIdHistorial())?></label>
            </div>
            <?php }?>
    </div>
</div>
<h1 class="clientePosicion">Cliente</h1>
<form method="POST" name="seleccion" class="formularioCliente">
    <label class="formulario">Nombre   <input type="text" name="nombre" size="20"></label><br/>
    <label class="formulario">Apellido <input type="text" name="apellido" size="20" ></label><br/>
    <label class="formulario">DNI      <input type="text" name="dni" size="20"><input type="button" value="..."></label><br/>
    <label class="formulario">TEL <input type="text" name="telefono" size="20"></label><br/>
    <label class="formulario">Dirección<input type="text" name="direccion" size="20"></label>
</form>

<a id="finAtencion" href="index.php?c=empleado&a=estadoTurno&id=<?= $id ?>&estado=3&idEmpleado=<?=$idEmpleado?>">Fin de Atención</a>
<a href="index.php?c=empleado&a=estadoTurno&id=<?= $id?>&estado=2&idEmpleado=<?=$idEmpleado?>"><div id="noPresente">No se presento</div></a>
<a class="posicionEspera" id="espera" href="index.php?c=empleado&a=estadoTurno&id=<?=$id?>&estado=2&idEmpleado=<?=$idEmpleado?>&espera=1&enEspera=1">Enviar a espera</a>
