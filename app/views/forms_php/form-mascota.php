<?php
include("../head.php");

?>
<div class="container mt-5">
    <div class="card-header">
        <h3>Datos de la Mascota</h3>
    </div>
    <div class="card-body">
        <form action="insertar_mascota.php" method="post>
                    <div class=" mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" required>
    </div>
    <div class="mb-3">
        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="fecha_nacimiento" required>
    </div>
    <div class="mb-3">
        <label for="id_especie_masc" class="form-label">Especie</label>
        <select class="form-select" id="id_especie_masc" required>
            <!-- Opciones del select se cargarían dinámicamente desde la base de datos -->
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar Datos de la Mascota</button>
    </form>
</div>
</div>