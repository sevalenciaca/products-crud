<?php

$connect = mysqli_connect("localhost", "root", "", "productos");

$idProdu = $_GET['idProducto'];
 
$sql1 = "SELECT * from productos where idProducto ='$idProdu'";
 $this->con = new Conexion();
 
 $con1 = $this->con->conectar()->query($sql1);
 
 foreach ($con1 as $key => $value) {
    $idProducto = $value['idProducto'];
    $nombreProducto = $value['nombreProducto'];
    $cantidad = $value['cantidad'];
    $precioUnitario = $value['precioUnitario'];
 }
 
 ?>



<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Hola Mundo!</title>
    </head>
    <body>
        
        <div class="container">
            <form method="POST" action="<?= url ?>reporte/editarProducto">
                <div class="form-group" style="width:10rem">
                    <label for="idProducto">Numero de producto</label>
                    <input name="idProducto" type="text" class="form-control" id="idProducto" readonly value="<?= $idProducto ?>" >
                </div>
                <div class="form-group" style="width:50rem">
                    <label for="nombreProducto">Nombre Producto</label>
                    <input name="nombreProducto" type="text" class="form-control" id="nombreProducto" value="<?= $nombreProducto ?>">
                </div>
                <div class="form-group" style="width:10rem">
                    <label for="cantidad">Cantidad en Stock</label>
                    <input name="cantidad" type="text" class="form-control" id="cantidad" value="<?= $cantidad ?>">
                </div>
                <div class="form-group" style="width:50rem">
                    <label for="precioUnitario">Precio Unitario</label>
                    <input name="precioUnitario" type="text" class="form-control" id="precioUnitario" value="<?= $precioUnitario ?>">
                </div>

                <input type="submit" value="ActualizarDatos" class="btn btn-success" />
            </form>
        </div>


    </body>
</html>