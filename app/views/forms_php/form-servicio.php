<?php
include("../head.php");

?>
<div class="container mt-5">
            <div class="card-header">
                <h3>Datos del Servicio</h3>
            </div>
            <div class="card-body">
            <form action="insertar_servicio.php" method="post">
                    <div class="mb-3">
                        <label for="tipo_servicio" class="form-label">Tipo de Servicio</label>
                        <input type="text" class="form-control" id="tipo_servicio">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_citas" class="form-label">Cita Asociada</label>
                        <select class="form-select" id="id_citas" required>
                            <!-- Opciones del select se cargarían dinámicamente desde la base de datos -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_empleado" class="form-label">Empleado Responsable</label>
                        <select class="form-select" id="id_empleado" required>
                            <!-- Opciones del select se cargarían dinámicamente desde la base de datos -->
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Datos del Servicio</button>
                </form>
            </div>
        </div>