<?php
include("../head.php");

?>
<!-- <div class="agenda_sevicios_active"> --><!-- agrege para agregar js d -->
<div class="agenda_sevicios_actives">
    <div class="agenda_sevicios">
        <h1>Registro de Cita</h1>
        <div class="sevicios">
            <div class="editar_servios">

                <div class="icon_servicios">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
                <span>Agregar</span>
            </div>
            <div class="editar_servios">

                <div class="icon_servicios">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
                <span>Actualizar</span>
            </div>
            <div class="editar_servios">

                <div class="icon_servicios">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
                <span>Consultar</span>
            </div>
            <div class="editar_servios">

                <div class="icon_servicios">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
                <span>Borrar</span>
            </div>
        </div>
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
            <input type="submit" value="Registrar Cita">
        </form>
    </div>
</div>