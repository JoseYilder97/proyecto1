<?php
include("../head.php");

?>
<div class="agenda_sevicios">
<h1>Registro de Cita Médica</h1>
    <form action="procesar_cita.php" method="post">
        <label for="paciente_id">ID del Paciente:</label>
        <input type="text" id="paciente_id" name="paciente_id">
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
        <input type="submit" value="Registrar Cita">
    </form>

</div>