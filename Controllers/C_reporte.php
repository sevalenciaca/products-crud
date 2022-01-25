<?php

error_reporting(E_ALL);
include 'Models/N_reporte.php';
include_once 'Database/Conexion.php';


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_reporte
 *
 * 
 */
class C_reporte extends Enrutador {

    private $modelo;


    public function __construct() {
        $this->modelo = new N_reporte();

    }

    public function index() {
        session_start();
        if (isset($_SESSION['usuario']) && isset($_SESSION['nombre']) ) {
            $this->vista("visualizaProduct");
        } else {
            $this->vista("inicio");
        }
    }

    public function indexx() {
        session_start();
        $this->vista("visualizaProduct");

    }



    public function registroUsuario(){
        session_start();
        $this->vista("cabecera");
        if (isset($_SESSION['usuario']) && isset($_SESSION['nombre']) ) {
            $this->vista("inicio");
        } else{
            $this->vista("registrarUsuario");
        }
    }


    public function buscarProducto() {
        session_start();
        $this->vista("cabecera");
        $con = $this->modelo->buscaProdu();
        return $con;
    }

    public function vw_eliminarProducto() {
        $this->modelo->set("idProducto", $_GET['idProducto']);
        $con = $this->modelo->deleteProducto();  
        if ($con) {
            header("Location: " . url . "reporte/indexx");
        } else {
            header("Location: " . url . "reporte/procesoCancelado?act=Ha ocurrido un error en la eliminación del producto &alerta=alert-danger");
        }
    }
    public function vw_editarProducto() {
        session_start();
        $this->vista("cabecera");
        if (isset($_SESSION['usuario']) && isset($_SESSION['nombre']) ) {
            $this->vista("edicion");
        } else{
            $this->vista("inicio");
        }
    }

    public function editarProducto(){
        $this->modelo->set("idProducto", $_POST['idProducto']);
        $this->modelo->set("nombreProducto", $_POST['nombreProducto']);
        $this->modelo->set("cantidad", $_POST['cantidad']);
        $this->modelo->set("precioUnitario", $_POST['precioUnitario']);
        $con = $this->modelo->edicionProdu();
        
        if ($con) {
            header("Location: " . url . "reporte/indexx");
        }

    }

    public function creaProducto() {
        session_start();
        $this->vista("cabecera");
        if (isset($_SESSION['usuario']) && isset($_SESSION['nombre']) ) {
            $this->vista("creacion");
        } else{
            $this->vista("inicio");
        }
    }

    public function crearProducto(){
        $this->modelo->set("nombreProducto", $_POST['nombreProducto']);
        $this->modelo->set("cantidad", $_POST['cantidad']);
        $this->modelo->set("precioUnitario", $_POST['precioUnitario']);
        $con = $this->modelo->creaProdu();
        
        if ($con) {
            header("Location: " . url . "reporte/indexx");
        }

    }

}
?>

