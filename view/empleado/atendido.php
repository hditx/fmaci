<div align="center" >
<h1 align="center">Atendiendo</h1>
<p class="letra">Turno <?= $temp."".$temp1 ?></p>
<form method="POST" name="seleccion" >
    <input type="hidden" name="id" value="<?= $id?>">
    <input type="hidden" name="estado" value="3">
    <input type="hidden" name="idEmpleado" value="<?= $idEmpleado?>">
    <p class="formulario">Nombre   <input class="inputText" type="text" name="nombre" size="20" value="<?= $tCliente->getNombre()?>"></p>
    <p class="formulario">Apellido <input class="inputText" type="text" name="apellido" size="20" value="<?= $tCliente->getApellido()?>"></p>
    <p class="formulario">DNI      <input class="inputText" type="text" name="dni" size="20" value="<?= $tDni?>"><input type="button" onclick="envia('index.php?c=empleado&a=estadoTurno&estado=3')" value="..."></p>
    <p class="formulario">Telefono <input class="inputText" type="text" name="telefono" size="20" value="<?= $tCliente->getTelefono()?>"></p>
    
</form>
</div>
<div align="right">
<a input id="finAtencion" href="index.php?c=empleado&a=estadoTurno&id=<?= $id ?>&estado=1&idEmpleado=<?=$idEmpleado?>">Finalizar Atencion</a>
<a id="espera" href="index.php?c=empleado&a=estadoTurno&id=<?$id?>&estado=3&idEmpleado=<?=$idEmpleado?>&espera=1">Poner en espera</a>
</div>