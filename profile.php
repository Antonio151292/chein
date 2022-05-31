<?php

include 'header.php';
if (isset($usuario)) {
    $cliente = $usuario;
} else {
    echo '
    
    
    <div style="display: flex;
    justify-content: center;
    align-items: center;">
    <h1>NO DEBERIAS ESTAR AQUÍ
    <img class="rounded mx-auto d-block" style="display:block;
    margin:auto;width: 50px;" src="images/preocupado.png">
    </div>
    </h1>
    
    ';
    echo "
 <script>
        function redireccionar(){
        window.location.href = 'index.php';}
        setTimeout('redireccionar()', 1200);
    </script>";
    die();
}

$DatosUsuario = mysqli_query($conexion, "SELECT * FROM datos_de_usuario WHERE ID_Usuario = '$ID_Usuario'");
while ($consulta = mysqli_fetch_array($DatosUsuario)) {
    $Nombre = $consulta['Nombre'];
    $ApellidoP = $consulta['ApellidoP'];
    $ApellidoM = $consulta['ApellidoM'];
    $Telefono = $consulta['Telefono'];
}



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
            <form enctype="multipart/form-data" action="views/php/registros.php" method="POST">
                <div class="mx-auto" style="width: 70%;  margin-left: auto; margin-right: auto;">
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input name="Correo" value='<?php echo $correo ?>' type="email" class="form-control" id="correo" readonly>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="password" class="form-label">Cambiar contraseña</label>
                        <input name="Password" type="password" class="form-control" id="password">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre(s)</label>
                        <input name="Nombre" value='<?php echo $Nombre ?>' type="text" class="form-control" id="nombre">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="ApellidoP" class="form-label">Primer Apellido</label>
                        <input name="ApellidoP" value='<?php echo $ApellidoP ?>' type="text" class="form-control" id="ApellidoP">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="ApellidoM" class="form-label">Segundo Apellido</label>
                        <input name="ApellidoM" value='<?php echo $ApellidoM ?>' type="text" class="form-control" id="ApellidoM">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input name="Telefono" value='<?php echo $Telefono ?>' type="text" class="form-control" id="telefono">
                    </div>
                    <br>
                    <button type="submit" name="ActualizarPerfil" value="<?php echo $ID_Usuario ?>" class="btn btn-primary">Guardar</button>
                    <button type="submit" name="EliminarPerfil" value="<?php echo $ID_Usuario ?>" class="btn btn-danger">Eliminar cuenta permanentemente</button>
                </div>
            </form>
        </div>
    </div>
</body>
<?php
include 'footer.php';
?>