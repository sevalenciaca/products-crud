<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'Config/Enrutador.php';
include 'Config/Request.php';



define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS );
define('url', "http://localhost/programacion-web/products-crud/");

$enrutador = new Enrutador();
$enrutador->cargar(new Request);