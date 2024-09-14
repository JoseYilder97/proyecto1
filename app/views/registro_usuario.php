<?php
require("../controllers/conexion_db.php");
?>
<?php
$sqlusarios = "SELECT DISTINCT r.id_rol, r.nombre_rol FROM roles r ORDER BY r.id_rol ASC";
$usuario = $conexion->query($sqlusarios);

?>
<?php
include("headers.php");
include("../models/mensaje_error.php");
?>
<div class="items_container_users-admins">
    <div class="items_container_users_admins-login">
        <div class="registro">
            <h4 class="h4">Login</h4>
            <form action="../models/registro_guardar.php" method="post">
                <label for="username">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                    <input type="text" id="username" name="username" value="" requeired placeholder="Usuario" class="input">
                </label>

                <label for="email">
                    <span class="material-symbols-outlined">
                        mail
                    </span>
                    <input type="email" id="email" name="email" value="" required placeholder="Email" class="input">
                </label>

                <label for="password">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                    <input type="password" id="password" name="password" value="" required placeholder="Contraseña" class="input">
                </label>
                <label for="password_hash">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                    <input type="password" id="password_hash" name="password_hash" value="" required placeholder="Confirma la Contraseña" class="input">
                </label>

                <label for="nombre_rol">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                    <input list="roles" id="nombre_rol" name="nombre_rol" placeholder="Seleccionar rol" class="input" required>
                    <datalist id="roles">
                        <option value="">Seleccionar...</option>
                        <?php while ($us = $usuario->fetch_assoc()) {
                            if ($us['nombre_rol'] !== 'Administrador') {
                        ?>
                                <option value="<?php echo $us['nombre_rol']; ?>" data-id="<?php echo $us['id_rol']; ?>"></option>
                        <?php
                            }
                        }
                        ?>
                    </datalist>
                </label>


                <input type="hidden" id="id_rol" name="id_rol" value="">



                </datalist>
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
<script src="/public/javascript/frontend.js"></script>