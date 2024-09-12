<?php
include("../head.php");
?>
<!-- Modal -->
<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalLabel">Registro de Mascota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="agenda_sevicios_actives">
                    <div class="agenda_sevicios">

                        <div class="container mt-5">
                            <div class="card-header">
                                <h2>Datos de la Mascota</h2>
                            </div>
                            <div class="card-body">
                                <form action="insertar_mascota.php" method="post">
                                    <div class="mb-3">
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