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
        $colas = Cola::getList();
        require_once 'view/header.php';
        require_once 'view/administrador/listEmpleado.php';
        require_once 'view/footerNButton.php';
    }
    
    public function crear(){
        $tmp = new Empleado(null);
        $colas = Cola::getList();
        require_once 'view/header.php';
        require_once 'view/administrador/empleadoEdit.php';
        require_once 'view/footerNButton.php';
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
            $nuevo = 0;
        }else{
            $tmp = new Empleado(null);
            $nuevo = 1;
        }
        $idCola = $_REQUEST['idCola'];
        $tmp->setNombre($_REQUEST['nombre']);
        $tmp->setApellido($_REQUEST['apellido']);
        $tmp->save();
        if($nuevo == 1){
            $id = Empleado::getNuevoEmpleado();
        }else{
            $id = $_REQUEST['idEmpleado'];
        }
        Empleado::deleteUnion($id);
        foreach ($idCola as $union){
            Empleado::saveUnion($id, $union);
        }
        header("Location: index.php?c=administrador&a=abmEmpleado");
    }
    
    public function modificar(){
        $tmp = Empleado::get($_REQUEST['id']);
        $asignadas = Empleado::getAsignadas($_REQUEST['id']);
        $colas = Cola::getList();
        $asig = array();
        for ($i = 0; $i < count($asignadas) ; $i++){
            $asig += [$asignadas[$i] => $asignadas[$i]];   
        }
        require_once 'view/header.php';
        require_once 'view/administrador/empleadoEdit.php';
        require_once 'view/footerNButton.php';        
    }
}
?>
