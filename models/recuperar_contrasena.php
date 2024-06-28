<?php
include("../models/head.php");
include("../models/login_header.php");
?>
<div class="items_main-principal_logins">
    <div class="items_main-principal_solo">
        <div class="registrate_administrador loginst">
            <h4 class="h4">Recuperar Contraseña</h4>
            <form action="LoginUsuario" method="POST">
                <label for="correo">
                    <span>Ingrese su Correo</span>
                    <input name="correo" type="text" placeholder="Ingrese su correo" class="input">
                </label>
                <label for="nueva_contrasena">
                    <span>Ingrese nueva Contraseña</span>
                    <input type="password" id="contrasena" name="nueva_contrasena" value="" required placeholder="Ingrese su nueva contraseña" class="input">
                </label>
                <label for="confirma_contrasena">
                    <span>Confirma nueva Contraseña</span>
                    <input type="password" id="contrasena" name="confirma_contrasena" value="" required placeholder="Confirma su nueva contraseña" class="input">
                </label>
                
                <div class="login">
                    <input type="submit" value="login">
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
</div>

<?php
include("../models/footer.php");

?>