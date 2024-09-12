
<?php
include("../head.php");

?>
    <div class="container mt-5">
        <h2>Agregar Detalle de Factura</h2>
        <form action="insertar_detalle_factura.php" method="post">
            <div class="mb-3">
                <label for="id_factura" class="form-label">Factura:</label>
                <select id="id_factura" name="id_factura" class="form-select" required>
                    <!-- Aquí debes generar las opciones dinámicamente desde tu base de datos -->
                    <option value="1">Factura 1</option>
                    <option value="2">Factura 2</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha:</label>
                <input type="datetime-local" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" required>
            </div>
            <div class="mb-3">
                <label for="precio_unitario" class="form-label">Precio Unitario:</label>
                <input type="number" class="form-control" id="precio_unitario" name="precio_unitario" required>
            </div>
            <div class="mb-3">
                <label for="subtotal" class="form-label">Subtotal:</label>
                <input type="number" class="form-control" id="subtotal" name="subtotal" required>
            </div>
            <div class="mb-3">
                <label for="id_producto" class="form-label">Producto:</label>
                <select id="id_producto" name="id_producto" class="form-select" required>
                    <!-- Aquí debes generar las opciones dinámicamente desde tu base de datos -->
                    <option value="1">Producto 1</option>
                    <option value="2">Producto 2</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_venta" class="form-label">Venta:</label>
                <select id="id_venta" name="id_venta" class="form-select" required>
                    <!-- Aquí debes generar las opciones dinámicamente desde tu base de datos -->
                    <option value="1">Venta 1</option>
                    <option value="2">Venta 2</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Detalle de Factura</button>
        </form>
    </div>
