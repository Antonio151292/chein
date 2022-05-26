<?php
include 'header.php';
?>

<body>
    <!-- banner -->
    <div class="banner10" id="home1">
        <div class="container">
            <h2>Editar Perfil</h2>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Editar Perfil</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="mx-auto" style="margin: 1rem; padding: 1rem;">
        <div class="container">
            <form>
                <div class="mx-auto" style="width: 70%;  margin-left: auto; margin-right: auto;">
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="password" class="form-label">Cambiar contraseña</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre(s)</label>
                        <input type="email" class="form-control" id="nombre">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="ApellidoP" class="form-label">Primer Apellido</label>
                        <input type="email" class="form-control" id="ApellidoP">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="ApellidoM" class="form-label">Segundo Apellido</label>
                        <input type="email" class="form-control" id="ApellidoM" placeholder="jajsjs">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</body>
<?php
include 'footer.php';
?>