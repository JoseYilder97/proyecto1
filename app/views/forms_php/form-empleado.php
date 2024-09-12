<?php
include("../head.php");
?>

<div class="container mt-5">
        <h2>Agregar Empleado</h2>
        <form action="insertar_empleado.php" method="post">
            <div class="mb-3">
                <label for="nombre_personal" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre_personal" name="nombre_personal">
            </div>
            <div class="mb-3">
                <label for="apellido_personal" class="form-label">Apellido:</label>
                <input type="text" class="form-control" id="apellido_personal" name="apellido_personal">
            </div>
            <div class="mb-3">
                <label for="rol_personal" class="form-label">Rol:</label>
                <select id="rol_personal" name="rol_personal" class="form-select" required>
                    <!-- Aquí debes generar las opciones dinámicamente desde tu base de datos -->
                    <option value="1">Administrador</option>
                    <option value="2">Veterinario</option>
                    <option value="3">Empleado</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="telefono_personal" class="form-label">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono_personal" name="telefono_personal">
            </div>
            <button type="submit" class="btn btn-primary">Agregar Empleado</button>
        </form>
    </div>