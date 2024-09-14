<?php
include("../../views/modal/administracion/agregar_cliente.php");

?>

<?php
include("../head.php");
include("../head_datatable.php");

?>

<!-- ================ Order Details List ================= -->

<div class="details">
  <div class="recentOrders">
    <div class="cardHeader">
      <h2>Listado de Cliente</h2>
      <h6>Deseas Exportar</h6>
      <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#nuevoModal"><span class="material-symbols-outlined">add</span>Nuevo Cliente</a>
    </div>

    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 4.0
            </td>
            <td>Win 95+</td>
            <td> 4</td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-success"><span class="material-symbols-outlined">
                    visibility
                  </span></button>
                <button type="button" class="btn btn-primary"><span class="material-symbols-outlined">
                    edit
                  </span></button>
                <button type="button" class="btn btn-danger"><span class="material-symbols-outlined">
                    delete
                  </span></button>
              </div>

            </td>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 4.0
            </td>
            <td>Win 95+</td>
            <td> 4</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 5.0
            </td>
            <td>Win 95+</td>
            <td>5</td>
            <td>C</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 5.5
            </td>
            <td>Win 95+</td>
            <td>5.5</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 6
            </td>
            <td>Win 98+</td>
            <td>6</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet Explorer 7</td>
            <td>Win XP SP2+</td>
            <td>7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>AOL browser (AOL desktop)</td>
            <td>Win XP</td>
            <td>6</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Firefox 1.5</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Firefox 2.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Firefox 3.0</td>
            <td>Win 2k+ / OSX.3+</td>
            <td>1.9</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Camino 1.0</td>
            <td>OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Camino 1.5</td>
            <td>OSX.3+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Netscape 7.2</td>
            <td>Win 95+ / Mac OS 8.6-9.2</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Netscape Browser 8</td>
            <td>Win 98SE+</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Netscape Navigator 9</td>
            <td>Win 98+ / OSX.2+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.0</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.1</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.1</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.2</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.2</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.3</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.3</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.4</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.4</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.5</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.5</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.6</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1.6</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.7</td>
            <td>Win 98+ / OSX.1+</td>
            <td>1.7</td>
            <td>A</td>
          </tr>
          <tr>
            <td>Gecko</td>
            <td>Mozilla 1.8</td>
            <td>Win 98+ / OSX.1+</td>
            <td>1.8</td>
            <td>A</td>
          </tr>

        </tbody>
        <tfoot>
          <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>Acción</th>
          </tr>
        </tfoot>
      </table>
    </div>

  </div>

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
  $(document).ready(function() {
    var table = $('#example1').DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "language": {
        "lengthMenu": "Mostrar _MENU_ registros por página",
        "zeroRecords": "Ningún usuario encontrado",
        "info": "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        "infoEmpty": "Ningún usuario encontrado",
        "infoFiltered": "(filtrados desde _MAX_ registros totales)",
        "search": "Buscar:",
        "loadingRecords": "Cargando...",
        "paginate": {
          "first": "Primero",
          "last": "Último",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },
      "lengthMenu": [5, 10, 25, 50, 100, 200, 500],
      "pageLength ": 5
    });

    table.buttons().container().appendTo('.col-md-6:eq(0)');
  });
</script>