<SCRIPT LANGUAGE="JavaScript">
	function envia(pag){ 
		document.form.action= pag 
		document.form.submit() 
	} 
</script>

<html>  

<head>  
<title>Seleccion Particular</title>  
</head>  

<body>  
	<form name="form" method="POST" >	
		<input type="button" onClick="envia('selecciona.php')" value="boton1">	
		<input type="button" onClick="envia('particular.php')" value="boton2">	
		<input type="button" onClick="envia('imp.php?id3')" value="boton3">	
		<input type="button" onClick="envia('imp.php?id4')" value="boton4">	
	</form> 

</body>  

</html>   
