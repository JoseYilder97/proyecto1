
<nav class="navbar">
    <div class="logos">
        <picture>
            <img src="../images/logos.png" alt="dog" srcset="Este es un perro de logo">
        </picture>
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
    <div class="navbar-right">

        <ul>

            <li class="navbar-email">joseyilder1997@gmail.com</li>
            <li class="navbar-user">

                <span class="material-symbols-outlined">
                    person
                </span>

            </li>

            <li class="navbar-shopping-cart">
                <span class="material-symbols-outlined">
                    shopping_cart
                </span>
                <div>0</div>
            </li>
        </ul>

    </div>

</nav>
<div class="inactive">
    <ul>
        <li><a href="bienvenido.php">Mi Cuenta </a></li>

        <li><a href="salir.php">Cerrar Seción</a></li>

    </ul>
</div>


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