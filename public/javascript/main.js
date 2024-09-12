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
document.addEventListener('DOMContentLoaded', function() {
  const agendaLink = document.getElementById('agenda');
  const dashboardLink = document.getElementById('dashboard');
  const agendaSeviciosDiv = document.querySelector('.agenda_sevicios_active');
  const informacion = document.querySelector('.informacion');


  agendaLink.addEventListener('click', function(e) {
    e.preventDefault();
    mostrarContenido(agendaSeviciosDiv, informacion);
  });

  dashboardLink.addEventListener('click', function(e) {
    e.preventDefault();
    mostrarContenido(informacion, agendaSeviciosDiv);
  });

  function mostrarContenido(mostrar, ocultar1) {
    if (mostrar.style.display === 'none') {
      mostrar.style.display = 'block';
      ocultar1.style.display = 'none';
    } else {
      mostrar.style.display = 'block';
      ocultar1.style.display = 'none';
    }
  }
});
$(document).ready(function() {
    if (!$('#example1').hasClass('dataTable')) {
        $('#example1').DataTable({
      // Opciones de DataTable
    });
    }
});

//Grego este Codigo para que me haga la funcion de a href 
function showSection(section) {
  // Oculta todos los contenedores
  document.querySelectorAll('.content-container > div').forEach(div => {
      div.style.display = 'none';
  });

  // Muestra el contenedor correspondiente
  document.getElementById(`${section}-active`).style.display = 'block';

  // Carga el contenido desde PHP si no está cargado
  if (!document.getElementById(`${section}-active`).innerHTML.trim()) {
      fetch(`/app/views/dashboard/${section}.php`)
          .then(response => response.text())
          .then(data => {
              document.getElementById(`${section}-active`).innerHTML = data;

              // Incluye estilos adicionales si es necesario
              if (section === 'usuarios') {
                  const styleLink = document.createElement('link');
                  styleLink.rel = 'stylesheet';
                  styleLink.href = '/public/css/tabla.css';
                  document.head.appendChild(styleLink);

                  // Incluye scripts adicionales si es necesario
                  const scriptTag = document.createElement('script');
                  scriptTag.src = '/public/js/tabla.js';
                  document.body.appendChild(scriptTag);
              }
          })
          .catch(error => console.error('Error:', error));
  }
}


showSection('tablero');
