<?php
require_once 'config/Impresora.php';
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
    
    public function imprimir(){
        $nombre = $_REQUEST['nombre'];
        $id = Empleado::getDniEmpleado($_REQUEST['id']); 
        require_once 'view/header.php';
        require_once 'view/administrador/imprimir.php';
        require_once 'view/footer.php';
        //Impresora::printCode($id, $nombre);
        //header('Location: index.php?c=administrador&a=abmEmpleado');
    }


    public function eliminar(){
        Empleado::delete($_REQUEST['id']);
        header("Location:index.php?c=administrador&a=abmEmpleado");
    }


    public function informe(){
        $colas = Cola::getList();
        $show = false;
        if(isset($_POST['colas'])){
            $nuevoColas = $_POST['colas'];
            $fechaInicio = $_POST['fechaInicio'];
            $fechaFin = $_POST['fechaFin'];
            if(strcmp($nuevoColas[0], "-1") == 0){
                unset($colas);
                $show = true;
                $seleccionadas = Cola::getList();
                require_once 'view/header.php';
                require_once 'view/administrador/informes.php';
                require_once 'view/footer.php';
            }else{
                unset($colas);
                $show = true;
                foreach($nuevoColas as $cola){
                    $seleccionadas[] = Cola::get($cola);
                }
                require_once 'view/header.php';
                require_once 'view/administrador/informes.php';
                require_once 'view/footer.php';
            }
        }else{
            require_once 'view/header.php';
            require_once 'view/administrador/informes.php';
            require_once 'view/footer.php';
        }
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
        $tmp->setDni($_REQUEST['dni']);
        $tmp->setPerfil($_REQUEST['perfil']);
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
        var_dump($tmp);
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
    
    public function modificarMonitor(){
        $video = Turno::monitorImg();
        require_once 'view/header.php';
        require_once 'view/administrador/modificarMonitor.php';
        require_once 'view/footer.php';
    }
    
    public function saveMonitor(){
        $video = $_POST['archivo'];
        $max = count($video);
        Turno::deleteVideo();
        for($i = 0; $i < $max ; ++$i){
            Turno::saveMonitor($video[$i]);
        }
        header('Location: index.php?c=administrador&a=index');
    }
    public function cargarImagenNuevo(){
        require_once 'view/header.php';
        require_once 'view/administrador/cargarImagen.php';
        require_once 'view/footer.php';
    }

    public function cargarImagen(){
/*	$ruta = "/media/firefly/fire1/imagenes/";*/
        $ruta = "/var/www/html/farmacentro/view/video/";
        $directorio = $ruta . basename($_FILES['archivo']['name']);
        move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio);
        try{
            $video = $_FILES['archivo']['name'];
            $mdb = DataBase::getDb();
            $sql = "UPDATE Video SET nombre = '$video'";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;
            header('Location: index.php?c=administrador&a=index');
        } catch (PDOException $e){
            print $e->getMessage();
        }
    }
}
?>
