<?php
class DataBase{
    public static function getDb() {
        $host = "localhost";
        $dbName = "Farmacentro";
        $usuario = "root";
        $contrasenia = "3575820as";
        return new PDO("mysql:host=$host;dbname=$dbName", $usuario, $contrasenia);
    }
}
?>
 
