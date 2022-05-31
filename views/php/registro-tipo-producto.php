<script type="text/javascript" src="../../style/sweetalert/dist/sweetalert2.all.min.js"></script>
<?php
include '../header.php';
include 'conexion.php';
//registrar tipo producto
$NombreTipoProducto = $_POST['NombreProducto'];
$DescripcionTipoProducto = $_POST['DescripcionProducto'];
//insertar en tablas
$sqlusuario = "INSERT into tipo_de_producto(TipoProducto,Descripcion) 
   VALUES ('$NombreTipoProducto','$DescripcionTipoProducto')";
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