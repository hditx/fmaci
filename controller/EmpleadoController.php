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
        $colas = Cola::getList();
        $i = 0;
        $idEmpleado = $_REQUEST['idEmpleado'];
        $cola = Cola::getCola($idEmpleado);
        $first = array($cola, Turno::getFirstTurno($cola->getIdCola()));
        foreach($colas as $c){
            $turnos[] = array($c, Turno::getTurnoPropio($c->getIdCola()));
        }
        require_once 'view/header.php';
        require_once 'view/empleado/list.php';
        require_once 'view/footer.php';
    }
    
    public function otrasColas(){
        $colas = Cola::getList();
        $i = 0;
        $idEmpleado = $_REQUEST['idEmpleado'];
        $cola = Cola::getCola($idEmpleado);
        $first = array($cola, Turno::getFirstTurno($cola->getIdCola()));
        foreach($colas as $c){
            $turnos[] = array($c, Turno::getTurnoNoEmpleado($c->getIdCola()));
        }
        require_once 'view/header.php';
        require_once 'view/empleado/otrasColas.php';
        require_once 'view/footer.php';
    }
    
    public function enEstado(){
        $colas = Cola::getList();
        $i = 0;
        $idEmpleado = $_REQUEST['idEmpleado'];
        $cola = Cola::getColaTodo();
        $first = array($cola, Turno::getFirstTurno($cola->getIdCola()));
        foreach($colas as $c){
            $turnos[] = array($c, Turno::getTurno($c->getIdCola()));
        }
        require_once 'view/header.php';
        require_once 'view/empleado/enEstado.php';
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
                $d = 1;
                $id = $_REQUEST['id'];
                $idEmpleado = $_REQUEST['idEmpleado'];
                $temp =Turno::getLetra(Turno::getIdColaObjeto($_REQUEST['id']));
                $temp1 = Turno::getPosicionObjeto($_REQUEST['id']); 
                if(isset($_REQUEST['espera'])){
                    header("Location: index.php?c=empleado&a=index");
                }else{
                    require_once 'view/header.php';
                    require_once 'view/empleado/llamarTurno.php';
                    require_once 'view/footer.php';
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
                $temp =Turno::getLetra(Turno::getIdColaObjeto($_REQUEST['id']));
                $temp1 = Turno::getPosicionObjeto($_REQUEST['id']);
                if(isset($_REQUEST['espera'])){
                    header("Location: index.php?c=empleado&a=index");
                }else{
                    require_once 'view/header.php';
                    require_once 'view/empleado/atendido.php';
                    require_once 'view/footer.php';
                }
                break;
        }
    }
}
?>