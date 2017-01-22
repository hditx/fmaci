<SCRIPT LANGUAGE="JavaScript">
	function envia(pag){ 
		document.administrador.action= pag 
		document.administrador.submit() 
	} 
</script>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form name="administrador" method="POST">
			<p align="center">
				<input type="button" onClick="envia('crearCola.php')" value="Crear Cola">
				<input type="button" onClick="envia('registrarNuevoEmpleado.php')" value="Registrar empleado">
				<input type="button" onClick="envia('modificaEmpleado.php')" value="Modificar datos empleado">
			</p>
		</form>
	</body>
</html> 
