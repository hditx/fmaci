<?php 
require_once 'config/DataBase.php';
class Cola{
    
    private $idCola;
    private $nombreCola;
    private $idEmpleado;
    private $hijoDe;
    private $siguiente;
    private $letra;
    
    public function __construct($idCola, $nombre = "", $idEmpleado = "", $hijoDe = "", $siguiente = "", $letra = ""){
            $this->setIdCola($idCola);
            $this->setNombreCola($nombre);
            $this->setIdEmpleado($idEmpleado);
            $this->setHijoDe($hijoDe);
            $this->setSiguiente($siguiente);
            $this->setLetra($letra);
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

    function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    function getHijoDe() {
        return $this->hijode == null ? "null" : $this->hijoDe;
    }
    
    function getSiguiente() {
        return $this->siguiente;
    }

    function getLetra() {
        return $this->letra;
    }

    function setSiguiente($siguiente) {
        $this->siguiente = $siguiente;
    }

    function setLetra($letra) {
        $this->letra = $letra;
    }

    
    function getHijoDeObjeto() {
        return Cola::get($this->hijoDe);
    }

    function setHijoDe($hijoDe) {
        $this->hijoDe = $hijoDe < 0 ? NULL : $hijoDe;
    }

    public function save(){
        try {
            $mdb =  DataBase::getDb();
            if($this->getIdCola() != null){
            $sql = "UPDATE Cola SET nombreCola           = '".$this->getNombreCola()."', "
                                 . "idEmpleado             = '".$this->getIdEmpleado()."', "
                                 . "hijoDe       = ".$this->getHijoDe().","
                                 . "siguiente   = " .$this->getSiguiente(). ","
                                 . "letra       ='".$this->getLetra()."' "
                 . " WHERE idCola = ".$this->getIdCola();
            }else{
                $sql = "INSERT INTO Cola(nombreCola, idEmpleado, hijoDe, siguiente, letra) VALUES ("
                        . "'".$this->getNombreCola()."', "
                        . "'".$this->getIdEmpleado()."', "
                        . $this->getHijoDe().","
                        . $this->getSiguiente(). ","
                        . "'".$this->getLetra()."' "
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
            $temp = $mdb->prepare('SELECT * FROM Cola ORDER BY nombreCola');
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            foreach($resultado as $fila) {
                $data[] = new Cola($fila['idCola'], $fila['nombreCola'], $fila['idEmpleado'], $fila['hijoDe'], 
                        $fila['siguiente'], $fila['letra']);
            }
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    public static function getList2(){
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare('SELECT * FROM Cola WHERE hijoDe IS NULL');
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            foreach($resultado as $fila) {
                $data[] = new Cola($fila['idCola'], $fila['nombreCola'], $fila['idEmpleado'], $fila['hijoDe'], 
                        $fila['siguiente'], $fila['letra']);
            }
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    public static function getList3($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM Cola WHERE hijoDe = ".$id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            foreach($resultado as $fila) {
                $data[] = new Cola($fila['idCola'], $fila['nombreCola'], $fila['idEmpleado'], $fila['hijoDe'], 
                        $fila['siguiente'], $fila['letra']);
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
                    $resultado[0]['idEmpleado'], $resultado[0]['hijoDe'], $resultado[0]['siguiente'],
                    $resultado[0]['letra']);
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
                    $resultado[0]['idEmpleado'], $resultado[0]['hijoDe'], $resultado[0]['siguiente'],
                    $resultado[0]['letra']);
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function incrementar($id){
        try {
            $mdb =  DataBase::getDb();
            $temp = Cola::get($id);
            $sql = "UPDATE Cola SET siguiente           = ".($temp->getSiguiente() + 1) 
                 . " WHERE idCola = ". $id;
            echo $sql;
            $temp = $mdb->prepare($sql);
            $temp->execute();
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }        
    }
    
    public static function getNumeroSiguiente($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT siguiente FROM Cola WHERE idCola = ". $id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            return $resultado[0]['siguiente'];
            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }        
    }
}
?>   
