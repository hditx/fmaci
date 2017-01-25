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
      require_once "view/header.php";
      require_once "view/cola/colaEdit.php";
      require_once "view/footer.php";
  }
  public function save(){
      $t=$_REQUEST['nombre'];
      $temp = new Cola($t);
      echo "Estoy guardando la cola " . $temp->getNombreCola();
      header("Location: index.php");
  }
  public function eliminar(){
      echo "Eliminando cola ". $_REQUEST['id'];
      Cola::delete($_REQUEST['id']);
      header("Location: index.php");
  }
}
?>