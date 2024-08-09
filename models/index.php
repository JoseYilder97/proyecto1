<?php
session_start();


if (isset($_SESSION['last_page']) && $_SERVER['REQUEST_URI'] != $_SESSION['last_page']) {
}

$_SESSION['last_page'] = $_SERVER['REQUEST_URI'];

if (!isset($_SESSION['usuario'])) {
    // Redirigir al usuario a la página de inicio de sesión si no está iniciada la sesión
    echo '<script>alert("Por favor inicie sección"); window.location.href = "login.php";</script>';
    exit;
}

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

