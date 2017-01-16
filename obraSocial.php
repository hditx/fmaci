<SCRIPT LANGUAGE="JavaScript">
	function envia(pag){ 
		document.form.action= pag 
		document.form.submit() 
	} 
</script>

<html>  
<head>  
<title>Ingrese nombre obra social</title>  
</head>  

<body>  

<form name="form" method="POST" >
	<p align="center">
		
		<input type="button" onClick="envia('famacia_social.php')" value="Aceptar">
		<input type="button" onClick="envia('seleccion.php')" value="Cancelar">
    </p>
</form>

</body>  

</html>   