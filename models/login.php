<?php
include("login_header.php");

?>
<div class="items_main-principal_logins">
    <div class="items_main-principal_solo">
        <div class="registrate_administrador loginst">
            <h4 class="h4">Login</h4>
            <form action="Login_u.php" method="post">
                <label for="nombre">
                    <span>Ingrese su Correo</span>
                    <input name="correo" type="text" placeholder="Ingrese su correo" class="input">
                </label>
                <label for="contrasena">
                    <span>Ingrese su Contraseña</span>
                    <input type="password" id="contrasena" name="contrasena" value="" required placeholder="Ingrese su Password" class="input">
                </label>
                <div class="login">
                    <input type="submit" value="login">
                </div>
                <div class="logins_ancla">
                    <ul class="registrate">
                        <li>

                            <a href="registro.php" id="btnRegistro">Registrate</a>
                        </li>
                    </ul>
                    <ul class="regresar">

                        <li>
                            <a href="login.php">Recuperar Contraseña</a>
                        </li>
                    </ul>

                </div>
            </form>
        </div>
    </div>
</div>
<?php

include("footer.php");
?>