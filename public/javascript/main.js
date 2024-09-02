// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};
// Menu Toggle

let logoText = document.querySelector(".logo .a"); // Selecciona el elemento de texto del logo
let logoImage = document.querySelector(".logo img"); // Selecciona la imagen del logo

toggle.onclick = function () {
    navigation.classList.toggle("active");
    main.classList.toggle("active");

    // Oculta el texto del logo y muestra la imagen cuando se hace clic en toggle
    if (logoText.style.display === "none") {
        logoText.style.display = "block";
        logoImage.style.display = "block";
    } else {
        logoText.style.display = "none";
        logoImage.style.display = "block";
    }
};

/* ===========ferfil========= */
document.addEventListener('DOMContentLoaded', function() {
  // Encuentra el elemento span con la clase perfil-users
  var dropdownIcon = document.querySelector('.perfil-users');

  // Variable para rastrear el estado del menú
  var menuOpen = false;

  // Función para mostrar u ocultar el contenido dentro de .profile
  function toggleProfileDisplay() {
    var profileContent = document.querySelector('.profile');
    profileContent.style.display = profileContent.style.display === 'none' ? 'block' : 'none';
    // Actualiza el estado del menú
    menuOpen = !menuOpen;
  }

  // Agrega un controlador de eventos de clic al ícono del menú
  dropdownIcon.addEventListener('click', function(event) {
    event.stopPropagation(); // Evita que el evento se propague al body
    toggleProfileDisplay();
  });

  // Agrega un controlador de eventos de clic al body para manejar clics fuera del menú
  document.body.addEventListener('click', function(event) {
    // Comprueba si el clic fue fuera del menú .profile y si el menú no está abierto
    if (!dropdownIcon.contains(event.target) && !menuOpen) {
      toggleProfileDisplay();
    }
  });
});