<?php session_destroy() ?>



<div class="container" style="margin-top:6rem">

    <div class="row">

        <div class="col-sm-7" align="justify" >

            <br>

            <h3><b>DE QUE TRATA ESTE APLICATIVO</b><h3>

                    <br>

                    <h5 class="portada">ESTE APLICATIVO TRATA DE UN CURD DE PRODUCTOS DINAMICO
                        CONECTADO A UNA BASE DE DATOS </h5>

            
            <center>
                <img  src="<?= url ?>Resources/Imagenes/product.jpg" align='rigth' height="310" />
            </center>
        </div>

        
<br><br><br><br><br><br>
<center>
<div class="col-sm-5 alert">

    <h4 class="titulo"><b>INGRESAR</b></h4>

    <form method="POST" action="<?= url ?>usuario/login">

        <div class="form-group">

            <div class="col-12">

                <label class="sr-only" for="usuario">Usuario</label>

                <div class="input-group mb-2 mb-sm-0">

                    <div class="input-group-addon"><b>Usuario</b></div>

                    <input type="text" class="form-control col-12" id="usuario" placeholder="Usuario" name="usuario" autocomplete="off"/>

                </div>

            </div>

        </div>

        <div class="form-group">

            <div class="col-12">

                <label class="sr-only" for="clave">Contraseña</label>

                <div class="input-group mb-2 mb-sm-0">

                    <div class="input-group-addon"><b>Contraseña</b></div>

                    <input type="password" class="form-control col-12" id="clave" placeholder="Contraseña" name="clave" autocomplete="off"/>

                </div>

            </div>

        </div>

        

        <div class="form-group ">
            <div class ="row">
                <center>

                    <input type="submit" value="Aceptar" id="aceptar" class="btn btn-info" style="cursor: pointer; width: 10rem"/>
                    <a type="buttom" value="Registrarse" id="crear_usuario" class="btn btn-info" style="cursor: pointer; width: 10rem "href="<?= url ?>reporte/registroUsuario">Registrarse</a>
                    <a type="buttom" value="Registrarse" id="crear_usuario" class="btn btn-info" style="cursor: pointer; width: 20rem "href="<?= url ?>reporte/indexx">Ingresar a los registros</a><br/>
                    <!-- <a type="buttom" class="btn btn-link" href="<?= url ?>reporte/registroUsuario" >Registrarse</a> -->

                </center>
            </div>
        </div>

        <div  style="text-align: right">

        <br>


        </div>



            </form>

            <?php if (isset($_GET['validar'])) { ?>

                <div class="alert alert-danger">

                    <p>

                    <center>

                        <strong><?= $_GET['validar'] ?></strong>

                    </center>



                </div>

            <?php } ?>

        </div>

    </div>



</div>
</center>
