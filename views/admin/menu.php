<?php
include 'header.php';
include '../php/conexion.php';
session_start();
if(isset($_SESSION['ID_TipoUsuario'])){
  $usuario = $_SESSION['ID_TipoUsuario'];
  $correo = $_SESSION['correo'];
  $ID_Usuario = $_SESSION['ID_Usuario'];
}else {};
if (isset($usuario)) {
  $cliente = $usuario;
} else {
  echo '
  
  
  <div style="display: flex;
  justify-content: center;
  align-items: center;">
  <h1>NO DEBERIAS ESTAR AQUÍ
  <img class="rounded mx-auto d-block" style="display:block;
  margin:auto;width: 50px;" src="../../images/preocupado.png">
  </div>
  </h1>
  
  ';
  echo "
<script>
      function redireccionar(){
      window.location.href = '../../index.php';}
      setTimeout('redireccionar()', 1200);
  </script>";
  die();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CHEIN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../admin/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../admin/registro.php">Registrar producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../admin/users.php">Usuarios</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" onclick="location.href='../php/session_close.php'" class="nav_link cerrar" title="Cerrar sesión"> <span class="nav_name">Cerrar sesión</span></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>