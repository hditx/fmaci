<?php
try{
	$mdb = new PDO("mysql:host=localhost;dbname=Farmacentro", 'farmacentro', 'farmacentro');
	$sql = 'UPDATE Cola SET siguiente = 1';
	$temp = $mdb->prepare($sql);
	$temp->execute();
} catch (PDOException $e){
	print "ERROR";
}

?>
