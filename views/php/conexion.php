<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "chein";

$conexion = new mysqli($server, $user, $pass, $bd);
$conexion -> set_charset("utf8");
if (mysqli_connect_errno()) {
    echo "No conectado", mysqli_connect_error();
    exit();
}
