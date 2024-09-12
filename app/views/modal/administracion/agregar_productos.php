<?php
include("../head.php");
?>
<!-- Modal -->
<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalLabel">Registro de Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="agenda_sevicios_actives">
                    <div class="agenda_sevicios">
                        <div class="container mt-5">
                            <div class="card-header">
                                <h2>Datos del Producto</h2>
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
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>