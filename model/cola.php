<?php 
class Cola{
    private $idCola;
    private $nombreCola;
    private $tipoAtencionCliente;
    private $tipoCola;
    private $tipoObraSocial;

    public function __construct($nombre, $idCola, $tipoAtencionCliente = "", $tipoCola = ""){
            $this->nombreCola = $nombre;
            $this->setIdCola($idCola);
            $this->tipoAtencionCliente = $tipoAtencionCliente;
            $this->tipoCola = $tipoCola;
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
    
    public static function getList(){
        $data = [];
        $data[] = new Cola("Perfumeria", 1);
        $data[] = new Cola("Particular", 2);
        $data[] = new Cola("Obra social", 3);
        return $data;
    }
    public static function delete($id){
        
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
