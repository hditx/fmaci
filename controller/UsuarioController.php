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
                    header('Location: index.php?c=turno&a=monitor');
                    break;
            }
        }else{
            require_once 'view/header.php';
            require_once 'view/usuario/login.php';
            require_once 'view/footer.php';
        }
    }
    
    public function validateSession(){
        
        switch ($monitor){
            case 1:
                $usuario = 24;
                break;
            case 2:
                $usuario = 23;
                break;
            default :
                $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
                break;
        }
        $resultado = Sesion::getUser($usuario);
        if(count($resultado) == 1){
            $_SESSION['usuario'] = $resultado[0]['usuarioId'];
            $_SESSION['nombre'] = $resultado[0]['nombre'];
            $_SESSION['perfil'] = $resultado[0]['perfil'];
            $_SESSION['empleadoEstado'] = $resultado[0]['movimiento'];
            $_SESSION['inicio'] = $resultado[0]['movimiento'];
            header('Location: index.php?c=usuario&a=index');
        }else{
            header('Location: index.php?c=empleado&a=index');
        }
    }

    public function cerrarSesion(){
        Sesion::saveEstado($_SESSION['empleadoEstado'], $_SESSION['usuario']);
        $_SESSION = array();
        session_destroy();
        header('Location: index.php?c=usuario&a=index');
    }
    
}
