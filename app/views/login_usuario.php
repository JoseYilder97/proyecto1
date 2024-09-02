<?php
include("head.php");
include("../models/mensaje_error.php");
?>

<div class="items_container_users-admins">
    <div class="items_container_users_admins-login">
        <div class="logins">
            <h4 class="h4">Login</h4>
            <form action="../models/login_u.php" method="post">
                <label for="nombre">
                    <span class="material-symbols-outlined">
                        mail
                    </span>
                    <input name="correo" type="text" placeholder="Ingrese su correo" class="input">
                </label>
                <label for="contrasena">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                    <input type="password" id="contrasena" name="contrasena" value="" required placeholder="Ingrese su Password" class="input">
                </label>
                <div class="login">
                    <input type="submit" value="login">
                </div>
                <div class="logins_ancla">
                     <ul>
                        <li>
                            <a href="../../index.php">Atrás</a>
                        </li>
                    </ul><ul>
                        <li>
                            <a href="registro_usuario.php" id="btnRegistro">Registrate</a>
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
