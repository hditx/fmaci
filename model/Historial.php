<?php
require_once 'config/DataBase.php';

class Historial{
  private $idHistorial;
  private $idTurno;
  private $fechaHora;
  private $estado;
  private $idEmpleado;
  private $hora;
  private $fecha;
  
  function __construct($idHistorial, $idTurno, $fechaHora, $estado, $idEmpleado, $fecha, $hora) {
      $this->setIdHistorial($idHistorial);
      $this->setIdTurno($idTurno);
      $this->setFechaHora($fechaHora);
      $this->setEstado($estado);
      $this->setIdEmpleado($idEmpleado);
      $this->setFecha($fecha);
      $this->setHora($hora);
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
  
  public function getHora(){
      return $this->hora;
  }
  
  public function getFecha(){
      return $this->fecha;
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
  
  public function setHora($hora){
      $this->hora = $hora;
  }
  
  public function setFecha($fecha){
      $this->fecha = $fecha;
  }

    public static function history($id){
      try {
          $mdb =  DataBase::getDb();
          $sql = "SELECT idHistorial, idTurno, fechaHora, estado, idEmpleado, DATE(fechaHora) AS fecha, TIME(fechaHora) AS hora FROM HistorialEstado WHERE idTurno = $id AND DATE(fechaHora) = CURDATE() AND estado = 1 ORDER BY fechaHora DESC";
          $temp = $mdb->prepare($sql);
          $temp->execute();
          $resultado = $temp->fetchAll();
          foreach ($resultado as $fila){
              $data[] = new Historial($fila['idHistorial'], $fila['idTurno'],$fila['fechaHora'], $fila['estado'], $fila['idEmpleado'], $fila['fecha'], $fila['hora']);
          }
          $mdb = null;
      } catch (PDOException $e) {
          print "¡Error!: " . $e->getMessage() . "<br/>";
          die();
      }
      return $data;
    }
}

?>
