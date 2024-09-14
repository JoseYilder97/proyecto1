<?php
include("../head.php");

?>
<div class="container mt-5">
    <div class="card-header">
        <h3>Historia Médica</h3>
    </div>
    <div class="card-body">
        <form action="insertar_historia_medica.php" method="post">
            <div class="mb-3">
                <label for="nombre_personal" class="form-label">Nombre del Personal</label>
                <input type="text" class="form-control" id="nombre_personal" required>
            </div>
            <div class="mb-3">
                <label for="id_empleado" class="form-label">Empleado Responsable</label>
                <select class="form-select" id="id_empleado" required>
                    <!-- Opciones del select se cargarían dinámicamente desde la base de datos -->
                </select>
            </div>
            <div class="mb-3">
                <label for="id_mascota" class="form-label">Mascota</label>
                <select class="form-select" id="id_mascota" required>
                    <!-- Opciones del select se cargarían dinámicamente desde la base de datos -->
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" required>
            </div>
            <div class="mb-3">
                <label for="diagnostico" class="form-label">Diagnóstico</label>
                <textarea class="form-control" id="diagnostico" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tratamiento" class="form-label">Tratamiento</label>
                <textarea class="form-control" id="tratamiento" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Historia Médica</button>
        </form>
    </div>
</div>