<?php
session_start();

ini_set('display_errors', 'error');
error_reporting(E_ALL | E_STRICT);

$controller="UsuarioController";
$accion = "index";
// sólo si existe usuario admito un controlador distinto a usuarioController...
if(isset($_SESSION['usuario'])){ 
    if(isset($_REQUEST['c'])){
        $controller = ucwords($_REQUEST['c']) . "Controller";
    }

}
// sólo si el controlador es UsuarioController o existe usuario admito un método distinto a index...
if(isset($_SESSION['usuario']) || (isset($_REQUEST['a']) && $_REQUEST['a'] == "validateSession")){ 
    if(isset($_REQUEST['a'])){
        $accion = $_REQUEST['a'];
    }
}

require_once "controller/$controller.php";
$controller = new $controller();
$controller->$accion();
?>
