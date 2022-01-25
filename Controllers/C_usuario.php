<?php

include 'Models/M_usuario.php';


class C_usuario extends Enrutador {

    private $modelo;

    public function __construct() {
        $this->modelo = new M_usuario();
    }

    public function index() {
        session_start();

        $this->vista("cabecera");

        if (isset($_SESSION['usuario']) && isset($_SESSION['nombre']) && isset($_SESSION['type'])) {
            // header("Location: reporte/index");
            if ($_SESSION['type']==5){
                echo '<script>location.href ="reporte/index_c";</script>'; 
            }else{
                echo '<script>location.href ="reporte/indexx";</script>';
            }
            
        } else {
            $this->vista("inicio");
        }
    }

    public function login() {

        if (isset($_POST['usuario']) && isset($_POST['clave'])) {

            $this->modelo->set("usuario", $_POST['usuario']);
            $this->modelo->set("clave", $_POST['clave']);
            $con = $this->modelo->verificarUsuario();

            foreach ($con as $key => $value) {

                if ($value['username'] != null && $value['password'] != null) {
                    $this->iniciarVariables($value['id'], $value['username'], $value['tipo'], $value['full_name']);
                } else {
                    echo 'Usuario o Contraseña incorrecta!!';
                }
            }
        } else {
            echo 'El usuario y Contraseña son requeridos!!';
        }
    }

    private function iniciarVariables($id1, $usuario, $type, $nombre) {
        session_start();
        $_SESSION['id1'] = $id1;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['type'] = $type;
        $_SESSION['nombre'] = $nombre;

       
        header("location:". url);
        
    }


    public function cerrarSesion() {
        session_start();

        if (!isset($_SESSION['usuario']) && !isset($_SESSION['type']) && !isset($_SESSION['nombre'])) {
            header("location: " . url);
            session_destroy();
        } else {
            header("location: " . url);
            session_destroy();
        }
    }

    public function actualizarClave() {

        $this->modelo->set("id", $_POST['id']);
        $this->modelo->set("usuario", $_POST['usuario']);
        $this->modelo->set("password", $_POST['password']); 
        $con = $this->modelo->updateClave();
        if ($con) {
            header("Location: " . url . "reporte/vw_Acta?act=Se ha cambiado correctamente la clave&id=" . $_POST['id']);
        } else {
            header("Location: " . url . "reporte/vw_Acta?act=Ha ocurrido un error en el cambio de la clave &alerta=alert-danger&id=" . $_POST['id']);
        }
    }

    public function registrarUsuario(){
        $this->modelo->set("nombre_c", $_POST['nombre_c']);
        $this->modelo->set("documento_c", $_POST['documento_c']);
        $this->modelo->set("proceso_c", $_POST['proceso_c']);
        $this->modelo->set("usuario_c", $_POST['usuario_c']);
        $this->modelo->set("password", $_POST['password']);

        $con = $this->modelo->crearUsuario();

        if ($con) { 

            echo '<script language="javascript">alert("Usuario creado correctamente");"</script>';
        
        } else {
            echo '<script language="javascript">alert("Ya existe ese nombre de usuario, ingresa uno diferente");"</script>';
        } 

    }


    public function permisoUsr(){
        $this->modelo->set("usuario", $_POST['usuario']);
        $this->modelo->set("tipoUsr", $_POST['tipoUsr']);
        $con = $this->modelo->permisos();
        
        if ($con) {
            header("Location: " . url . "reporte/permisosUsr");
        } else {
            header("Location: " . url . "reporte/vw_Acta?act=Ha ocurrido un error  &alerta=alert-danger");
        }

    }

    public function buscarNUsuario() {
        $this->modelo->set("usuario", $_POST['usuario']);
        $con = $this->modelo->usuariosN();
        
        if ($con) {
            header("Location: " . url . "reporte/permisosUsr2");
        } else {
            header("Location: " . url . "reporte/vw_Acta?act=Ha ocurrido un error  &alerta=alert-danger");
        }
        return $con;
    }

    public function vw_Clave() {
        session_start();
        $this->vista("cabecera");
        if (isset($_SESSION['usuario']) && isset($_SESSION['nombre'])) {
            $this->vista("cambiarClave");
        } else {
            $this->vista("inicio");
        }
    }

    public function buscarEmpleado($id) {
        $this->modelo->set("usuario", $id);
        $con = $this->modelo->buscarEmpleado();
        return $con;
    }

}

?>

<script>
        function message(){
        Swal.fire({
        icon: 'success',
        title: 'Usuario creado correctamente',
        showConfirmButton: true,
        })
        }
</script>