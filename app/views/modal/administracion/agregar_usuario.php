<?php
include("../head.php");
?>
<!-- Modal -->
<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalLabel">Registro de Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="agenda_sevicios_actives">
                    <div class="agenda_sevicios">

                        <div class="container mt-5">
                            <h2>Agregar Usuario</h2>
                            <form action="insertar_empleado.php" method="post">
                                <div class="mb-3">
                                    <label for="nombre_personal" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre_personal" name="nombre_personal">
                                </div>
                                <div class="mb-3">
                                    <label for="apellido_personal" class="form-label">Apellido:</label>
                                    <input type="text" class="form-control" id="apellido_personal" name="apellido_personal">
                                </div>
                                <div class="mb-3">
                                    <label for="rol_personal" class="form-label">Rol:</label>
                                    <select id="rol_personal" name="rol_personal" class="form-select" required>
                                        <!-- Aquí debes generar las opciones dinámicamente desde tu base de datos -->
                                        <option value="">Selecionar...</option>
                                        <?php while ($us = $usuario->fetch_assoc()) { ?>
                                            <option value="<?php echo $us["id_usuario"];?>"><?=$us["id_rol"]?></option>
                                            <?php  } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="telefono_personal" class="form-label">Teléfono:</label>
                                    <input type="tel" class="form-control" id="telefono_personal" name="telefono_personal">
                                </div>
                                <button type="submit" class="btn btn-primary">Agregar usuario</button>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            </form>
        </div>

    </div>
</div>
</div>