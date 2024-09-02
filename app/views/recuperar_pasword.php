<?php
include("head.php");

?>
<div class="items_container_users-admins">
    <div class="items_container_users_admins-login">
        <div class="logins">
            <h4 class="h4">Recuper Contraseña</h4>
            <form action="../models/login_u.php" method="post">
                <label for="nombre">
                    <span class="material-symbols-outlined">
                        mail
                    </span>
                    <input name="correo" type="text" placeholder="Ingrese su Email" class="input">
                </label>
                <label for="contrasena">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                    <input type="password" id="contrasena" name="contrasena" value="" required placeholder="Nueva contraseña" class="input">
                </label>
                <label for="contrasena">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                    <input type="password" id="contrasena" name="contrasena" value="" required placeholder="Confirme Nueva Contraseña" class="input">
                </label>
                <div class="login">
                    <input type="submit" value="Recuper Contraseña">
                </div>
                <div class="logins_ancla">
                    <ul>
                        <li>
                            <a href="login_usuario.php" id="btnRegistro">Atrás</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="login_usuario.php">Recuperar Contraseña</a>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
    <?php
include("text_bienvenida.php");
?>
    </div>
</div>