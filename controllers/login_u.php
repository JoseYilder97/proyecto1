<?php
session_start();
require("../models/conexion_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Consulta para obtener el usuario con el correo ingresado
    $qdb = "SELECT * FROM usuarios WHERE email = '$correo'";
    $ejecutas = mysqli_query($conexion, $qdb);
    $num_rows = mysqli_num_rows($ejecutas);

    if ($num_rows > 0) {
        // Si se encontró un usuario con el correo ingresado, verificar la contraseña
        $usuario = mysqli_fetch_assoc($ejecutas);
        $hashedPassword = $usuario['contrasena'];

        if (password_verify($contrasena, $hashedPassword)) {
           
            echo '<script>alert("has"); location = "bienvenido.php";</script>';
            exit();
        } else {
            echo '<script>alert("Contraseña incorrecta"); location = "./login.php";</script>';
        }
    } else {
        // No se encontró ningún usuario con el correo ingresado
        echo '<script>alert("Correo electrónico no registrado"); location = "./login.php";</script>';
    }
}
