<?php
include("head.php");

?>
<nav class="navbars">

    <div class="navbar_fixed">
        <span class="material-symbols-outlined onclick">
            menu
        </span>
        <div class="logos">
            <picture>
                <img src="/public/images/logos.png" alt="dog" srcset="Este es un perro de logo">
            </picture>
        </div>
        <div class="items-header">
            <div class="items_head">

                <div class="nav">
                    <nav>
                        <ul>
                            <li class="nav-item"><a href="../../index.php" class="nav-link active" data-toggle="tab" href="#" role="tab" ><span class="material-symbols-outlined">home</span>Inicio</a></li>
                            <li class="nav-item"><a href="/app/views/medicas.php" class="nav-link" data-toggle="tab" href="#" role="tab" ><span class="material-symbols-outlined">calendar_add_on</span>Citas Medicas</a></li>
                            <li class="nav-item"><a href="/app/views/somos.php" class="nav-link" data-toggle="tab" href="#" role="tab" ><span class="material-symbols-outlined">group_add</span>Quienes Somos</a></li>
                            <li class="nav-item"><a href="/app/views/slider_shping.php" class="nav-link" data-toggle="tab" href="#" role="tab" ><span class="material-symbols-outlined">add_business</span>Productos</a></li>
                            <li class="nav-item"><a href="/app/views/slider_shping.php" class="nav-link" data-toggle="tab" href="#" role="tab" ><span class="material-symbols-outlined">call</span>Contactenos</a></li>
                        </ul>
                    </nav>
                    <form action="" method="post">
                    </form>
                </div>
                <div class="nav_nav">
                    <nav class="menu-nav">
                        <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="medicas.php">Citas Medicas</a></li>
                            <li><a href="somos.php">Quienes Somos</a></li>
                            <li><a href="slider_shping.php">Productos</a></li>
                            <li><a href="#">contactenos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="navbar-right">
            <span class="material-symbols-outlined">
                person
            </span>
            <a href="/app/views/login_usuario.php">Login</a>
        </div>
    </div>
</nav>


<script>
    var spanElements = document.querySelector(".navbar-user");
    var inactiveElement = document.querySelector(".inactive");
    spanElements.addEventListener("click", function() {
        if (inactiveElement.style.display === "block") {
            inactiveElement.style.display = "none";
        } else {
            inactiveElement.style.display = "block";
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Seleccionamos el logo por su clase única
        var logoImg = document.querySelector('.logos img');
        logoImg.addEventListener('click', function() {
            window.location.href = '../../index.php';
        });
        // Seleccionamos las clases contenedores de span
        var userIcon = document.querySelector('.navbar-right .material-symbols-outlined');


        userIcon.addEventListener('click', function() {

            window.location.href = '/app/views/login_usuario.php';
        });
    });
</script>
<!-- <script>
    
    document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('.items-header .nav nav ul li');
    
    navItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Eliminar la clase active de todos los items
            navItems.forEach(i => i.classList.remove('active'));
            
            // Agregar la clase active al item seleccionado
            this.classList.add('active');
            
            // Actualizar el contenido según sea necesario
            updateContent(this);
        });
    });
});
</script> -->
