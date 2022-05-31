
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
        window.location.href = '../admin/registro.php';}
        setTimeout('redireccionar()', 1000);
    </script>";
?>
