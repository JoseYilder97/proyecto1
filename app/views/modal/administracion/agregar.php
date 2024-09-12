<?php
include("../head.php");
?>
<!-- Modal -->
<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalLabel">Registro de Cita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="guradar.php" method="post">
                    <div class="agenda_sevicios_actives">
                        <div class="agenda_sevicios">     
                            <form action="procesar_cita.php" method="post">
                                <label for="paciente_id">ID del Paciente:</label>
                                <input type="text" id="paciente_id" name="paciente_id">
                                <br>
                                <label for="usuario">Tipo de citas</label>
                                <input list="lista_servcios" id="usuario" name="usuario" value="" required placeholder="Usuario" class="input">
                                <datalist id="lista_servcios">
                                    <option value="Médico"></option>
                                    <option value="Control"></option>
                                    <option value="Peluqueriam y Baño"></option>
                                    <option value="Baño"></option>
                                </datalist>
                                <br>
                                <label for="fecha">Fecha:</label>
                                <input type="date" id="fecha" name="fecha">
                                <br>
                                <label for="hora">Hora:</label>
                                <input type="time" id="hora" name="hora">
                                <br>
                                <label for="nota">Nota:</label>
                                <textarea id="nota" name="nota" rows="4" cols="50"></textarea>
                                <br>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="Submit" class="btn btn-primary">Guarar<span class="material-symbols-outlined">save</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>