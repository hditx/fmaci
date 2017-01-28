<?php
require_once "model/cola.php";

class ColaController{
  public function index(){
      $data = Cola::getList();
      require_once "view/header.php";
      require_once "view/cola/cola.php";
      require_once "view/footer.php";
  }
  
  public function crear(){
      $tmp = new Cola(null);
      require_once "view/header.php";
      require_once "view/cola/colaEdit.php";
      require_once "view/footer.php";
  }
  public function save(){
      if(isset($_REQUEST['idCola'])){
          $temp = Cola::get($_REQUEST['idCola']);
      }
      else{
     //   $t=$_REQUEST['nombre'];
         $temp = new Cola(null);
      }
      $temp->setNombreCola($_REQUEST['nombreCola']);
      $temp->setTipoAtencionCliente($_REQUEST['tipoAtencion']);
      $temp->setTipoCola($_REQUEST['tipoCola']);
      $temp->setTipoObraSocial($_REQUEST['tipoObraSocial']);
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
      require_once "view/header.php";
      require_once "view/cola/colaEdit.php";
      require_once "view/footer.php";
  }
}
?>