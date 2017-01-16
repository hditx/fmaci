<SCRIPT LANGUAGE="JavaScript">
	function envia(pag){ 
		document.particular_form.action= pag 
		document.particular_form.submit() 
	} 
</script>

<html> 
	<head>  
		<title>Seleccion Particular</title>  
	</head>  
	<body>  
		<form name="particular_form" method="POST">
			<p align="center">
				<input type="button" onClick="envia('perfumeria.php')" value="Perfumeria">
				<input type="button" onClick="envia('farmacia.php')" value="Farmacia">
				<input type="button" onClick="envia('seleccion.php')" value="Atras">
		    </p>
		</form>
	</body>  
</html>   


