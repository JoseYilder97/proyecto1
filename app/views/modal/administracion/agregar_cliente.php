<?php
include("../head.php");
?>

<!-- Modal -->
<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalLabel">Registro de Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="agenda_sevicios_actives">
                    <div class="agenda_sevicios">

                        <div class="container mt-5">
                            <h2>Agregar Cliente</h2>
                            <form action="../../models/insertar_cliente.php" method="post">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nit_cc" class="form-label">NIT/CC:</label>
                                    <input type="number" class="form-control" id="nit_cc" name="nit_cc" required>
                                </div>
                                <div class="mb-3">
                                    <label for="direccion" class="form-label">Dirección:</label>
                                    <textarea class="form-control" id="direccion" name="direccion" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Teléfono:</label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Agregar Cliente</button>
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