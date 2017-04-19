<?php
require_once 'model/cola.php';
require_once 'model/Turno.php';
require_once 'config/DataBase.php';
require_once 'model/Empleado.php';
require_once 'model/Historial.php';
require_once 'model/Cliente.php';

class EmpleadoController{
    public function index(){
        $empleados = Empleado::getEmpleado();
        require_once 'view/header.php';
        require_once 'view/empleado/logueo.php';
        require_once 'view/footer.php';
    //    header("Location: index.php?c=empleado&a=listTurno");
    }
    
    public function listTurno(){
        $idEmpleado = $_REQUEST['idEmpleado'];
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
    }
    
    public function otrasColas(){
        $idEmpleado = $_REQUEST['idEmpleado'];
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
    }
    
    public function enEstado(){
        $idEmpleado = $_REQUEST['idEmpleado'];
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
        switch ($_REQUEST['estado']){
            case 1:
            case 4:
                //ATENDIDO Y ABANDONO
                if(isset($_REQUEST['dni']) && isset($_REQUEST['name'])){
                    Cliente::saveCliente($_REQUEST['name'], $_REQUEST['apellido'], $_REQUEST['dni'],
                            $_REQUEST['telefono']);
                    echo "save";
                }
                Empleado::actualizar($_REQUEST['id'], $_REQUEST['estado']);
                Empleado::saveEstado($_REQUEST['id'], $_REQUEST['estado'], $_REQUEST['idEmpleado']);
                $idEmpleado = $_REQUEST['idEmpleado'];
                header("Location: index.php?c=empleado&a=listTurno&idEmpleado=$idEmpleado");
                break;
            case 2:
                //LLAMADO
                Empleado::saveEstado($_REQUEST['id'], $_REQUEST['estado'], $_REQUEST['idEmpleado']);
                Empleado::actualizar($_REQUEST['id'], $_REQUEST['estado']);
                $listLlamado = Historial::history($_REQUEST['id']);
                $d = count($listLlamado);
                $id = $_REQUEST['id'];
                $turno = Turno::getTurnoUnico($id);
                $idEmpleado = $_REQUEST['idEmpleado'];
                if(isset($_REQUEST['espera'])){
                    header("Location: index.php?c=empleado&a=index");
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
                Empleado::saveEstado($_REQUEST['id'], $_REQUEST['estado'], $_REQUEST['idEmpleado']);
                Empleado::actualizar($_REQUEST['id'], $_REQUEST['estado']);
                $id = $_REQUEST['id'];
                $idEmpleado = $_REQUEST['idEmpleado'];
                $turno = Turno::getTurnoUnico($id);
                if(isset($_REQUEST['espera'])){
                    header("Location: index.php?c=empleado&a=index");
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