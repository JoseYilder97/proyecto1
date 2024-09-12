<?php
include("head.php");

?>
<div class="profile">
    <div class="profile-menu">
        <div class="profile-icon" onclick="toggleMenu()">
            <img src="/public/images//profile-icon.png" alt="Perfil">
            <h3>Jose</h3>
            
        </div>
        <div class="dropdown-menu" id="dropdownMenu">
            <ul>
                <li><a href="#"><span class="material-symbols-outlined">Account_Circle</span>Ver Perfil</a></li>
                <li><a href="#"><span class="material-symbols-outlined">Settings</span>Configuración</a></li>
                <li><a href="#"><span class="material-symbols-outlined">Help</span>Ayuda</a></li>
                <li><a href="#"><span class="material-symbols-outlined">Login</span>Cerrar Sesión</a></li>
            </ul>
        </div>
    </div>
</div>


<script src="script.js"></script>