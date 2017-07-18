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
        $temp = Sesion::getLastSession($_SESSION['usuario']);
        if($temp->getEstado() != null){
            $estado = $temp->getEstado();
            $id = $temp->getIdTurno();
            $idEmpleado = $temp->getIdUsuario();
            header("Location: index.php?c=empleado&a=estadoTurno&estado=$estado&id=$id&idEmpleado=$idEmpleado");
        }else{
            header('Location: index.php?c=empleado&a=listTurno');
        }
    }
    
    public function updateTurno(){
        $idEmpleado = $_SESSION['usuario'];
        $showNext = $_REQUEST['showNext'];
        switch ($_REQUEST['tipo']){
            case 1:
                $turnos = Turno::getTurnoPropio($idEmpleado);
                break;
            case 2:
                $turnos = Turno::getTurnoNoEmpleado($idEmpleado);
                break;
            case 3:
                $turnos = Turno::getTurnoEstado();
                break;
                
        }
        
        $colorcitos = array(2 => "estadoLlamando", 
                            3 => "estadoAtendiendo",
                            4 => "estadoNoPresento");
        $colorcitosRec = array(2 => "estadoLlamandoRec",
                               3 => "estadoAtendiendoRec",
                               4 => "estadoNoPresentoRec");
        require_once 'config/refreshTurno.php';
    }

    public function listTurno(){
        Empleado::saveSession($_SESSION['usuario'], "null", "null");
        $tipo = 1;
        $idEmpleado = $_SESSION['usuario'];
        $nombre = Empleado::getNombreObjeto($idEmpleado);
        $first = Turno::getFirstTurno($idEmpleado);
        $title = "Asignado";
        $showNext = true;
        $asignado = true;
        $links = Array("En estado" => "enEstado", "Otras colas" => "otrasColas");
        require_once 'view/empleado/list.php';
        require_once 'view/footer.php';
    }
   
    public function otrasColas(){
        $idEmpleado = $_SESSION['usuario'];
        $nombre = "";
        $tipo = 2;
        $first = Turno::getFirstTurnoNoE($idEmpleado);
        $title = "Otros";
        $showNext = true;
        $asignado = false;
        $links = Array("En estado" => "enEstado", "Asignada" => "listTurno");
        require_once 'view/empleado/list.php';
        require_once 'view/footer.php';
    }
    
    public function enEstado(){
        $tipo = 3;
        $idEmpleado = $_SESSION['usuario'];
        $asignado = true;
        $nombre = "";
        $title = "En estado";
        $showNext = false;
        $links = Array("Asignada" => "listTurno", "Otras colas" => "otrasColas");
        require_once 'view/empleado/list.php';
        require_once 'view/footer.php';
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
        Empleado::saveSession($_SESSION['usuario'], (isset($_REQUEST['id']) ? $_REQUEST['id'] : "null"), 
                (isset($_REQUEST['estado']) ? $_REQUEST['estado'] : "null"));
        
        switch ($_REQUEST['estado']){
            case 1:
            case 4:
                $bloqueo = false;
                $_SESSION['empleadoEstado'] = 0;
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
                $bloqueo = true;
                if(isset($_REQUEST['enEspera'])){
                    Turno::setEnEsperaObjeto($_REQUEST['id']);
                }
                if($_SESSION['inicio'] != 2){
                    Empleado::saveEstado($_REQUEST['id'], $_REQUEST['estado'], $_REQUEST['idEmpleado']);
                    Empleado::actualizar($_REQUEST['id'], $_REQUEST['estado']);
                }
                $_SESSION['inicio'] = 0;
                $listLlamado = Historial::history($_REQUEST['id']);
                $d = count($listLlamado);
                $id = $_REQUEST['id'];
                $turno = Turno::getTurnoUnico($id);
                $idEmpleado = $_REQUEST['idEmpleado'];
                $_SESSION['empleadoEstado'] = 2; 
                if(isset($_REQUEST['espera'])){
                    Turno::setEnEsperaObjeto($_REQUEST['id']);
                    header("Location: index.php?c=empleado&a=listTurno");
                }else{
                    require_once 'view/header.php';
                    require_once 'view/empleado/llamarTurno.php';
                    require_once 'view/footerNButton.php';
                }
                break;
            case 3:
                //ATENDIENDO
                $bloqueo = true;
                $_SESSION['empleadoEstado'] = 0; 
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
                    Turno::setEnEsperaObjeto($_REQUEST['id']);
                    header("Location: index.php?c=empleado&a=listTurno");
                }else{
                    require_once 'view/header.php';
                    require_once 'view/empleado/atendido.php';
                    require_once 'view/footerNButton.php';
                }
                break;
        }
    }
}
?>
