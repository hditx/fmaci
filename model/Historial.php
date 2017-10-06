<?php
require_once 'config/DataBase.php';

class Historial{
  private $idHistorial;
  private $idTurno;
  private $fechaHora;
  private $estado;
  private $idEmpleado;
  
  function __construct($idHistorial, $idTurno, $fechaHora, $estado, $idEmpleado) {
      $this->setIdHistorial($idHistorial);
      $this->setIdTurno($idTurno);
      $this->setFechaHora($fechaHora);
      $this->setEstado($estado);
      $this->setIdEmpleado($idEmpleado);
  }
  
  public function getIdHistorial() {
      return $this->idHistorial;
  }

  public function getIdTurno() {
      return $this->idTurno;
  }

  public function getFechaHora() {
      return $this->fechaHora;
  }

  public function getEstado() {
      return $this->estado;
  }

  public function getIdEmpleado() {
      return $this->idEmpleado;
  }

  public function setIdHistorial($idHistorial) {
      $this->idHistorial = $idHistorial;
  }

  public function setIdTurno($idTurno) {
      $this->idTurno = $idTurno;
  }

  public function setFechaHora($fechaHora) {
      $this->fechaHora = $fechaHora;
  }

  public function setEstado($estado) {
      $this->estado = $estado;
  }

  public function setIdEmpleado($idEmpleado) {
      $this->idEmpleado = $idEmpleado;
  }
  
    public static function history($id){
      try {
          $mdb =  DataBase::getDb();
          $sql = "SELECT * FROM HistorialEstado WHERE idTurno = $id AND estado = 1 AND DATE(fechaHora) = CURDATE() ORDER BY fechaHora DESC";
          $temp = $mdb->prepare($sql);
          $temp->execute();
          $resultado = $temp->fetchAll();
          foreach ($resultado as $fila){
              $data[] = new Historial($fila['idHistorial'], $fila['idTurno'],$fila['fechaHora'], $fila['estado'], $fila['idEmpleado']);
          }
          $mdb = null;
      } catch (PDOException $e) {
          print "¡Error!: " . $e->getMessage() . "<br/>";
          die();
      }
      return $data;
    }
    
    public static function getFecha($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT DATE(fechaHora) AS fechaHora FROM HistorialEstado WHERE idHistorial =".$id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            $data = $resultado[0]['fechaHora'];
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;  
    }
    
    public static function getHora($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT TIME(fechaHora) AS fechaHora FROM HistorialEstado WHERE idHistorial =".$id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            $data = $resultado[0]['fechaHora'];
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;  
    }
}

?>
