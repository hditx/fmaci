<SCRIPT LANGUAGE="JavaScript">
	function envia(pag){ 
		document.seleccion.action= pag 
		document.seleccion.submit() 
	} 
</script>
<h1>Atendiendo</h1>
<p>Turno <?= $temp." - ".$temp1 ?></p>
<form method="POST" name="seleccion">
    <input type="hidden" name="id" value="<?= $id?>">
    <input type="hidden" name="estado" value="3">
    <input type="hidden" name="idEmpleado" value="<?= $idEmpleado?>">
    <p>Nombre   <input type="text" name="nombre" size="20" value="<?= $tCliente->getNombre()?>"></p>
    <p>Apellido <input type="text" name="apellido" size="20" value="<?= $tCliente->getApellido()?>"></p>
    <p>DNI      <input type="text" name="dni" size="20" value="<?= $tDni?>"><input type="button" onclick="envia('index.php?c=empleado&a=estadoTurno&estado=3')" value="..."></p>
    <p>Telefono <input type="text" name="telefono" size="20" value="<?= $tCliente->getTelefono()?>"></p>
    <p><input class="myButton" type="submit" onclick="envia('index.php?c=empleado&a=estadoTurno&id=<?= $id ?>&estado=1&idEmpleado=<?=$idEmpleado?>')" value="Finalizar Atencion">
</form>