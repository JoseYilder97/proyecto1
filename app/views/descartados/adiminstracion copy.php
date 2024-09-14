<?php
include("../../views/head.php");

?>
<!-- ================ Order Details List ================= -->
<div class="details">

  <div class="recentOrders">
    <div class="cardHeader">
      <h2>Administración</h2>
      <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#nuevoModal"><span class="material-symbols-outlined">add</span>Añadir</a>

    </div>
    <ul class="ul_admis" role="tablist">

      <li class="nav-item">
        <a class="nav-link active " data-toggle="tab" href="agenda.php" role="tab">
          <i class="la la-home"></i> Información general
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-toggle="tab" href="#" role="tab">
          <i class="la la-map-signs"></i> Localización y servicios
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-toggle="tab" href="#" role="tab">
          <i class="la la-calendar"></i> Agenda y disponibilidad
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-toggle="tab" href="#" role="tab">
          <i class="la la-money"></i> Perfil fiscal
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-toggle="tab" href="#" role="tab">
          <i class="flaticon-notepad"></i> Ventas e inventario
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-toggle="tab" href="#" role="tab">
          <i class="la la-inbox"></i> Preferencias
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-toggle="tab" href="#" role="tab">
          <i class="la la-tv"></i> Sala de espera
        </a>
      </li>


    </ul>
    <?php
    include("../../views/Dashboard/newData.php");
    ?>
  </div>
  <?php
  include("../../views/modal/administracion/agregar.php");

  ?>
  <!-- ================= New Customers ================ -->
  <div class="recentCustomers">
    <div class="cardHeader">
      <h2>Cliente Reciente</h2>
    </div>

    <table>
      <tr>
        <td width="60px">
          <div class="imgBx"><img src="../../public/images/logos.png" alt=""></div>
        </td>
        <td>
          <h4>jose <br> <span>Clinte</span></h4>
        </td>
      </tr>

      <tr>
        <td width="60px">
          <div class="imgBx"><img src="../../public/images/logos.png" alt=""></div>
        </td>
        <td>
          <h4>Juan <br> <span>Cliente</span></h4>
        </td>
      </tr>

      <tr>
        <td width="60px">
          <div class="imgBx"><img src="../../public/images/logos.png" alt=""></div>
        </td>
        <td>
          <h4>jose <br> <span>Clinte</span></h4>
        </td>
      </tr>

      <tr>
        <td width="60px">
          <div class="imgBx"><img src="../../public/images/logos.png" alt=""></div>
        </td>
        <td>
          <h4>Juan <br> <span>Cliente</span></h4>
        </td>
      </tr>

      <tr>
        <td width="60px">
          <div class="imgBx"><img src="../../public/images/logos.png" alt=""></div>
        </td>
        <td>
          <h4>jose <br> <span>Clinte</span></h4>
        </td>
      </tr>

      <tr>
        <td width="60px">
          <div class="imgBx"><img src="../../public/images/logos.png" alt=""></div>
        </td>
        <td>
          <h4>Juan <br> <span>Cliente</span></h4>
        </td>
      </tr>

      <tr>
        <td width="60px">
          <div class="imgBx"><img src="../../public/images/logos.png" alt=""></div>
        </td>
        <td>
          <h4>jose <br> <span>Clinte</span></h4>
        </td>
      </tr>

      <tr>
        <td width="60px">
          <div class="imgBx"><img src="../../public/images/logos.png" alt=""></div>
        </td>
        <td>
          <h4>Juan <br> <span>Cliente</span></h4>
        </td>
      </tr>
    </table>
  </div>

</div>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('.nav-item');

    navItems.forEach(item => {
      item.addEventListener('click', function(e) {
        e.preventDefault();

        // Eliminar la clase active de todos los items
        navItems.forEach(i => i.classList.remove('active'));

        // Agregar la clase active al item seleccionado
        this.classList.add('active');

        // Actualizar el contenido de la tabla según sea necesario
        updateTableContent(this);
      });
    });
  });
</script>