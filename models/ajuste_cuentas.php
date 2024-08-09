<?php
include("../models/head.php");
include("../models/header.php");
include("../models/nab.php");

?>
<div class="items-header-recuperar">
    <form action="">
        <div class="items_head">
            <h3>Configuracion de usuario:</h3>
            <form action="" method="get"></form>
            <nav class="nav">
                <ul>
                    <li data-target="formulario-configuracion">
                        <span class="material-symbols-outlined">settings</span><a href="#">Información personal</a>
                    </li>
                    <li class="active" data-target="formulario-personal-info">
                        <span class="material-symbols-outlined">settings</span><a href="#">Rol Información personal</a>
                    </li>
                    <li data-target="formulario-cambio-password">
                        <span class="material-symbols-outlined">calendar_month</span><a href="#">Contraseña</a>
                    </li>
                    <li data-target="formulario-referencias">
                        <span class="material-symbols-outlined">local_hospital</span><a href="#">Referencias</a>
                    </li>
                </ul>
            </nav>
        </div>
    </form>
</div>
<section class="gradient-form" id="formulario-configuracion" style="display: block;">
    <div class="container" style="margin-top: 50px;">
        <div class=" row">
            <div class="col-sm-4" style="margin-top: 50px;">
                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="text-center center-block file-upload">
                </div>
                </hr><br>
                <div class="panel panel-default">
                    <div class="panel-heading">Sitio Web <i class="fa fa-link fa-1x"></i></div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Actividad <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78
                    </li>
                </ul>
            </div>
            <div class="col-sm-8" style="margin-top: 50px;">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Perfil</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="nombre">
                                        <h4>Nombre</h4>
                                    </label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name">
                                        <h4>Apellidos</h4>
                                    </label>
                                    <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="apellidos">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="teléfono">
                                        <h4>Teléfono</h4>
                                    </label>
                                    <input type="text" class="form-control" name="teléfono" id="teléfono" placeholder="teléfono">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile">
                                        <h4>Movil</h4>
                                    </label>
                                    <input type="text" class="form-control" name="movil" id="movil" placeholder="introduce tu móvil">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Email</h4>
                                    </label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="ciudad">
                                        <h4>Ciudad</h4>
                                    </label>
                                    <input type="text" class="form-control" id="ciudad" placeholder="ciudad">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password">
                                        <h4>Contraseña</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="contraseña">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2">
                                        <h4>Verifica la contraseña</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="password2">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Guardar</button>
                                    <button class="btn btn-danger" type="reset"><i class="glyphicon glyphicon-repeat"></i> Limpiar</button>
                                </div>
                            </div>
                        </form>

                        <hr>

                    </div>
                </div>

            </div>
        </div>
</section>
<section class="gradient-form" style="background-color: #eee;" id="formulario-personal-info">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="../images/logos.png" alt="dog" srcset="Este es un perro de logo" style="width: 150px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                                </div>

                                <form>
                                    <p>Please login to your account</p>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="email" id="form2Example11" class="form-control" placeholder="Phone number or email address" />
                                        <label class="form-label" for="form2Example11">Username</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="form2Example22" class="form-control" />
                                        <label class="form-label" for="form2Example22">Password</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                                            in</button>
                                        <a class="text-muted" href="#!">Forgot password?</a>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Don't have an account?</p>
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Create new</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">We are more than just a company</h4>
                                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    $(document).ready(function() {
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".file-upload").on('change', function() {
            readURL(this);
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Selecciona todos los elementos <li> con la clase 'active'
        document.querySelectorAll('li.active').forEach(function(item) {
            item.addEventListener('click', function(event) {
                // Evita el comportamiento predeterminado del enlace
                event.preventDefault();

                // Obtiene el ID del formulario a mostrar desde el atributo data-target
                var targetId = this.getAttribute('data-target');

                // Encuentra el formulario por su ID y lo muestra
                var formElement = document.getElementById(targetId);
                if (formElement) {
                    formElement.style.display = 'block'; // Muestra el formulario
                }
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Selecciona todos los elementos <li> con la clase 'active' o sin ella
        document.querySelectorAll('li[data-target]').forEach(function(item) {
            item.addEventListener('click', function(event) {
                // Evita el comportamiento predeterminado del enlace
                event.preventDefault();

                // Obtiene el ID del formulario a mostrar desde el atributo data-target
                var targetId = this.getAttribute('data-target');

                // Encuentra el formulario por su ID y lo muestra
                var formElement = document.getElementById(targetId);
                if (formElement) {
                    // Oculta otros formularios si están visibles
                    document.querySelectorAll('.gradient-form').forEach(function(form) {
                        if (form.id !== targetId) {
                            form.style.display = 'none';
                        }
                    });
                    // Muestra el formulario seleccionado
                    formElement.style.display = 'block';
                }
            });
        });
    });
</script>

<?php
include("../models/footer.php");
?>