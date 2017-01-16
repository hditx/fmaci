<html>  

<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<form method="POST" action="registra.php">
		<p>Apellido y Nombre   		<input type="text" name="nombreApellido" size="20"></p>
		<p>DNI  					<input type="text" name="dni" size="20"></p>
		<p>Direccion 				<input type="text" name="direccion" size="20"></p>
		<p>Fecha de nacimiento      <input type="text" name="fechaNacimiento" size="20"></p> 
		<p>Contraseña				<input type="password" name="contrasenia" size="20"></p>
		  
		<p><input type="submit" value="Guardar datos" name="B1"></p>  
</form>
<?php  

$nombreApellido 	= $_POST["nombreApellido"];
$dni 				= $_POST["dni"];
$direccion 			= $_POST["direccion"];
$fechaNacimiento 	= $_POST["fechaNacimiento"];  
$contrasenia		= $_POST["contrasenia"];

include("abre_conexion.php");  

$_GRABAR_SQL = "INSERT INTO $tabla_db1 (nombreApellido, dni, domicilio, fechaNacimiento, contrasenia) VALUES ('$nombreApellido','$dni','$direccion','$fechaNacimiento', '$contrasenia')";
mysql_query($_GRABAR_SQL); 

include("cierra_conexion.php");  

echo "  
<p>Volver.</p>  

<p><a href='javascript:history.go(-1)'>ATRÁS</a></p>  
";  
?>  
</body>  

</html>   
