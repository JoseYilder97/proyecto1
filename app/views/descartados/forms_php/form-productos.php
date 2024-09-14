<?php
include("../head.php");

?>
<div class="container mt-5">
    <div class="card-header">
        <h3>Datos del Producto</h3>
    </div>
    <div class="card-body">
        <form action="insertar_factura.php" method="post">
            <div class="mb-3">
                <label for="detalle_producto" class="form-label">Detalle del Producto</label>
                <input type="text" class="form-control" id="detalle_producto" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="id_proveedor" class="form-label">Proveedor</label>
                <select class="form-select" id="id_proveedor" required>
                    <!-- Opciones del select se cargarían dinámicamente desde la base de datos -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Datos del Producto</button>
        </form>
    </div>
</div>