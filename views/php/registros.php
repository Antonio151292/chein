<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
<?php
include 'conexion.php';
// Editar Perfil
if (isset($_POST['ActualizarPerfil'])) {
    $ID_Usuario = $_POST['ActualizarPerfil'];
    $Correo = $_POST['Correo'];
    $Nombre = $_POST['Nombre'];
    $ApellidoP = $_POST['ApellidoP'];
    $ApellidoM = $_POST['ApellidoM'];
    $Telefono = $_POST['Telefono'];
    $password = ($_POST['Password']);
    $pass = "";
    if ($password != '') {

        $encriptado = sha1($password);
        $pass = ", password = '$encriptado'";
    }
    $ActualizarUsuario = "UPDATE usuario SET correo='$Correo' $pass WHERE ID_Usuario = '$ID_Usuario'";
    $sql = mysqli_query($conexion, $ActualizarUsuario);
    $ActualizarDatos = "UPDATE datos_de_usuario SET Nombre='$Nombre', ApellidoP='$ApellidoP', ApellidoM='$ApellidoM', Telefono='$Telefono' WHERE ID_Usuario = '$ID_Usuario'";
    $sql = mysqli_query($conexion, $ActualizarDatos);
    echo "
    <body>
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Actualización éxitosa',
            showConfirmButton: false,
        })
        </script>
    </body>
    <script>
        function redireccionar(){
        window.location.href = '../../profile.php';}
        setTimeout('redireccionar()', 1000);
    </script>";
}

// Eliminar Perfil
if (isset($_POST['EliminarPerfil'])) {
    $borrar = $_POST['EliminarPerfil'];
    $EliminarDatosUsuario = mysqli_query($conexion, "DELETE FROM datos_de_usuario WHERE ID_Usuario = $borrar");
    $EliminarUsuario = mysqli_query($conexion, "DELETE FROM datos_de_envio WHERE ID_Usuario = $borrar");
    $EliminarUsuario = mysqli_query($conexion, "DELETE FROM datos_de_facturacion WHERE ID_Usuario = $borrar");
    $EliminarUsuario = mysqli_query($conexion, "DELETE FROM usuario WHERE ID_Usuario = $borrar");
    echo "
    <body>
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Tu cuenta se ha eliminado satisfactoriamente',
            showConfirmButton: false,
        })
        </script>
    </body>";
    session_start();
    session_destroy();
    echo "
    <script>
        function redireccionar(){
        window.location.href = '../../index.php';}
        setTimeout('redireccionar()', 1500);
    </script>";
}

// Editar Envio
if (isset($_POST['ActualizarDatosDeEnvio'])) {
    $ID_Usuario = $_POST['ActualizarDatosDeEnvio'];
    $Direccion1 = $_POST['Direccion1'];
    $Direccion2 = $_POST['Direccion2'];
    $Pais = $_POST['Pais'];
    $Estado = $_POST['Estado'];
    $Ciudad = $_POST['Ciudad'];
    $CP = $_POST['CP'];
   
    $ActualizarDatosDeEnvio = "UPDATE datos_de_envio SET Direccion1='$Direccion1', Direccion2='$Direccion2', Pais='$Pais', Estado='$Estado', Ciudad='$Ciudad', CP='$CP' WHERE ID_Usuario = '$ID_Usuario'";
    
    $sql = mysqli_query($conexion, $ActualizarDatosDeEnvio);
    echo "
    <body>
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Actualización éxitosa',
            showConfirmButton: false,
        })
        </script>
    </body>
    <script>
        function redireccionar(){
        window.location.href = '../../shipping.php';}
        setTimeout('redireccionar()', 1000);
    </script>";
}

// Editar Facturacion
if (isset($_POST['ActualizarDatosDeFacturacion'])) {
    $ID_Usuario = $_POST['ActualizarDatosDeFacturacion'];
    $Direccion1 = $_POST['Direccion1'];
    $Direccion2 = $_POST['Direccion2'];
    $Pais = $_POST['Pais'];
    $Estado = $_POST['Estado'];
    $Ciudad = $_POST['Ciudad'];
    $CP = $_POST['CP'];
   
    $ActualizarDatosDeFacturacion = "UPDATE datos_de_facturacion SET Direccion1='$Direccion1', Direccion2='$Direccion2', Pais='$Pais', Estado='$Estado', Ciudad='$Ciudad', CP='$CP' WHERE ID_Usuario = '$ID_Usuario'";
    
    $sql = mysqli_query($conexion, $ActualizarDatosDeFacturacion);
    echo "
    <body>
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Actualización éxitosa',
            showConfirmButton: false,
        })
        </script>
    </body>
    <script>
        function redireccionar(){
        window.location.href = '../../billing.php';}
        setTimeout('redireccionar()', 1000);
    </script>";
}