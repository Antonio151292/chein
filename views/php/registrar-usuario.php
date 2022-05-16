<?php
include 'conexion.php';
//registrar usuario

$correo = $_POST['Email'];
$correo = strtolower($correo);
$pass = $_POST['Password'];
$tipo = "1";
$encriptado = sha1($pass);

   //insertar en tablas
   $sqlusuario = "INSERT into usuario(correo,password,ID_TipoUsuario) 
   VALUES ('$correo','$encriptado','$tipo')";
   $INSERCION = mysqli_query($conexion,$sqlusuario);
   echo"<script>
      alert('Registro exitoso');
      window.location = '../../index.php';
   </script>";

      ?>