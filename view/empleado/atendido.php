<div>
    <div class="cuadradoMostrar">
        <div class="letraCuadrado"><?= Turno::getLetra($turno->getIdCola())."".$turno->getPosicion()?></div>
        <div class="rectanguloMostrar">
            <div class="obraSocial"><?= Cola::getNombreColaObjeto($turno->getIdCola())?></div>
            <div class="horaNormal"><?= $turno->getHora()?></div>
            <div class="horaEspera"><?= Turno::getHoraObjeto($turno->getIdTurno()) ."MIN"?></div>
        </div>
    </div>
</div>
<div align="center" >
<div id="atendiendo">Atendiendo</div>
<form method="POST" name="seleccion" >
    <input type="hidden" name="id" value="<?= $id?>">
    <input type="hidden" name="estado" value="3">
    <input type="hidden" name="idEmpleado" value="<?= $idEmpleado?>">
    <div class="nombre"><p class="formulario">Nombre   <input class="inputText" type="text" name="nombre" size="20" value="<?= $tCliente->getNombre()?>"></p></div>
    <div class="nombre"><p class="formulario">Apellido <input class="inputText" type="text" name="apellido" size="20" value="<?= $tCliente->getApellido()?>"></p></div>
    <div class="nombre"><p class="formulario">DNI      <input class="inputText" type="text" name="dni" size="20" value="<?= $tDni?>"><input type="button" onclick="envia('index.php?c=empleado&a=estadoTurno&estado=3')" value="..."></p></div>
    <div class="nombre"><p class="formulario">TEL <input class="inputText" type="text" name="telefono" size="20" value="<?= $tCliente->getTelefono()?>"></p></div>
    <div class="nombre"><p class="formulario">Dirección<input class="inputText" type="text" name="direccion" size="20"></p></div>
</form>
</div>
<div align="right">
<a input id="finAtencion" href="index.php?c=empleado&a=estadoTurno&id=<?= $id ?>&estado=1&idEmpleado=<?=$idEmpleado?>">Fin de Atención</a>
<a class="posicionEspera" id="espera" href="index.php?c=empleado&a=estadoTurno&id=<?$id?>&estado=3&idEmpleado=<?=$idEmpleado?>&espera=1">Enviar a espera</a>
</div>