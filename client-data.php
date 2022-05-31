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
$DatosEnvio = mysqli_query($conexion, "SELECT * FROM datos_de_envio WHERE ID_Usuario = '$ID_Usuario'");
while ($consulta = mysqli_fetch_array($DatosEnvio)) {
    $EDireccion1 = $consulta['Direccion1'];
    $EDireccion2 = $consulta['Direccion2'];
    $EPais = $consulta['Pais'];
    $EEstado = $consulta['Estado'];
    $ECiudad = $consulta['Ciudad'];
    $ECP = $consulta['CP'];
}
$DatosFacturacion = mysqli_query($conexion, "SELECT * FROM datos_de_facturacion WHERE ID_Usuario = '$ID_Usuario'");
while ($consulta2 = mysqli_fetch_array($DatosFacturacion)) {
    $FDireccion1 = $consulta2['Direccion1'];
    $FDireccion2 = $consulta2['Direccion2'];
    $FPais = $consulta2['Pais'];
    $FEstado = $consulta2['Estado'];
    $FCiudad = $consulta2['Ciudad'];
    $FCP = $consulta2['CP'];
}

?>

<body>
    <!-- banner -->
    <div class="banner10" id="home1">
        <div class="container">
            <h2>Datos de cliente</h2>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Datos de cliente</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="mx-auto" style="margin: 1rem; padding: 1rem;">
        <div class="container">

            <div class="mx-auto" style="width: 70%;  margin-left: auto; margin-right: auto;">
                <h3 class="bars">Datos de cliente</h3>
                <table class="table table-bordered">
                    <tbody>

                        <tr>
                            <td style="width: 200px;">Correo</td>
                            <td><?php echo $correo ?></td>
                        </tr>
                        <tr>
                            <td>Nombre(s)</td>
                            <td><?php echo $Nombre ?></td>
                        </tr>
                        <tr>
                            <td>Primer Apellido</td>
                            <td><?php echo $ApellidoP ?></td>
                        </tr>
                        <tr>
                            <td>Segundo Apellido</td>
                            <td><?php echo $ApellidoM ?></td>
                        </tr>
                        <tr>
                            <td>Teléfono</td>
                            <td><?php echo $Telefono ?></td>
                        </tr>
                        <tr>
                    </tbody>

                </table>
                <a href="profile.php" type="submit" class="btn btn-primary">Editar</a>
                <hr />
                <h3 class="bars">Datos de dirección de envio</h3>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td style="width: 200px;">Direccíon principal</td>
                            <td><?php echo $EDireccion1 ?></td>
                        </tr>
                        <tr>
                            <td>Dirección secundaria</td>
                            <td><?php echo $EDireccion2 ?></td>
                        </tr>
                        <tr>
                            <td>País</td>
                            <td><?php echo $EPais ?></td>
                        </tr>
                        <tr>
                            <td>Estado</td>
                            <td><?php echo $EEstado ?></td>
                        </tr>
                        <tr>
                            <td>Ciudad</td>
                            <td><?php echo $ECiudad ?></td>
                        </tr>
                        <tr>
                            <td>C.P.</td>
                            <td><?php echo $ECP ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="shipping.php" type="submit" class="btn btn-primary">Editar</a>
                <hr />
                <h3 class="bars">Datos de dirección de facturación</h3>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td style="width: 200px;">Direccíon principal</td>
                            <td><?php echo $FDireccion1 ?></td>
                        </tr>
                        <tr>
                            <td>Dirección secundaria</td>
                            <td><?php echo $FDireccion2 ?></td>
                        </tr>
                        <tr>
                            <td>País</td>
                            <td><?php echo $FPais ?></td>
                        </tr>
                        <tr>
                            <td>Estado</td>
                            <td><?php echo $FEstado ?></td>
                        </tr>
                        <tr>
                            <td>Ciudad</td>
                            <td><?php echo $FCiudad ?></td>
                        </tr>
                        <tr>
                            <td>C.P.</td>
                            <td><?php echo $FCP ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="billing.php" type="submit" class="btn btn-primary">Editar</a>
            </div>
            <div class="bs-docs-example">

            </div>
        </div>
    </div>
</body>
<?php
include 'footer.php';
?>