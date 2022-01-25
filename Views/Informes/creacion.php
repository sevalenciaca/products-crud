<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <
    </head>
    <body>
        
        <div class="container">
            <H2>CREACION DE PRODUCTO NUEVO</H2>
            <form method="POST" action="<?= url ?>reporte/crearProducto">
            
                <div class="form-group" style="width:50rem">
                    <label for="nombreProducto">Nombre Producto</label>
                    <input name="nombreProducto" type="text" class="form-control" id="nombreProducto" >
                </div>
                <div class="form-group" style="width:10rem">
                    <label for="cantidad">Cantidad en Stock</label>
                    <input name="cantidad" type="text" class="form-control" id="cantidad" >
                </div>
                <div class="form-group" style="width:50rem">
                    <label for="precioUnitario">Precio Unitario</label>
                    <input name="precioUnitario" type="text" class="form-control" id="precioUnitario" >
                </div>

                <input type="submit" value="CREAR" class="btn btn-success" />
            </form>
        </div>


    </body>
</html>