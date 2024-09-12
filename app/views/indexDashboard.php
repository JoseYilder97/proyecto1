<?php
include("head.php");
include("../models/mensaje_error.php");
?>
<?php


if (isset($_SESSION['last_page']) && $_SERVER['REQUEST_URI'] != $_SESSION['last_page']) {
}

$_SESSION['last_page'] = $_SERVER['REQUEST_URI'];

if (!isset($_SESSION['usuario'])) {
    // Redirigir al usuario a la página de inicio de sesión si no está iniciada la sesión
    session_start();
    $_SESSION['mensaje'] = "Por favor inicie sección";
    $_SESSION['icono'] = 'error';
    header('Location: ../views/login_usuario.php');
    exit;
}
?>

<body class="body">
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <div class="logo">
                <img src="/public/images/logos.png" alt="" srcset="">
                <a class="a" href="">Veterinaria</a>
            </div>

            <ul>


            <li id="dashboard">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Administración</span>
                    </a>
                </li>

                <li id="agenda">
                    <a href="#">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                calendar_month
                            </span>
                        </span>
                        <span class="title">Agenda</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                medical_services
                            </span>
                        </span>
                        <span class="title">Consultorio</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                local_hospital
                            </span>
                        </span>
                        <span class="title">Hospital</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                monitoring
                            </span>
                        </span>
                        <span class="title">Informes</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <span class="material-symbols-outlined">
                                add_business
                            </span>
                        </span>
                        <span class="title">Tienda</span>
                    </a>
                </li>

                <div class="li">
                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="settings-outline"></ion-icon>
                            </span>
                            <span class="title">Settings</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                            </span>
                            <span class="title">Password</span>
                        </a>
                    </li>

                    <li>
                        <a href="../models/cerrar_sesion.php">
                            <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </div>

            </ul>

        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
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
                    <div class="theme_btn">
                        <span class="material-symbols-outlined active">
                            light_mode
                        </span>
                        <span class="material-symbols-outlined">
                            dark_mode
                        </span>
                    </div>
                    <div class="perfil-user">
                        <div class="perfil_photo">
                            <img src="/public/images//profile-icon.png" alt="dog" srcset="Perfil persona">
                        </div>
                        <h3>Jose Gilder</h3>
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
                        <h3>Jose</h3>
                    </div>
                    <div class="dropdown-menu" id="dropdownMenu">
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
            <!-- ======================= Inicio citas ================== -->
            <div class="agenda_sevicios">
                <h1>Registro de Cita</h1>
                <div class="sevicios">
                    <div class="editar_servios">

                        <div class="icon_servicios">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                        <span>Agregar</span>
                    </div>
                    <div class="editar_servios">

                        <div class="icon_servicios">
                            <ion-icon name="cart-outline"></ion-icon>
                        </div>
                        <span>Actualizar</span>
                    </div>
                    <div class="editar_servios">

                        <div class="icon_servicios">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </div>
                        <span>Consultar</span>
                    </div>
                    <div class="editar_servios">

                        <div class="icon_servicios">
                            <ion-icon name="cash-outline"></ion-icon>
                        </div>
                        <span>Borrar</span>
                    </div>
                </div>
                <form action="procesar_cita.php" method="post">
                    <label for="paciente_id">ID del Paciente:</label>
                    <input type="text" id="paciente_id" name="paciente_id">
                    <br>
                    <label for="usuario">Tipo de citas</label>
                    <input list="lista_servcios" id="usuario" name="usuario" value="" required placeholder="Usuario" class="input">
                    <datalist id="lista_servcios">
                        <option value="Médico"></option>
                        <option value="Control"></option>
                        <option value="Peluqueriam y Baño"></option>
                        <option value="Baño"></option>
                    </datalist>
                    <br>
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" name="fecha">
                    <br>
                    <label for="hora">Hora:</label>
                    <input type="time" id="hora" name="hora">
                    <br>
                    <label for="nota">Nota:</label>
                    <textarea id="nota" name="nota" rows="4" cols="50"></textarea>
                    <br>
                    <input type="submit" value="Registrar Cita">
                </form>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="/public/javascript/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>