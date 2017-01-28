<?php 
require_once 'config/abre_conexion.php';
class Cola{
    //reformular clase
    private $idCola;
    private $nombreCola;
    private $tipoAtencionCliente;
    private $tipoCola; //jerarquia
    private $tipoObraSocial;
    
    public function __construct($idCola, $nombre = "", $tipoAtencionCliente = "", $tipoCola = "", $tipoObraSocial = ""){
            $this->setIdCola($idCola);
            $this->setNombreCola($nombre);
            $this->setTipoAtencionCliente($tipoAtencionCliente);
            $this->setTipoCola($tipoCola);
            $this->setTipoObraSocial($tipoObraSocial);
    }
    
    function getIdCola() {
        return $this->idCola;
    }

    function setIdCola($idCola) {
        $this->idCola = $idCola;
    }

        public function getNombreCola() {
        return $this->nombreCola;
    }

    public function getTipoAtencionCliente() {
        return $this->tipoAtencionCliente;
    }

    public function getTipoCola() {
        return $this->tipoCola;
    }

    public function getTipoObraSocial() {
        return $this->tipoObraSocial;
    }

    public function setNombreCola($nombreCola) {
        $this->nombreCola = $nombreCola;
    }

    public function setTipoAtencionCliente($tipoAtencionCliente) {
        $this->tipoAtencionCliente = $tipoAtencionCliente;
    }

    public function setTipoCola($tipoCola) {
        $this->tipoCola = $tipoCola;
    }

    public function setTipoObraSocial($tipoObraSocial) {
        $this->tipoObraSocial = $tipoObraSocial;
    }
    public function save(){
        try {
            $mdb =  DataBase::getDb();
            if($this->getIdCola() != null){
            $sql = "UPDATE Cola SET nombreCola           = '".$this->getNombreCola()."', "
                                 . "tipoCola             = '".$this->getTipoCola()."', "
                                 . "tipoObraSocial       = '".$this->getTipoObraSocial()."',"
                                 . "tipoAtencionCliente  = '".$this->getTipoAtencionCliente()."' "
                 . " WHERE idCola = ".$this->getIdCola();
            }else{
                $sql = "INSERT INTO Cola(nombreCola, tipoCola, tipoObraSocial, tipoAtencionCliente) VALUES ("
                        . "'".$this->getNombreCola()."', "
                        . "'".$this->getTipoCola()."', "
                        . "'".$this->getTipoObraSocial()."', "
                        . "'".$this->getTipoAtencionCliente()."' "
                        . ")";
            }
            echo $sql;
            $temp = $mdb->prepare($sql);
            echo "asdsa";
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
                $data[] = new Cola($fila['idCola'], $fila['nombreCola'], $fila['tipoAtencionCliente'], $fila['tipoCola'], $fila['tipoObraSocial']);
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
                    $resultado[0]['tipoAtencionCliente'], $resultado[0]['tipoCola'], $resultado[0]['tipoObraSocial']);
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;        
    }
}
//$nombre = $_POST["nombre"];
//$tipoAtencionCliente = $_POST["apellido"];
//$tipoCola = $_POST["direccion"];
//$cola1 = new Cola($nombre, $tipoAtencionCliente, $tipoCola);
//echo "  
//<p>Volver.</p> 
//<p><a href='javascript:history.go(-1)'>ATRÁS</a></p>  
//";  
?>   
