<script type="text/javascript" src="../../style/sweetalert/dist/sweetalert2.all.min.js"></script>
<?php
include 'conexion.php';
//marca del producto
$Marca = $_POST['Marca'];
//insertar en tablas
$sqlusuario = "INSERT into marca(Marca) 
   VALUES ('$Marca')";
$INSERCION = mysqli_query($conexion, $sqlusuario);
echo "
<script>
   alert('Registro exitoso');
   window.location = '../admin/registro.php';
</script>";
?>