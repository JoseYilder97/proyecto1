
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
    const spanElement = document.querySelector(".product-detail-close");
    spanElement.addEventListener("click", function() {
        window.location.href = "bienvenido.php";
    });
</script>