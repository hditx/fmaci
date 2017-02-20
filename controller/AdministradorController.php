<?php
require_once 'model/cola.php';
require_once 'model/Turno.php';
require_once 'config/DataBase.php';
require_once 'model/Empleado.php';

class AdministradorController{
    public function index(){
        require_once 'view/header.php';
        require_once 'view/administrador/menuAdministrador.php';
        require_once 'view/footer.php';
    }
    
    public function abmEmpleado(){
        $tmp = new Empleado(null);
        $empleados = Empleado::getEmpleado();
        require_once 'view/header.php';
        require_once 'view/administrador/listEmpleado.php';
        require_once 'view/footer.php';
    }
    
    public function crear(){
        $tmp = new Empleado(null);
        require_once 'view/header.php';
        require_once 'view/administrador/empleadoEdit.php';
        require_once 'view/footer.php';
    }


    public function eliminar(){
        Empleado::delete($_REQUEST['id']);
        header("Location:index.php?c=administrador&a=abmEmpleado");
    }


    public function informe(){
        echo "en progreso";
    }
    
    public function save(){
        if(isset($_REQUEST['idEmpleado'])){
            $tmp = Empleado::get($_REQUEST['idEmpleado']);
        }else{
            $tmp = new Empleado(null);
        }
        $tmp->setNombreApellido($_REQUEST['apellidoNombre']);
        $tmp->save();
        header("Location: index.php?c=administrador&a=abmEmpleado");
    }
    public function modificar(){
        $tmp = Empleado::get($_REQUEST['id']);
        require_once 'view/header.php';
        require_once 'view/administrador/empleadoEdit.php';
        require_once 'view/footer.php';        
    }
}
?>
