<?php

include 'header.php';

    $DatosUsuario = mysqli_query($conexion, "SELECT * FROM datos_de_envio WHERE ID_Usuario = '$ID_Usuario'");
    while ($consulta = mysqli_fetch_array($DatosUsuario)) {
        $Direccion1 = $consulta['Direccion1'];
        $Direccion2 = $consulta['Direccion2'];
        $Pais = $consulta['Pais'];
        $Estado = $consulta['Estado'];
        $Ciudad = $consulta['Ciudad'];
        $CP = $consulta['CP'];
    }


?>

<body>
    <!-- banner -->
    <div class="banner10" id="home1">
        <div class="container">
            <h2>Datos de Envio</h2>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Editar Datos de Envio</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="mx-auto" style="margin: 1rem; padding: 1rem;">
        <div class="container">
            <form enctype="multipart/form-data" action="views/php/registros.php" method="POST">
                <div class="mx-auto" style="width: 70%;  margin-left: auto; margin-right: auto;">
                <div class="mb-3">
                        <label for="Direccion1" class="form-label">Dirección 1</label>
                        <input name="Direccion1" value='<?php echo $Direccion1 ?>' type="text" class="form-control" id="nombre">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="Direccion2" class="form-label">Dirección 2</label>
                        <input name="Direccion2" value='<?php echo $Direccion2 ?>' type="text" class="form-control" id="nombre">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="Pais" class="form-label">País</label>
                        <input name="Pais" value='<?php echo $Pais ?>' type="text" class="form-control" id="nombre">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="Estado" class="form-label">Estado</label>
                        <input name="Estado" value='<?php echo $Estado ?>' type="text" class="form-control" id="ApellidoP">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="Ciudad" class="form-label">Ciudad</label>
                        <input name="Ciudad" value='<?php echo $Ciudad ?>' type="text" class="form-control" id="ApellidoM">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="CP" class="form-label">Codigo Postal</label>
                        <input name="CP" value='<?php echo $CP ?>' type="text" class="form-control" id="telefono">
                    </div>
                    <br>
                    <button type="submit" name="ActualizarDatosDeEnvio" value="<?php echo $ID_Usuario ?>"  class="btn btn-primary">Guardar</button>
                    
                </div>
            </form>
        </div>
    </div>
</body>
<?php
include 'footer.php';
?>