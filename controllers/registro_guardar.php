<?php
require("../models/conexion_db.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$confcontasena = $_POST['confcontasena'];
if ($_POST['contrasena'] != $_POST['confcontasena']) {
  echo '<script>alert("La contraseña no coincide"); window.location.href = "../models/registro.php";</script>';
} else {
  $qdb = "SELECT * FROM usuarios WHERE email = '$email' OR usuario = '$usuario'";
  $ejecutas = mysqli_query($conexion, $qdb);
  $num_rows = mysqli_num_rows($ejecutas);
  if ($num_rows > 0) {
    echo '<script>alert("El email y el usuario ya existen en la base de datos"); window.location.href = "../models/registro.php";</script>';
  } else {
    $hashedPassword = password_hash($contrasena, PASSWORD_BCRYPT);
    $hashedConfPassword = password_hash($confcontasena, PASSWORD_BCRYPT);
    $qdb = "INSERT INTO usuarios(nombre, apellido, email, usuario, contrasena, confcontasena)
          VALUES ('$nombre', '$apellido', '$email', '$usuario', '$hashedPassword', '$hashedConfPassword')";
    $ejecutas = mysqli_query($conexion, $qdb);
    if ($ejecutas) {
      echo '<script>alert("Te has registrado correctamente"); window.location.href = "../models/login.php";</script>';
    } else {
      echo '<script>alert("Error al insertar en la base de datos"); window.location.href = "../models/registro.php";</script>';
    }
  }
}
