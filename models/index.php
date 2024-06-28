<?php
/*     session_start();
    if (!isset($hashedPassword["usuario"])){
        echo '<script>alert("Por favor inicie seccion");
         window.location.href = "login.php";
        </script>';
        session_destroy();
        die();
    } */
/*
session_start();


if (!isset($_SESSION['usuario'])) {
    // Redirigir al usuario a la página de inicio de sesión
    header("Location: login.php");
    exit;
}
*/


?>
<?php
include("head.php");
include("header.php");
include("nab.php");
include("carrucel.php");
include("redes_social.php");
include("redes_sociales.php");
include("shopping.php");
include("footer.php");

?>