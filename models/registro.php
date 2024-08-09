<?php
include("head.php");
?>
<div class="items_main-principal_solo">
    <div class="registrate_administrador">
        <div class="logins">
            <h4>Registro</h4>
            <form action="../controllers/registro_guardar.php" method="post">
                <label for="nombre">
                    <span>Nombre Nompleto</span>
                    <input type="text" id="nombre" name="nombre" value="">
                </label>
                <label for="apellido">
                    <span>Apellido</span>
                    <input type="text" id="apellido" name="apellido" value="" required>
                </label>
                <label for="email">
                    <span>Correo</span>
                    <input type="email" id="email" name="email" value="" required>
                </label>
                <label for="usuario">
                    <span>usuario</span>
                    <input type="text" id="usuario" name="usuario" value="" required>
                </label>
                <label for="contrasena">
                    <span>Contraseña</span>
                    <input type="password" id="contrasena" name="contrasena" value="" required>
                </label>
                <label for="confcontasena">
                    <span>Confirma contraseña</span>
                    <input type="password" id="confcontasena" name="confcontasena" value="" required>
                </label>
                <input class="inputs" type="submit" value="Registrar">
                <div class="ref">
                    <span>Ya tienes cuenta</span><a href="login.php">Login</a>
                </div>
            </form>
        </div>
        
    </div><div class="text_welcome_software">
            <div class="tex">
                <h1>Bienbenido al Sofware que Hace mejor tu Vereinaria</h1>
                <h2>Bienbenido al Sofware que Hace mejor tu Vereinaria</h2>
            </div>
        </div>
</div>