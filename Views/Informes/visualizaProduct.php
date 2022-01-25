<?php 
$produ = $this->buscarProducto();
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>PRODUCTOS</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>

        <div class="container" style="margin-top:15rem">
            
            <?php if (isset($_SESSION['usuario']) && isset($_SESSION['nombre']) ) { ?>
                <a   title='Eliminar Dieta' class='btn btn-info' style="margin-down:5rem" href="<?= url ?>reporte/creaProducto">
                    <h3> CREAR PRODUCTO </h3>
                </a> 
                   
            <?php }else { ?>

                <a   title='Eliminar Dieta' class='btn btn-danger' href="http://localhost//programacion-web/products-crud/">
                    <h3> ATRAS </h3>
                </a><BR>
                <?php } ?>

        </div>
        <div class="container" style="margin-top:2rem">
            <table class="table" >
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad en Stock</th>
                    <th scope="col">Precio Unitario</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($valor = mysqli_fetch_array($produ)) { ?>
                    <tr>
                        <td scope="row"><?= $valor['nombreProducto'] ?></td>
                        <td scope="row"><?= $valor['cantidad'] ?></td>
                        <td scope="row"><?= $valor['precioUnitario'] ?></td>

                        <?php if (isset($_SESSION['usuario']) && isset($_SESSION['nombre']) ) { ?>
                            <td ><a   title='Eliminar Dieta' class='btn btn-info' href="<?= url ?>reporte/vw_editarProducto?idProducto=<?= $valor['idProducto'] ?>">
                                <img src="../images/engranaje.svg" alt="" style="width: 30px; height: 30px;">
                            </a></td>
                            <td ><a   title='Eliminar Dieta' class='btn btn-danger' href="<?= url ?>reporte/vw_eliminarProducto?idProducto=<?= $valor['idProducto'] ?>">
                                <img src="../images/eliminar.svg" alt="" style="width: 30px; height: 30px;">
                            </a></td>
                        <?php } ?>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>


