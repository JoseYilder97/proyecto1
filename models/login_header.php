<?php
include("../models/head.php");
?>
<nav class="navbar">
    <div class="logos">
        <picture>
            <img src="../images/logos.png" alt="dog" srcset="Este es un perro de logo">
        </picture>
    </div>

    <div class="navbar-right">

        <ul>
            <li class="navbar-email">joseyilder1997@gmail.com</li>
            <a class="logins" href="./login.php">login</a>
            <li class="navbar-user">
                <span class="material-symbols-outlined">
                    person
                </span>


            </li>
        </ul>

    </div>
</nav>
<script>
    document.querySelector(".navbar").style.backgroundColor = "var(--color--principal)";
    const navbarUser = document.querySelector(".navbar-user");
    navbarUser.style.backgroundColor = "var(--color--formulary)";
    navbarUser.style.color = "white";
    navbarUser.style.display = "flex";
    navbarUser.style.padding = "10px";
    navbarUser.style.position = "relative";
    navbarUser.style.borderRadius = "50%";
    navbarUser.style.top = "8px";
    navbarUser.style.cursor = "pointer";
    const spanElement = document.querySelector(".navbar-user");
    spanElement.addEventListener("click", function() {
        window.location.href = "login.php";
    });

    document.addEventListener("DOMContentLoaded", function() {
        var login = document.getElementById("login");
        var registro = document.getElementById("registro");

        document.getElementById("registro.php").addEventListener("click", function() {
            login.style.display = "none";
            registro.style.display = "block";
        });

        document.getElementById("login.php").addEventListener("click", function() {
            login.style.display = "block";
            registro.style.display = "none";
        });
    });
</script>