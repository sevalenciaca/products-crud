<?php

class Enrutador {

    public function cargar(Request $request) {
        $controlador = 'C_' . $request->get("controlador");
        $metodo = $request->get("metodo");

        $ruta = ROOT . "Controllers" . DS . $controlador . ".php";

        if (is_file($ruta)) {

            include $ruta;
            $conObj = new $controlador();
            if (method_exists($conObj, $metodo)) {
                $conObj->$metodo();
            } else {
                $conObj->index();
            }
        } else {
            include ROOT . 'Controllers' . DS . 'C_error.php';
            $error = new C_error();
            $error->index();
        }
    }

    public function vista($vista) {
        $directorio1 = opendir("Views/");
        while ($archivo = readdir($directorio1)) {
            $directorio2 = "Views/$archivo/$vista.php";
            if (file_exists($directorio2)) {
                include $directorio2;
            }
        }
    }

}
