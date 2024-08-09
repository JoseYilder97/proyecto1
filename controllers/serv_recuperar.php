<?php
require_once '../models/conexion_db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if (!$email) {
        throw new Exception("Correo electrónico inválido");
    }

    // Verificar si las columnas existen
    $checkTokenColumn = $conexion->query("SHOW COLUMNS IN usuarios LIKE 'token_recovery'");
    $checkExpirationColumn = $conexion->query("SHOW COLUMNS IN usuarios LIKE 'token_expiration'");

    if ($checkTokenColumn->num_rows > 0 && $checkExpirationColumn->num_rows > 0) {
        // Continuar con la lógica de recuperación de contraseña...
    } else {
        // Si las columnas no existen, crearlas
        $createColumnsQuery = "ALTER TABLE usuarios ADD COLUMN token_recovery VARCHAR(255) DEFAULT NULL; ALTER TABLE usuarios ADD COLUMN token_expiration DATETIME DEFAULT NULL;";
        if (!$conexion->query($createColumnsQuery)) {
            throw new Exception("Error al crear las columnas en la base de datos.");
        }
    }

    // Aquí continúa el resto de tu lógica...
}
?>
