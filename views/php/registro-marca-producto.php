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