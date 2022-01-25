<?php

include 'Database/Conexion.php';


class N_reporte {


  
    //Reporte

    public function __construct() {
        $this->con = new Conexion();

    }

    public function buscaProdu() {
        $sql = "SELECT * from productos";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }

    public function deleteProducto() {
        $sql = "DELETE from productos
                        WHERE idProducto='$this->idProducto'"; 
        $con1 = $this->con->conectar()->query($sql);
        return $con1;
    }

    public function edicionProdu(){
        $sql = "UPDATE productos SET nombreProducto = '$this->nombreProducto', cantidad = '$this->cantidad', precioUnitario = '$this->precioUnitario' WHERE idProducto = '$this->idProducto'";
        $con1 = $this->con->conectar()->query($sql);
        return $con1;
        
    }

    public function creaProdu(){
        $sql = "INSERT productos  (nombreProducto, cantidad, precioUnitario) VALUES ('$this->nombreProducto','$this->cantidad','$this->precioUnitario')";
        $con1 = $this->con->conectar()->query($sql);
        return $con1;
        
    }


    public function set($atr, $val) {
        $this->$atr = $val;
    }

    public function get($atr) {
        return $this->$atr;
    }

    
}
?>


