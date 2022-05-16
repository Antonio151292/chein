
<?php
include '../header.php';
include 'conexion.php';
//registrar categoria
$NombreCategoria = $_POST['NombreCategoria'];
$DescripcionCategoria = $_POST['DescripcionCategoria'];

//insertar en tablas
$sqlusuario = "INSERT into categoria_de_producto(Categoria,Descripcion) 
   VALUES ('$NombreCategoria','$DescripcionCategoria')";
$INSERCION = mysqli_query($conexion, $sqlusuario);
echo "
<script>
   alert('Registro exitoso');
   window.location = '../admin/registro.php#CategoriaProducto'
</script>";
?>
