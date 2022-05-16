<?php
include 'conexion.php';
//registrar tipo producto
$CategoriaProducto = $_POST['CategoriaProducto'];
$TipoProducto = $_POST['TipoProducto'];
$MarcaProducto = $_POST['MarcaProducto'];
$TallaProducto = $_POST['TallaProducto'];
$NombreProducto = $_POST['NombreProducto'];
$Stock = $_POST['Stock'];
$Precio = $_POST['Precio'];
$Descripcion = $_POST['Descripcion'];

$type = 'jpg';
         $rfoto = $_FILES['ImagenProducto']['tmp_name'];
         $name1 = DATE('dmYHmi') . '.' . $type;
         if (is_uploaded_file($rfoto)) {
            $destino = '../../img/' . $name1;
            $ImagenProducto = $name1;
            copy($rfoto, $destino);
         }

//insertar en tablas
$sqlusuario = "INSERT into producto(ID_CategoriaProducto,ID_TipoProducto,ID_Talla,ID_Marca,Nombre,Stock,Precio,Descripcion,Imagen	
) 
   VALUES ('$CategoriaProducto','$TipoProducto','$TallaProducto','$MarcaProducto','$NombreProducto','$Stock','$Precio','$Descripcion','$ImagenProducto')";
$INSERCION = mysqli_query($conexion, $sqlusuario);
echo "
<script>
  alert('Registro exitoso');
  window.location = '../admin/registro.php'
</script>";
?>