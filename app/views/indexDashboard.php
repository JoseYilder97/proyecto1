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


                <li>
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

                <li>
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
                        <a href="#">
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

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>
                    </table>
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