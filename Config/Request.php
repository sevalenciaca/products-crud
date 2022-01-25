<?php

/**
 * 
 */
class Request {

    private $controlador;
    private $metodo;

    public function __construct() {
        if (isset($_GET['url'])) {

            $url = $_GET['url'];
            $url = explode("/", $url);

            if (array_filter($url)) {
                $ruta = array_filter($url);
            } else {
                $ruta[0] = "index.php";
            }

            if ($ruta[0] == "index.php") {
                $this->controlador = "usuario";
            } else {
                $this->controlador = strtolower($ruta[0]);
            }

            if (!empty($ruta[1])) {
                $this->metodo = strtolower($ruta[1]);
            } else {
                $this->metodo = "index";
            }
        } else {
            $this->controlador = "usuario";
            $this->metodo = "index";
        }
    }

    public function get($var) {
        return $this->$var;
    }

}
