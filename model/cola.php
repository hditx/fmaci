<?php 
require_once 'config/DataBase.php';
class Cola{
    
    private $idCola;
    private $nombreCola;
    private $hijoDe;
    private $siguiente;
    private $letra;
    
    public function __construct($idCola, $nombre = "", $hijoDe = "", $siguiente = "", $letra = ""){
            $this->setIdCola($idCola);
            $this->setNombreCola($nombre);
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

    function getHijoDe() {
        return $this->hijoDe == null ? "null" : $this->hijoDe;
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
                                 . "hijoDe       = ".$this->getHijoDe().","
                                 . "siguiente   = " .$this->getSiguiente(). ","
                                 . "letra       ='".$this->getLetra()."' "
                 . " WHERE idCola = ".$this->getIdCola();
            }else{
                $sql = "INSERT INTO Cola(nombreCola, hijoDe, siguiente, letra) VALUES ("
                        . "'".$this->getNombreCola()."', "
                        . $this->getHijoDe().","
                        . $this->getSiguiente(). ","
                        . "'".$this->getLetra()."' "
                        . ")";
            }
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
                $data[] = new Cola($fila['idCola'], $fila['nombreCola'], $fila['hijoDe'], 
                        $fila['siguiente'], $fila['letra']);
            }
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function getCola($id){
        
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare("SELECT * FROM Cola WHERE idEmpleado =".$id);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            $data = new Cola($resultado[0]['idCola'], $resultado[0]['nombreCola'], $resultado[0]['hijoDe'], 
                        $resultado[0]['siguiente'], $resultado[0]['letra']);
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }

    public static function getColaAsignadas($id){
        
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare("SELECT idCola FROM cola_empleado WHERE idEmpleado =".$id);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            foreach ($resultado as $r){
                $data[] = $r['idCola'];
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
                $data[] = new Cola($fila['idCola'], $fila['nombreCola'], $fila['hijoDe'], 
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
                $data[] = new Cola($fila['idCola'], $fila['nombreCola'], $fila['hijoDe'], 
                        $fila['siguiente'], $fila['letra']);
            }
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function getListId(){
        try {
            $mdb =  DataBase::getDb();
            $sql = 'SELECT idCola FROM Cola WHERE letra IS NOT NULL';
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            foreach($resultado as $fila) {
                $data[] = new Cola($fila['idCola']);
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
            $data = new Cola($resultado[0]['idCola'], $resultado[0]['nombreCola'], $resultado[0]['hijoDe'], $resultado[0]['siguiente'],
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
            $data = new Cola($resultado[0]['idCola'], $resultado[0]['nombreCola'], $resultado[0]['hijoDe'], $resultado[0]['siguiente'],
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
    // BUSCAR DONDE LO USO Y MODIFICARLO!!
    public static function getIdEmpleadoObjeto($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT idEmpleado FROM Cola WHERE idCola = ". $id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            return $resultado[0]['idEmpleado'];
            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public static function getColaTodo(){
        try {
            $mdb =  DataBase::getDb();
            $temp = $mdb->prepare("SELECT * FROM Cola");
            $temp->execute();
            $resultado = $temp->fetchAll(); 
            $data = new Cola($resultado[0]['idCola'], $resultado[0]['nombreCola'], $resultado[0]['hijoDe'], 
                        $resultado[0]['siguiente'], $resultado[0]['letra']);
            $mbd = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }
    
    public static function getNombreColaObjeto($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT nombreCola FROM Cola WHERE idCola = ". $id;
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            return $resultado[0]['nombreCola'];
            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }        
    }
    
    public static function getColaReciente(){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT idCola FROM Cola WHERE fechaCreacion = (SELECT MAX(fechaCreacion) FROM Cola)";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            return $resultado[0]['idCola'];
            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }        
    }
    
    public static function getEmpleadoAsignado($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT nombre FROM Empleado WHERE idEmpleado IN (SELECT idEmpleado FROM cola_empleado WHERE idCola = ".$id.")";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $resultado = $temp->fetchAll();
            foreach ($resultado as $fila){
                $data[] = $fila['nombre'];
            }
            return $data;
            $mdb = null;            
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }    
    }
}
?>   
