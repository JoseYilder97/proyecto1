
<?php
include("nab.php");
include("head.php");
include("header.php");
include("shopping.php");
include("redes_social.php");
?>
<aside>
    <div class="product-detail">
        <div class="product-detail-close">
            <span class="material-symbols-outlined">
                close
            </span>
        </div>
        <img src="../images/dog2.jpg" alt="dog">

        <div class="product-info">
            <p>$0</p>
            <p>Collar Para Perro</p>
            <p>Este roducto es ideal para que su mascota, y de esta forma es adecuada para salir al parque o a la
                calle, tambien es para que su mascota no corra riesgo y ningun peligro en la calle</p>
            <button class="primary-button add-to-cart-button">
                <span class="material-symbols-outlined">
                    add_shopping_cart
                </span>
                <span>Añadir al Carrito</span>
            </button>

        </div>
    </div>
</aside>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Selecciona todos los elementos con la clase 'material-symbols-outlined'
        var icons = document.querySelectorAll('.product-detail-close .material-symbols-outlined');

        // Verifica si se encontraron elementos antes de continuar
        if (icons.length > 0) {
            // Agrega un evento de clic a cada icono
            icons.forEach(function(icon) {
                icon.addEventListener('click', function(event) {
                    // Evita el comportamiento predeterminado si hay uno (por ejemplo, enviar un formulario)
                    event.preventDefault();
                    // Redirecciona a 'index.php'
                    window.location.href = 'index.php';
                });
            });
        } else {
            console.log('No se encontraron elementos con la clase material-symbols-outlined.');
        }
    });
</script>
