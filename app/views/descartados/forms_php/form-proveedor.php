<?php
include("../head.php");

?>
    <div class="container mt-5">
        <div class="card-header">
            <h3>Datos del Proveedor</h3>
        </div>
        <div class="card-body">
            <form action="insertar_proveedor.php" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" required>
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <button type="submit" class="btn btn-primary">Guardar Datos del Proveedor</button>
            </form>
        </div>
    </div>