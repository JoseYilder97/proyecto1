<?php
include("../head.php");

?>
<div class="container mt-5">
    <div class="card-header">
        <h3>Cita Médica</h3>
    </div>
    <div class="card-body">
        <form action="insertar_especie.php" method="post">
            <div class="mb-3">
                <label for="motivo" class="form-label">Motivo de la cita</label>
                <input type="text" class="form-control" id="motivo" required>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha de la cita</label>
                <input type="datetime-local" class="form-control" id="fecha" required>
            </div>
            <div class="mb-3">
                <label for="id_macota" class="form-label">Mascota</label>
                <select class="form-select" id="id_macota" required>
                    <!-- Opciones del select se cargarían dinámicamente desde la base de datos -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cita</button>
        </form>
    </div>
</div>