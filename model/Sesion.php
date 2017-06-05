<?php require_once 'config/DataBase.php';
class Sesion{
    private $idSesion;
    private $idUsuario;
    private $idTurno;
    private $estado;
    private $ultimaSesion;
    
    function __construct($idSesion, $idUsuario = "", $idTurno = "", $estado = "", $ultimaSesion = ""){
        $this->setIdSesion($idSesion);
        $this->setIdUsuario($idUsuario);
        $this->setIdTurno($idTurno);
        $this->setEstado($estado);
        $this->setUltimaSesion($ultimaSesion);
    }
    function getIdSesion() {
        return $this->idSesion;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getIdTurno() {
        return $this->idTurno;
    }

    function getEstado() {
        return $this->estado;
    }

    function getUltimaSesion() {
        return $this->ultimaSesion;
    }

    function setIdSesion($idSesion) {
        $this->idSesion = $idSesion;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdTurno($idTurno) {
        $this->idTurno = $idTurno;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setUltimaSesion($ultimaSesion) {
        $this->ultimaSesion = $ultimaSesion;
    }
    
    public static function getLastSession($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM SesionEmpleado WHERE idUsuario =$id AND ultimaSesion = (SELECT MAX(ultimaSesion) FROM SesionEmpleado WHERE idUsuario = $id)";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            $mdb = null;
            $data = new Sesion ($resultado[0]['idSesion'], $resultado[0]['idUsuario'], 
                    $resultado[0]['idTurno'], $resultado[0]['estado'], $resultado[0]['ultimaSesion']);
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
}
?>
