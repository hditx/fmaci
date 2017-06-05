<?php
require_once 'model/cola.php';
require_once 'model/Turno.php';
require_once 'config/DataBase.php';
require_once 'model/Empleado.php';
require_once 'model/Historial.php';
require_once 'model/Cliente.php';
require_once 'model/Sesion.php';

class EmpleadoController{
    public function index(){
        if(isset($_SESSION['usuario'])){
            header('Location: index.php?c=empleado&a=listTurno');
        }else{
            require_once 'view/header.php';
            require_once 'view/empleado/logueo.php';
            require_once 'view/footer.php';
        }
    }
    
    public function validateSession(){
        $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
        $password = $_POST['pass'];
        $resultado = Sesion::getUser($usuario, $password);
        if(count($resultado) == 1){
            $_SESSION['usuario'] = $resultado[0]['idEmpleado'];
            $_SESSION['nombre'] = $resultado[0]['nombre'];
            $temp = Sesion::getLastSession($_SESSION['usuario']);
            if($temp->getEstado() != null){
                $estado = $temp->getEstado();
                $id = $temp->getIdTurno();
                $idEmpleado = $temp->getIdUsuario();
                header("Location: index.php?c=empleado&a=estadoTurno&estado=$estado&id=$id&idEmpleado=$idEmpleado");
            }else{
                header('Location: index.php?c=empleado&a=index');
            }
        }else{
            header('Location: index.php?c=empleado&a=index');
        }
    }
    
    public function listTurno(){
        if(isset($_SESSION['usuario'])){
            $idEmpleado = $_SESSION['usuario'];
            $nombre = Empleado::getNombreObjeto($idEmpleado);
            $first = Turno::getFirstTurno($idEmpleado);
            $turnos = Turno::getTurnoPropio($idEmpleado);
            $title = "Asignado";
            $showNext = true;
            $asignado = true;
            $links = Array("En estado" => "enEstado", "Otras colas" => "otrasColas");
            require_once 'view/header.php';
            require_once 'view/empleado/list.php';
            require_once 'view/footer.php';
        }else{
           header('Location: index.php?c=empleado&a=index');
        }
    }
   
    public function otrasColas(){
        if(isset($_SESSION['usuario'])){
            $idEmpleado = $_SESSION['usuario'];
            $nombre = "";
            $first = Turno::getFirstTurnoNoE($idEmpleado);
            $turnos = Turno::getTurnoNoEmpleado($idEmpleado);
            $title = "Otros";
            $showNext = true;
            $asignado = false;
            $links = Array("En estado" => "enEstado", "Asignada" => "listTurno");
            require_once 'view/header.php';
            require_once 'view/empleado/list.php';
            require_once 'view/footer.php';
        }else{
            header('Location: index.php?c=empleado&a=index');
        }
    }
    
    public function enEstado(){
        if(isset($_SESSION['usuario'])){
            $idEmpleado = $_SESSION['usuario'];
            $asignado = true;
            $nombre = "";
            $title = "En estado";
            $showNext = false;
            $links = Array("Asignada" => "listTurno", "Otras colas" => "otrasColas");
            $colorcitos = array(2 => "estadoLlamando", 
                                3 => "estadoAtendiendo",
                                4 => "estadoNoPresento");
            $colorcitosRec = array(2 => "estadoLlamandoRec",
                                   3 => "estadoAtendiendoRec",
                                   4 => "estadoNoPresentoRec");
            $turnos = Turno::getTurnoEstado();
            require_once 'view/header.php';
            require_once 'view/empleado/list.php';
            require_once 'view/footer.php';
        }else{
            header('Location: index.php?c=empleado&a=index');
        }
    }
    
    public function registrar(){
        $id = $_REQUEST['id'];
        $estado = $_REQUEST['estado'];
        $idEmpleado = $_REQUEST['idEmpleado'];
        require_once 'view/header.php';
        require_once 'view/empleado/registrarCliente.php';
        require_once 'view/footer.php';
    }

    public function estadoTurno(){
        if(isset($_SESSION['usuario'])){
            switch ($_REQUEST['estado']){
                case 1:
                case 4:
                    //ATENDIDO Y ABANDONO
                    if($_REQUEST['estado'] == 4){
                        Turno::setEnEsperaObjeto($_REQUEST['id']);
                    }
                    if(isset($_REQUEST['dni']) && isset($_REQUEST['name'])){
                        Cliente::saveCliente($_REQUEST['name'], $_REQUEST['apellido'], $_REQUEST['dni'],
                                $_REQUEST['telefono']);
                        echo "save";
                    }
                    Empleado::actualizar($_REQUEST['id'], $_REQUEST['estado']);
                    Empleado::saveEstado($_REQUEST['id'], $_REQUEST['estado'], $_REQUEST['idEmpleado']);
                    $idEmpleado = $_REQUEST['idEmpleado'];
                    if($_REQUEST['mostrar'] == 1){
                        $id = $_REQUEST['id'];
                        header("Location: index.php?c=empleado&a=estadoTurno&estado=3&idEmpleado=$idEmpleado&id=$id");
                    }else{
                        header("Location: index.php?c=empleado&a=listTurno&idEmpleado=$idEmpleado");
                    }                    
                    break;
                case 2:
                    //LLAMADO
                    if(isset($_REQUEST['enEspera'])){
                        Turno::setEnEsperaObjeto($_REQUEST['id']);
                    }
                    Empleado::saveEstado($_REQUEST['id'], $_REQUEST['estado'], $_REQUEST['idEmpleado']);
                    Empleado::actualizar($_REQUEST['id'], $_REQUEST['estado']);
                    $listLlamado = Historial::history($_REQUEST['id']);
                    $d = count($listLlamado);
                    $id = $_REQUEST['id'];
                    $turno = Turno::getTurnoUnico($id);
                    $idEmpleado = $_REQUEST['idEmpleado'];
                    if(isset($_REQUEST['espera'])){
                        $atendido = $_REQUEST['estado'];
                        $idTurno = $_REQUEST['id'];
                        header("Location: index.php?c=empleado&a=cerrarSesion&idTurno=$idTurno&atendido=$atendido");
                    }else{
                        require_once 'view/header.php';
                        require_once 'view/empleado/llamarTurno.php';
                        require_once 'view/footerNButton.php';
                    }
                    break;
                case 3:
                    //ATENDIENDO
                    if(isset($_REQUEST['dni'])){
                        $tCliente = Cliente::getCliente($_REQUEST['dni']);
                        $tdni = $_REQUEST['dni'];
                    }else{
                        $tCliente = new Cliente(null);
                    }
                    if(isset($_REQUEST['enEspera'])){
                        echo "espera";
                        Turno::setEnEsperaObjeto($_REQUEST['id']);
                    }
                    Empleado::saveEstado($_REQUEST['id'], $_REQUEST['estado'], $_REQUEST['idEmpleado']);
                    Empleado::actualizar($_REQUEST['id'], $_REQUEST['estado']);
                    $id = $_REQUEST['id'];
                    $idEmpleado = $_REQUEST['idEmpleado'];
                    $turno = Turno::getTurnoUnico($id);
                    if(isset($_REQUEST['espera'])){
                        $atendido = $_REQUEST['estado'];
                        $idTurno = $_REQUEST['id'];
                        header("Location: index.php?c=empleado&a=cerrarSesion&idTurno=$idTurno&atendido=$atendido");
                    }else{
                        require_once 'view/header.php';
                        require_once 'view/empleado/atendido.php';
                        require_once 'view/footerNButton.php';
                    }
                    break;
            }
        }else{
            header('Location: index.php?c=empleado&a=index');
        }
    }
    
    public function cerrarSesion(){
        if(isset($_SESSION['usuario'])){
            Empleado::saveSession($_SESSION['usuario'], (isset($_REQUEST['idTurno']) ? $_REQUEST['idTurno'] : "null"), 
                    (isset($_REQUEST['atendido']) ? $_REQUEST['atendido'] : "null"));
        }
        echo $_SESSION['usuario'] . " ". $_REQUEST['idTurno'] . " " .$_REQUEST['atendido'];
        $_SESSION = array();
        session_destroy();
        header('Location: index.php?c=empleado&a=index');
    }
}
?>
