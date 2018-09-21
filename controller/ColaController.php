<?php
require_once "model/cola.php";
require_once 'model/Empleado.php';

class ColaController{
  public function index(){
      $data = Cola::getList();
      require_once "view/header.php";
      require_once "view/cola/cola.php";
      require_once "view/footerNButton.php";
  }
  
  public function crear(){
      $tmp = new Cola(null);
      $padres = Cola::getList();
      $empleados = Empleado::getEmpleado();
      require_once "view/header.php";
      require_once "view/cola/colaEdit.php";
      require_once "view/footerNButton.php";
  }
  public function save(){
      if(isset($_REQUEST['idCola'])){
          $temp = Cola::get($_REQUEST['idCola']);
          $nuevo = 0;
      }
      else{
         $temp = new Cola(null);
         $nuevo = 1;
      }
      $temp->setNombreCola($_REQUEST['nombreCola']);
      $temp->setHijoDe($_REQUEST['idPadre']);
      $temp->setSiguiente($_REQUEST['siguiente']);
      $temp->setLetra($_REQUEST['letra']);
      if($_POST['madre'] == 0){          
        $temp->save();
        $empleados = $_REQUEST['idEmpleado'];
        if($nuevo == 0){
            $id = $_REQUEST['idCola'];
        }else{
            $id = Cola::getColaReciente();
        }
        Cola::deleteUnion($id);
        foreach ($empleados as $empleado){
            Cola::saveUnion($empleado, $id);
        }
      }else{
        if( $temp->getSiguiente() != null){
            $temp->save();
        }else{
            $temp->saveMother();
        }
      }
      //var_dump($temp);
      //exit();
      header("Location: index.php?c=cola");
      
  }
  public function eliminar(){
      Cola::delete($_REQUEST['id']);
      header("Location: index.php?c=cola");
  }
  
  public function modificar(){
      $tmp = Cola::get($_REQUEST['id']);
      $padres = Cola::getList();
      $empleados = Empleado::getEmpleado();
      $asignados = Cola::getAsignados($_REQUEST['id']);
      $asig = array();
      for ($i = 0; $i < count($asignados) ; $i++){
          $asig += [$asignados[$i] => $asignados[$i]];   
      }
      require_once "view/header.php";
      require_once "view/cola/colaEdit.php";
      require_once "view/footerNButton.php";
  }
}
?>
