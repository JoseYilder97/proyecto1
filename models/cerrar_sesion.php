<?php
// Iniciar la sesión para poder destruirla
session_start();
// Limpiar todas las variables de sesión
session_unset();
// Destruir la sesión
session_destroy();

// Redirigir al usuario a login.php
header("Location: login.php");
exit;

// Fin del script de cierre de sesión
?>