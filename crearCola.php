<html>  
	<head>  
		<title>Crear Cola</title>  
	</head>  
	<body>  
		<form method="POST" action="registra.php">
			<p>Nombre cola <input type="text" name="nombre" size="20"></p>
			<p>Tipo Atencion <input type="text" name="apellido" size="20"></p>
			<p>Tipo de cola <input type="text" name="direccion" size="20"></p>
			<p>Tipo de obra social <input type="text" name="telefono" size="20"></p>
			<p><input type="submit" value="Guardar datos" name="B1"></p>  
		</form>
			<?php 
				class Cola{
					private $nombreCola
					private $tipoAtencionCliente
					private $tipoCola
					private $tipoObraSocial
					function __construct($nombre, $tipoAtencionCliente, $tipoCola){
						$this->nombreCola = $nombre;
						$this->tipoAtencionCliente = $tipoAtencionCliente;
						$this->tipoCola = $tipoCola;
					}
					function siObraSocial($tipoObraSocial){
						$this->tipoObraSocial = $tipoObraSocial;
					}
				}
				$nombre = $_POST["nombre"];
				$tipoAtencionCliente = $_POST["apellido"];
				$tipoCola = $_POST["direccion"];
				$cola1 = new Cola($nombre, $tipoAtencionCliente, $tipoCola);
				echo "  
				<p>Volver.</p> 
				<p><a href='javascript:history.go(-1)'>ATRÁS</a></p>  
				";  
			?>  
	</body>  
</html>   
