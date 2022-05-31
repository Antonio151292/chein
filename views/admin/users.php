<?php
include 'menu.php';
?>

<body>
    <form method="POST">
        <table class="table table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col"><i class="fas fa-signature"></i>ID</th>
                    <th scope="col"><i class="fas fa-signature"></i> Correo</th>
                    <th scope="col"><i class="fas fa-city"></i> Nombre</th>
                    <th scope="col"><i class="fas fa-briefcase"></i> Telefono</th>
                    <th scope="col"><i class="fas fa-briefcase"></i> Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $resultados = mysqli_query($conexion, "SELECT * FROM usuario INNER JOIN datos_de_usuario on usuario.ID_Usuario=datos_de_usuario.ID_Usuario");
                while ($consulta = mysqli_fetch_array($resultados)) {
                    echo "
                <tr>
                <td>" . $consulta['ID_Usuario'] . "</td>
                <td>" . $consulta['correo'] . " </td>
                    <td>" . $consulta['Nombre'] . ' ' . $consulta['ApellidoP'] . ' ' . $consulta['ApellidoM'] .  "</td>
                    <td>" . $consulta['Telefono'] . "</td>
                    <td> <button type='submit' name='delete' value='$consulta[ID_Usuario]' class='btn btn-outline-danger'><i class='fas fa-eraser'></i></button> 
                    <a href='admin-edit-user.php?ID_Usuario=" . $consulta['ID_Usuario'] . "' name='edit-user' value='$consulta[ID_Usuario]' class='btn btn-outline-primary'><i class='fas fa-user-edit'></i></a></td>
                </tr>
                ";
                }

                if (isset($_POST['delete'])) {

                    $borrar = $_POST['delete'];
                    $EliminarDatosUsuario = mysqli_query($conexion, "DELETE FROM datos_de_usuario WHERE ID_Usuario = $borrar");
                    $EliminarUsuario = mysqli_query($conexion, "DELETE FROM datos_de_envio WHERE ID_Usuario = $borrar");
                    $EliminarUsuario = mysqli_query($conexion, "DELETE FROM datos_de_facturacion WHERE ID_Usuario = $borrar");
                    $EliminarUsuario = mysqli_query($conexion, "DELETE FROM usuario WHERE ID_Usuario = $borrar");
                    echo "
    <body>
        <script>
        Swal.fire({
            icon: 'success',
            title: 'La cuenta se elimino satisfactoriamente',
            showConfirmButton: false,
        })
        </script>
    </body>";
                    session_start();
                    session_destroy();
                    echo "
    <script>
        function redireccionar(){
        window.location.href = 'users.php';}
        setTimeout('redireccionar()', 1500);
    </script>";
                }
                ?>
            </tbody>
        </table>
    </form>
</body>