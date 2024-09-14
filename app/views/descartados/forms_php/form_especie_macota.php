<?php
include("../head.php");

?>
<div class="container mt-5">
    <div class="card-header">
        <h3>Especie de Mascota</h3>
    </div>
    <div class="card-body">
        <form action="insertar_especie.php" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la Especie</label>
                <input type="text" class="form-control" id="nombre" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Especie de Mascota</button>
        </form>
    </div>
</div>