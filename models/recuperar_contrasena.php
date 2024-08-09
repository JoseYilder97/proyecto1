<?php
include("head.php");

?>
<div class="items_main-principal_logins">
    <div class="items_main-principal_solo">
        <div class="registrate_administrador loginst">
            <div class="logins">
                <h4 class="h4">Recuperar Contraseña</h4>
                <form action="../controllers/serv_recuperar.php" method="POST">
                    <label for="email">
                        <span>Correo Electrónico</span>
                        <input name="email" type="email" placeholder="Ingrese su email" class="input" id="email">
                    </label>
                    <div class="login">
                        <input type="submit" value="Enviar">
                    </div>
                    <div class="logins_ancla">

                        <ul class="regresar">
                            <li>
                                <a href="./login.php">Regresar</a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
        <div class="text_welcome_software">
            <div class="tex">
                <h1>Bienbenido al Sofware que Hace mejor tu Vereinaria</h1>
                <h2>Bienbenido al Sofware que Hace mejor tu Vereinaria</h2>
            </div>
        </div>
    </div>
</div>