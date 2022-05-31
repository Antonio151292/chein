<?php
include 'conexion.php';
//registrar usuario

$correo = $_POST['Email'];
$correo = strtolower($correo);
$pass = $_POST['Password'];
$tipo = "1";
$encriptado = sha1($pass);

   //insertar en tablas
   $sqlusuario = "INSERT INTO usuario(correo,password,ID_TipoUsuario) 
   VALUES ('$correo','$encriptado','$tipo')";
   $Insercion = mysqli_query($conexion,$sqlusuario);
   $Usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$correo'");
while ($consulta = mysqli_fetch_array($Usuario)) {
   $ID = $consulta['ID_Usuario'];
}
// inserción ID Datos de usuario
$DatosUsuario = "INSERT INTO datos_de_usuario(ID_Usuario) 
   VALUES ('$ID')";
   $Insercion = mysqli_query($conexion,$DatosUsuario);
   // inserción ID tabla Facturación
   $DatosFacturacion = "INSERT INTO datos_de_facturacion(ID_Usuario) 
   VALUES ('$ID')";
   $Insercion = mysqli_query($conexion,$DatosFacturacion);
   // inserción ID tabla Envio
   $DatosEnvio = "INSERT INTO datos_de_envio(ID_Usuario) 
   VALUES ('$ID')";
   $Insercion = mysqli_query($conexion,$DatosEnvio);
   echo "
    <body>
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Registro éxitoso',
            showConfirmButton: false,
        })
        </script>
    </body>
    <script>
        function redireccionar(){
        window.location.href = '../../index.php';}
        setTimeout('redireccionar()', 1000);
    </script>";
