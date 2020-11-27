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
        $estadoTurno = $_REQUEST['estado'];
        $idTurno = $_REQUEST['id'];
        Empleado::saveSession($_SESSION['usuario'], (isset($idTurno) ? $idTurno : "null"),
                (isset($estadoTurno) ? $estadoTurno : "null"));
        switch ($estadoTurno){
            case 2:
            case 3:
            case 4:
                $bloqueo = false;
                $_SESSION['empleadoEstado'] = 0;
                //ATENDIDO Y ABANDONO
                if($estadoTurno == 2 || $estadoTurno == 4){
                    Turno::setEnEsperaObjeto($idTurno, 1);
                }
                if(isset($_REQUEST['dni']) && isset($_REQUEST['name'])){
                    Cliente::saveCliente($_REQUEST['name'], $_REQUEST['apellido'], $_REQUEST['dni'],
                            $_REQUEST['telefono']);
                }
                Empleado::actualizar($idTurno, $estadoTurno);
                Empleado::saveEstado($idTurno, $estadoTurno, $_REQUEST['idEmpleado']);
                $idEmpleado = $_REQUEST['idEmpleado'];
                if($_REQUEST['mostrar'] == 1){
                    header("Location: index.php?c=empleado&a=estadoTurno&estado=3&idEmpleado=$idEmpleado&id=$idTurno");
                }else{
                    header("Location: index.php?c=empleado&a=listTurno&idEmpleado=$idEmpleado");
                }                    
                break;
            case 1:
                //LLAMADO
                $bloqueo = true;
                if($idTurno == null){
                    header("Location: index.php");
                }
                if($_SESSION['inicio'] != 1){
                    if($_REQUEST['enEspera'] != 1){
                        Empleado::saveEstado($idTurno, $estadoTurno, $_REQUEST['idEmpleado']);
                        Empleado::actualizar($idTurno, $estadoTurno);
                    }else{
                        if($_REQUEST['enEspera'] == 1){
                            Empleado::saveEstado($idTurno, 3, $_REQUEST['idEmpleado']);
                            Turno::setEnEsperaObjeto($idTurno, 2);
                            Empleado::actualizar($idTurno, 3);
                        }
                    }
                }
                $_SESSION['inicio'] = 0;
                $listLlamado = Historial::history($idTurno);
                $d = count($listLlamado);
                $id = $_REQUEST['id'];
                $turno = Turno::getTurnoUnico($id);
                $idEmpleado = $_REQUEST['idEmpleado'];
                $_SESSION['empleadoEstado'] = 1; 
                require_once 'view/header.php';
                require_once 'view/empleado/llamarTurno.php';
                require_once 'view/footerNButton.php';
                break;
        }
    }
    
    public function refreshEspera(){
        $turno = Turno::getTurnoUnico($_REQUEST['id']);
        require_once 'view/empleado/refreshEspera.php';
    }
}
?>
