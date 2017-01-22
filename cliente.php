<SCRIPT LANGUAGE="JavaScript">
	function envia (pag){
		document.cliente.action=pag
		document.cliente.submit()
	}
</script>
<!DOCTYPE html>
<html>
	<head>
		<title>Sacar turno</title>
	</head>
	<body>
		<form name = "cliente" method="POST" >
			<p align="cente">
				<p> DNI <input type="text" name="dni" size="20"></p>
				<input type="button" onClick="envia(seleccion.php)" value="Aceptar" name="B1" >
			</p>
		</form>
	</body>
</html>