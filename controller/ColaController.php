<?php
require_once "model/cola.php";
require_once 'model/Empleado.php';

class ColaController{
  public function index(){
      $data = Cola::getList();
      require_once "view/header.php";
      require_once "view/cola/cola.php";
      require_once "view/footer.php";
  }
  
  public function crear(){
      $tmp = new Cola(null);
      $padres = Cola::getList();
      $empleados = Empleado::getEmpleado();
      require_once "view/header.php";
      require_once "view/cola/colaEdit.php";
      require_once "view/footer.php";
  }
  public function save(){
      if(isset($_REQUEST['idCola'])){
          $temp = Cola::get($_REQUEST['idCola']);
      }
      else{
         $temp = new Cola(null);
      }
      $temp->setNombreCola($_REQUEST['nombreCola']);
      $temp->setHijoDe($_REQUEST['idPadre']);
      $temp->setIdEmpleado($_REQUEST['idEmpleado']);
      $temp->setSiguiente($_REQUEST['siguiente']);
      $temp->setLetra($_REQUEST['letra']);
      $temp->save();
      echo "Estoy guardando la cola " . $temp->getNombreCola();
      header("Location: index.php?c=cola");
      
  }
  public function eliminar(){
      echo "Eliminando cola ". $_REQUEST['id'];
      Cola::delete($_REQUEST['id']);
      header("Location: index.php?c=cola");
  }
  public function modificar(){
      $tmp = Cola::get($_REQUEST['id']);
      $padres = Cola::getList();
      $empleados = Empleado::getEmpleado();
      require_once "view/header.php";
      require_once "view/cola/colaEdit.php";
      require_once "view/footer.php";
  }
}
?>