<?php

$connect = mysqli_connect("localhost", "root", "", "productos");
$con1= array();

?>

<div class="container">
    <form name="formulario" method="POST" action="<?= url ?>usuario/registrarUsuario">
        <div class="row">
                <div class="form-group col-sm-6">
                    <label for="password">Nombre completo:</label>
                    <input class="form-control" type="text" name="nombre_c" id="nombre_c" />

                    <label for="password">Documento:</label>
                    <input class="form-control" type="text" name="documento_c" id="documento_c" />

                    <label for="tipoUsr">Seleccione tipo de proceso al que pertenece:</label>
                    <select name="proceso_c" id="proceso_c" class="form-control" required>
                        <option value=""></option>
                        <option value="Sistemas">Sistemas</option>
                        <option value="Auditoría">Auditoría</option>
                        <option value="Tercero">Tercero</option>
                        <option value="Administrativo">Administrativo</option>
                        <option value="Administrativo">cliente</option>
                    </select>
                  
                    <label for="password">Ingrese su nombre de usuario (Debe ser su número de identidicación):</label>
                    <input class="form-control" type="text" name="usuario_c" id="usuario_c" minlength="5" required />

                    <label for="password">Digite su clave:</label>
                    <input class="form-control" type="text" name="password" id="password" minlength="5" required />
                <br>
                
        </div>

            <br>

            <center>

                <input  type="submit" value="Registrarse" class="btn btn-success">
                <a title='Atras'  class="btn btn-danger" href="<?= url ?>">Atras</a>

            </center>
    </form>
</div>



</html>

<script>
function message(){
Swal.fire({
  icon: 'success',
  title: 'Usuario creado correctamente',
  showConfirmButton: true,
})
}
</script>






 