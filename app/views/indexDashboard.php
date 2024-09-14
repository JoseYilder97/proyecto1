<?php
require("../controllers/conexion_db.php");
?>
<?php
include_once("../models/sesion_ectiva.php");
?>
<?php
include("../models/mensaje_error.php");
?>
<?php
include("head.php");
?>

<body class="body" id="body">
    <!-- =============== Navigation ================ -->
    <div class="container_dash">
        <div class="navigation">
            <div class="logo">
                <img src="/public/images/logos.png" alt="" srcset="">
                <a class="a" href="">Veterinaria</a>
            </div>
            <ul>
                <li id="dashboard">
                    <a href="#" onclick="showSection('tablero')">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </span>
                        <span class="title">Tablero</span>
                        <span class="material-symbols-outlined">
                    </a>
                </li>

                <li>
                    <a href="#" onclick="showSection('usuarios')">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                group
                            </span>
                        </span>
                        <span class="title">Usuarios</span>
                    </a>
                </li>
                <li id="agenda">
                    <a href="#" onclick="showSection('citas')">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                calendar_month
                            </span>
                        </span>
                        <span class="title">Citas</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="showSection('consultorio')">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                medical_services
                            </span>
                        </span>
                        <span class="title">Consultorio</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="showSection('servicios')">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                local_hospital
                            </span>
                        </span>
                        <span class="title">Servicios</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="showSection('factura')">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                receipt_long
                            </span>
                        </span>
                        <span class="title">Factura</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="showSection('cliente')">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                groups
                            </span>
                        </span>
                        <span class="title">Clientes</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="showSection('mascota')">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                pets
                            </span>
                        </span>
                        <span class="title">Mascota</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="showSection('productos')">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                add_business
                            </span>
                        </span>
                        <span class="title">Productos</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="showSection('provedor')">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                inventory
                            </span>
                        </span>
                        <span class="title">Proveedor</span>
                    </a>
                </li>
                <div class="li">
                    <li>
                        <a href="#" onclick="showSection('usuarios')">
                            <span class="icon">
                                <span class="material-symbols-outlined">
                                    settings
                                </span>
                            </span>
                            <span class="title">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="showSection('password')">
                            <span class="icon">
                                <span class="material-symbols-outlined">
                                    lock
                                </span>
                            </span>
                            <span class="title">Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="../models/cerrar_sesion.php">
                            <span class="icon">
                                <span class="material-symbols-outlined">
                                    exit_to_app
                                </span>
                            </span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
        <!-- ========================= Main ==================== -->
        <div class="main" id="main">
            <div class="topbar_main">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="search">
                    <form action="" method="POST">
                        <label for="nombre">
                            <input type="text" id="nombre" name="nombre" value="" placeholder="¿Que estas buscando?">
                        </label>
                        <span class="material-symbols-outlined">
                            search
                        </span>
                    </form>
                </div>
                <div class="perfil_usuario">
                    <!--                     <div class="theme_btn">
                        <span class="material-symbols-outlined active">
                            light_mode
                        </span>
                        <span class="material-symbols-outlined">
                            dark_mode
                        </span>
                    </div> -->
                    <?php

// Comprobar si el usuario ha iniciado sesión
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Si no esta autenticado, redirigir al formulario de inicio de sesión
    header('Location: ../views/login_usuario.php');
    exit();
}
?>

<div class="perfil-user">
    <div class="perfil_photo">
        <img src="/public/images/profile-icon.png" alt="Perfil" srcset="Perfil persona">
    </div>
    <h3><?php echo htmlspecialchars($username); ?></h3>
    <span class="material-symbols-outlined perfil-users">
        keyboard_arrow_down
    </span>
</div>

                </div>
            </div>
            <!-- ======================= perfil ================== -->
            <div class="profile">
                <div class="profile-menu">
                    <div class="profile-icon" onclick="toggleMenu()">
                        <img src="/public/images//profile-icon.png" alt="Perfil">
                        <h3><?php echo htmlspecialchars($username); ?></h3>
                    </div>
                    <div class="dropdown-menus" id="dropdownMenu">
                        <ul>
                            <li><a href="#"><span class="material-symbols-outlined">Account_Circle</span>Ver Perfil</a></li>
                            <li><a href="#"><span class="material-symbols-outlined">Settings</span>Configuración</a></li>
                            <li><a href="#"><span class="material-symbols-outlined">Help</span>Ayuda</a></li>
                            <li><a href="../models/cerrar_sesion.php"><span class="material-symbols-outlined">Login</span>Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ======================= fin perfil ================== -->


            <div class="content-container">
                <div class="tablero-active" id="tablero-active"></div>
                <div class="usuarios-active" id="usuarios-active"></div>
                <div class="citas-active" id="citas-active"></div>
                <div class="consultorio-active" id="consultorio-active"></div>
                <div class="servicios-active" id="servicios-active"></div>
                <div class="factura-active" id="factura-active"></div>
                <div class="cliente-active" id="cliente-active"></div>
                <div class="mascota-active" id="mascota-active"></div>
                <div class="productos-active" id="productos-active"></div>
                <div class="provedor-active" id="provedor-active"></div>
            </div>

        </div>

        <!-- -->
    </div>
    <script>

    </script>

    <!-- =========== Scripts =========  -->

    <script src="/public/javascript/main.js"></script>
</body>