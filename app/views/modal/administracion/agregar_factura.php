<?php
include("../head.php");
?>
<!-- Modal -->
<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalLabel">Registro de Factura</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="agenda_sevicios_actives">
                    <div class="agenda_sevicios">
                        <div class="container mt-5">
                            <div class="card-header">
                                <h3>Datos del Factura</h3>
                            </div>
                            <div class="card-body">
                                <form action="insertar_factura.php" method="post" class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label for="fecha" class="form-label">Fecha:</label>
                                        <input type="datetime-local" id="fecha" name="fecha" class="form-control" required>
                                        <div class="invalid-feedback">Por favor, ingrese una fecha válida.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="id_servicio" class="form-label">Servicio:</label>
                                        <select id="id_servicio" name="id_servicio" class="form-select" required>
                                            <!-- Aquí debes generar las opciones dinámicamente desde tu base de datos -->
                                            <option value="">Seleccione un servicio</option>
                                            <option value="1">Servicio 1</option>
                                            <option value="2">Servicio 2</option>
                                            <option value="3">Servicio 3</option>
                                        </select>
                                        <div class="invalid-feedback">Por favor, seleccione un servicio.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="id_cliente" class="form-label">Cliente:</label>
                                        <select id="id_cliente" name="id_cliente" class="form-select" required>
                                            <!-- Aquí debes generar las opciones dinámicamente desde tu base de datos -->
                                            <option value="">Seleccione un cliente</option>
                                            <option value="1">Cliente 1</option>
                                            <option value="2">Cliente 2</option>
                                            <option value="3">Cliente 3</option>
                                        </select>
                                        <div class="invalid-feedback">Por favor, seleccione un cliente.</div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Agregar Factura</button>
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