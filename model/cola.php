<?php 
require_once 'config/DataBase.php';
class Cola{
    //reformular clase
    private $idCola;
    private $nombreCola;
    private $idEmpleado;
    private $jerarquia; 
    
    public function __construct($idCola, $nombre = "", $idEmpleado = "", $jerarquia = ""){
            $this->setIdCola($idCola);
            $this->setNombreCola($nombre);
            $this->setIdEmpleado($idEmpleado);
            $this->setJerarquia($jerarquia);
    }
    
    public function getIdCola() {
        return $this->idCola;
    }

    public function setIdCola($idCola) {
        $this->idCola = $idCola;
    }

    public function getNombreCola() {
        return $this->nombreCola;
    }

    public function setNombreCola($nombreCola) {
        $this->nombreCola = $nombreCola;
    }

    function getIdEmpleado() {
        return $this->idEmpleado;
    }

    function getJerarquia() {
        return $this->jerarquia;
    }

    function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    function setJerarquia($jerarquia) {
        $this->jerarquia = $jerarquia;
    }

    public function save(){
        try {
            $mdb =  DataBase::getDb();
            if($this->getIdCola() != null){
            $sql = "UPDATE Cola SET nombreCola           = '".$this->getNombreCola()."', "
                                 . "idEmpleado             = '".$this->getIdEmpleado()."', "
                                 . "jerarquia       = '".$this->getJerarquia()."'"
                 . " WHERE idCola = ".$this->getIdCola();
            }else{
                $sql = "INSERT INTO Cola(nombreCola, idEmpleado, jerarquia) VALUES ("
                        . "'".$this->getNombreCola()."', "
                        . "'".$this->getIdEmpleado()."', "
                        . "'".$this->getJerarquia()."' "
                        . ")";
            }
            echo $sql;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public static function getList(){
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare('SELECT * FROM Cola');
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            foreach($resultado as $fila) {
                $data[] = new Cola($fila['idCola'], $fila['nombreCola'], $fila['idEmpleado'], $fila['jerarquia']);
            }
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    public static function delete($id){
        try {
            $mdb =  DataBase::getDb();
            echo "llegue";
            $temp = $mdb->prepare("DELETE FROM Cola WHERE idCola = $id");
            $temp->execute();
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public static function get($id){
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare("SELECT * FROM Cola WHERE idCola = $id");
            $temp->execute();
            $resultado = $temp->fetchAll();
            $data = new Cola($resultado[0]['idCola'], $resultado[0]['nombreCola'], 
                    $resultado[0]['idEmpleado'], $resultado[0]['jerarquia']);
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;        
    }
    
    public static function getC($n){
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare("SELECT * FROM Cola WHERE nombreCola = $n");
            $temp->execute();
            $resultado = $temp->fetchAll();
            $data = new Cola($resultado[0]['idCola'], $resultado[0]['nombreCola'], 
                    $resultado[0]['idEmpleado'], $resultado[0]['jerarquia']);
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
}
?>   
