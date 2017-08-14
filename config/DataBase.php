<?php
class DataBase{
    public static function getDb() {
        $host = "localhost";
        $dbName = "Farmacentro";
        $usuario = "farmacentro";
        $contrasenia = "farmacentro";
        return new PDO("mysql:host=$host;dbname=$dbName", $usuario, $contrasenia);
    }
}
?>
 