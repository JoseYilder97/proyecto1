<?php
include("../../views/head.php");

?>
<!-- ================ Order Details List ================= -->
<div class="details">

  <div class="recentOrders">
    <div class="cardHeader">
      <h2>Lista de Usuarios</h2>
      <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#nuevoModal"><span class="material-symbols-outlined">add</span>Añadir</a>

    </div>


    <?php
    /* include("../../views/Dashboard/newData.php");  */
    /*     include("../../views/Dashboard/pacientes.php");  */

    ?>

    <?php
    include("../../views/modal/administracion/agregar.php");

    ?>
  </div>

  <!-- =

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