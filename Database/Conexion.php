<?php

class Conexion {

    private $host;
    private $usu;
    private $pass;
    private $db;
    

    function __construct() {
        $this->host = "localhost";
        $this->usu = "root";
        $this->pass = "";
        $this->db = "productos";

        $this->conectar();
    }

    public function conectar() {
        $con = new mysqli($this->host, $this->usu, $this->pass, $this->db);
        $con->set_charset("utf8");    
        return $con;
    }

}
