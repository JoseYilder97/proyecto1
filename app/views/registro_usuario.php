<?php
include("head.php");
include("../models/mensaje_error.php");
?>
<div class="items_container_users-admins">
    <div class="items_container_users_admins-login">
        <div class="registro">
            <h4 class="h4">Login</h4>
            <form action="../models/registro_guardar.php" method="post">
                <label for="nombre">
                <span class="material-symbols-outlined">
person
</span>
                    <input type="text" id="nombre" name="nombre" value="" requeired placeholder="Nombre Nompleto" class="input">
                </label>
                <label for="apellido">
                <span class="material-symbols-outlined">
person
</span>
                    <input type="text" id="apellido" name="apellido" value="" required placeholder="Apellido" class="input">
                </label>
                <label for="email">
                <span class="material-symbols-outlined">
                        mail
                    </span>
                    <input type="email" id="email" name="email" value="" required placeholder="Email" class="input">
                </label>
                <label for="usuario">
                <span class="material-symbols-outlined">
person
</span>
                    <input list="cursos" id="usuario" name="usuario" value="" required placeholder="Usuario" class="input">
                    <datalist id="cursos">
                        <option value="veterinario"></option>
                        <option value="Cliente"></option>
                    </datalist>
                </label>
                <label for="contrasena">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                    <input type="password" id="contrasena" name="contrasena" value="" required placeholder="Contraseña" class="input">
                </label>
                <label for="confcontasena">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                    <input type="password" id="confcontasena" name="confcontasena" value="" required placeholder="Confirma la Contraseña" class="input">
                </label>
                <div class="login">
                    <input type="submit" value="Registrar">
                </div>

                <div class="logins_ancla">
                    <ul>
                        <li>
                            <a href="login_usuario.php" id="btnRegistro">Atras</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="recuperar_pasword.php">Recuper Contraseña</a>
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
