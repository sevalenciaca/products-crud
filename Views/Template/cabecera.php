<?php
date_default_timezone_set('America/Bogota');
?>
<?php
//Comprobamos si esta definida la sesión 'tiempo'.
if (isset($_SESSION['tiempo'])) {

    //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 600000; //10min en este caso.

    //Calculamos tiempo de vida inactivo.
    $vida_session = time() - $_SESSION['tiempo'];

    //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
    if ($vida_session > $inactivo) {
        //Removemos sesión.
        session_unset();
        //Destruimos sesión.
        session_destroy();
        //Redirigimos pagina.
        header("location:" . url . "?validar=Usuario o contraseña incorrecta.");

        exit();
    }
} else {
    //Activamos sesion tiempo.
    $_SESSION['tiempo'] = time();
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link href="<?= url ?>Resources/Imagenes/ico_logo.png" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" type="text/css" href="<?= url ?>Resources/Css/menu.css" />
    <link rel="stylesheet" type="text/javascript" href="<?= url ?>Resources/js/jquery.min.js" />

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="http://code.jquery.com/jquery-1.12.1.js" integrity="sha256-VuhDpmsr9xiKwvTIHfYWCIQ84US9WqZsLfR4P7qF6O8=" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
    moment().format();
</script>

    <title>Gestion de Alimentos</title>




</head>

<div class="row" >
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

            <div class="col-sm-4">
                <center>
                    
                    <h4 style=" color:  #088182; "><b><?php echo "Gestion de Productos"; ?></h4></b> 
                    
                </center>
            </div>
            <center>
                <?php if (isset($_SESSION['usuario']) && isset($_SESSION['nombre'])) { ?>
                    <div class="col-sm-4">
                        <div class="col-12">
                            <p>
                            <h4 style= " color: #088182; "><b><strong><?= $_SESSION['nombre'] ?></strong>.</h4></b>
                                <!-- Hola <strong><?= $_SESSION['nombre'] ?></strong>. -->
                            </p>
                        </div>
                        <div class="col-12" >
                            <form action="<?= url ?>usuario/cerrarSesion">
                                <input type="submit" value="Cerrar sesión" id="cerrar" class="btn btn-primary" style="cursor: pointer" />
                            </form>
                        </div>
                    <?php } ?>
                    </div>
            </center>
        </nav>
    </header>
</div>
