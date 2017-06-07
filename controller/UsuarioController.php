<?php
require_once 'model/Sesion.php';

class UsuarioController{
    public function index(){
        if(isset($_SESSION['usuario'])){
            switch ($_SESSION['perfil']){
                case 1: // administrador
                    header('Location: index.php?c=administrador&a=index');
                    break;
                case 2: // empleado
                    header('Location: index.php?c=empleado&a=index');
                    break;
                case 3: // cliente
                    header('Location: index.php?c=turno&a=index');
                    break;
                case 4: // monitor
                default:
                    header('Location: index.php?c=turno&a=monitor');
                    break;
            }
        }else{
            require_once 'view/header.php';
            require_once 'view/usuario/login.php';
            require_once 'view/footer.php';
        }

        //~ require_once 'view/header.php';
        //~ require_once 'view/usurios/usuario.php';
        //~ require_once 'view/footerNButton.php';
    }
    
    public function validateSession(){
        $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
        $password = $_POST['pass'];
        $resultado = Sesion::getUser($usuario, $password);
        if(count($resultado) == 1){
            $_SESSION['usuario'] = $resultado[0]['usuarioId'];
            $_SESSION['nombre'] = $resultado[0]['nombre'];
            $_SESSION['perfil'] = $resultado[0]['perfil'];
            header('Location: index.php?c=usuario&a=index');
        }else{
            header('Location: index.php?c=empleado&a=index');
        }
    }

    public function cerrarSesion(){
        $_SESSION = array();
        session_destroy();
        header('Location: index.php?c=usuario&a=index');
    }
    
}
