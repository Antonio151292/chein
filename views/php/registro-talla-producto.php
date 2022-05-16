<script type="text/javascript" src="../../style/sweetalert/dist/sweetalert2.all.min.js"></script>
<?php
include '../header.php';
include 'conexion.php';
//registrar tipo producto
$NombreTallaProducto = $_POST['NombreTallaProducto'];
$DescripcionTallaProducto = $_POST['DescripcionTallaProducto'];
//insertar en tablas
$sqlusuario = "INSERT into talla(Talla,Descripcion) 
   VALUES ('$NombreTallaProducto','$DescripcionTallaProducto')";
$INSERCION = mysqli_query($conexion, $sqlusuario);
echo "
<script>
  alert('Registro exitoso');
  window.location = '../admin/registro.php';
</script>";
?>