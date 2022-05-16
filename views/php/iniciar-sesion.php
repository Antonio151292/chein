<?php
include 'conexion.php';
if (isset($_POST['Email']) && isset($_POST['Password'])) {
    $mail = $_POST['Email'];
    $mail = strtolower($mail);
    $password = $_POST['Password'];
    $password = sha1($password);
    $resultados = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo =  '$mail' AND password = '$password'");
    while ($print = mysqli_fetch_array($resultados)) {
        $type_user = $print['ID_TipoUsuario'];
        $ID_user = $print['ID_Usuario'];

        //Si es diferente de los tipos de usuario validando que el correo y contraseña sean incorectos el mensaje sera $noexiste

        // Si type_user es 1 accede a usuario
        if ($print['ID_TipoUsuario'] == 1) {
            session_start();
            $_SESSION['ID_TipoUsuario']  = '1';
            $_SESSION['correo']  = $correo;
            $_SESSION['ID_Usuario'] = $ID_usuario;
            header('location:..\..\index.php');
        }
        // Si type_user es 2 accede a admin
        if ($print['ID_TipoUsuario'] == 2) {
            session_start();
            $_SESSION['ID_TipoUsuario']  = '2';
            $_SESSION['correo']  = $correo;
            $_SESSION['ID_Usuario'] = $ID_usuario;
            header('location:..\admin\index.php');
        }
    }
    echo "<script>
        alert('El usuario o contraseña no existen');
        window.location = '../../index.php';
        </script>";
}
