<?php
include 'menu.php';
?>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="RegistrarProducto-tab" data-bs-toggle="tab" data-bs-target="#RegistrarProducto" type="button" role="tab" aria-selected="true">Registrar producto</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="CategoriaProducto-tab" data-bs-toggle="tab" data-bs-target="#CategoriaProducto" type="button" role="tab" aria-selected="false">Categoria producto</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="TipoProducto-tab" data-bs-toggle="tab" data-bs-target="#TipoProducto" type="button" role="tab" aria-selected="false">Tipo producto</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="MarcaProducto-tab" data-bs-toggle="tab" data-bs-target="#MarcaProducto" type="button" role="tab" aria-selected="false">Marca producto</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="TallaProducto-tab" data-bs-toggle="tab" data-bs-target="#TallaProducto" type="button" role="tab" aria-selected="false">Talla producto</button>
    </li>
</ul>
<div class="tab-content " id="myTabContent">
    <div class="tab-pane fade show active" id="RegistrarProducto" role="tabpanel" aria-labelledby="RegistrarProducto-tab">
        <!--Registro de producto -->
        <div class="card-body">
            <h5 class="card-title text-center">Registrar producto</h5>
            <p class="card-text">
            <form action="../php/registro-producto.php" class="row g-3" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label class="form-label">Categoria de producto</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-restroom"></i></div>
                        <select id="inputState" name="CategoriaProducto" class="form-select">
                            <?php
                            //impresion de categoria de producto
                            $resultados = mysqli_query($conexion, "SELECT * FROM categoria_de_producto");
                            while ($use = mysqli_fetch_array($resultados)) {
                                echo "
                                <option value='" . $use['ID_CategoriaProducto'] . "'> " . $use['Categoria'] . "</option>
                            ";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tipo de producto</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-object-group"></i></div>
                        <select id="inputState" name="TipoProducto" class="form-select">
                            <?php
                            //impresion de tipo de producto
                            $resultados = mysqli_query($conexion, "SELECT * FROM tipo_de_producto");
                            while ($use = mysqli_fetch_array($resultados)) {
                                echo "
                                <option value='" . $use['ID_TipoProducto'] . "'> " . $use['TipoProducto'] . "</option>
                            ";
                            }
                            ?>
                        </select>

                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Marca de producto</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fa-solid fa-trademark"></i></div>
                        <select id="inputState" name="MarcaProducto" class="form-select">
                            <?php
                            //impresion de marca de producto
                            $resultados = mysqli_query($conexion, "SELECT * FROM marca");
                            while ($use = mysqli_fetch_array($resultados)) {
                                echo "
                                <option value='" . $use['ID_Marca'] . "'> " . $use['Marca'] . "</option>
                            ";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Talla de producto</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-text-height"></i></div>
                        <select id="inputState" name="TallaProducto" class="form-select">
                            <?php
                            //impresion de talla de producto
                            $resultados = mysqli_query($conexion, "SELECT * FROM talla");
                            while ($use = mysqli_fetch_array($resultados)) {
                                echo "
                                <option value='" . $use['ID_Talla'] . "'> " . $use['Talla'] . "</option>
                            ";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <label class="form-label">Nombre</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-file-signature"></i></div>
                        <input name="NombreProducto" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Stock</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fa-solid fa-hashtag"></i></div>
                        <input name="Stock" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Precio</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-dollar-sign"></i></div>
                        <input name="Precio" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Descripción</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-pen"></i></div>
                        <textarea name="Descripcion" type="text" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Imagen</label>
                        <div class="input-group">
                            <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-image"></i></div>
                            <input require name="ImagenProducto" class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </div>
                <div class="col-12 ">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            </p>
            <form method="POST">
                <table class="table table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><i class="fas fa-align-left"></i> ID</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Nombre</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Stock</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Descripción</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Categoria</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Tipo</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Talla</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Marca</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Imagen</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultados = mysqli_query($conexion, "SELECT * FROM producto");
                        while ($print = mysqli_fetch_array($resultados)) {
                            $categoria = $print['ID_CategoriaProducto'];
                            $producto = $print['ID_TipoProducto'];
                            $talla = $print['ID_Talla'];
                            $marca = $print['ID_Marca'];
                            $imagen = $print['Imagen'];
                            $ID = $print['ID_Producto'];
                            $Nombre = $print['Nombre'];
                            $Stock = $print['Stock'];
                            $Descripcion = $print['Descripcion'];
                            $resultados2 = mysqli_query($conexion, "SELECT * FROM categoria_de_producto WHERE ID_CategoriaProducto = $categoria");
                            while ($print = mysqli_fetch_array($resultados2)) {
                                $categoria2 = $print['Categoria'];
                            }
                            $resultados3 = mysqli_query($conexion, "SELECT * FROM tipo_de_producto WHERE ID_TipoProducto = $producto");
                            while ($print = mysqli_fetch_array($resultados3)) {
                                $tipoproducto = $print['TipoProducto'];
                            };
                            $resultados4 = mysqli_query($conexion, "SELECT * FROM talla WHERE ID_Talla = $talla");
                            while ($print = mysqli_fetch_array($resultados4)) {
                                $tallaproducto = $print['Talla'];
                            };
                            $resultados5 = mysqli_query($conexion, "SELECT * FROM marca WHERE ID_Marca = $marca");
                            while ($print = mysqli_fetch_array($resultados5)) {
                                $marcaproducto = $print['Marca'];
                            };

                            echo "
                            <tr>
                                <td>" . $ID . "</td>
                                <td>" . $Nombre . "</td>
                                <td>" . $Stock . "</td>
                                <td>" . $Descripcion . "</td>
                            <td>" . $categoria2 . "</td>
                            <td>" . $tipoproducto . "</td>
                            <td>" . $tallaproducto . "</td>
                            <td>" . $marcaproducto . "</td>
                            
                    <td>" . $imagen . "</td>
                    <td> <button type='submit' name='delete' value='$ID' class='btn btn-outline-danger'><i class='fas fa-trash'></i></button>
                    </td>
                </tr>
                ";
                        }

                        if (isset($_POST['delete'])) {
                            $borrar = $_POST['delete'];
                            $resultados = mysqli_query($conexion, "SELECT * FROM producto WHERE ID_producto = $borrar");
                            while ($print = mysqli_fetch_array($resultados)) {
                                $resultado = mysqli_query($conexion, "DELETE FROM producto WHERE ID_Producto = $borrar");
                                $dir = "../../img/";
                                $file = $print['Imagen'];
                                unlink($dir . $file);  
                            }
                            echo "
                            <body>
                                <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Eliminado satisfactoriamente',
                                    showConfirmButton: false,
                                })
                                </script>
                            </body>
                            <script>
                                function redireccionar(){
                                window.location.href = 'registro.php';}
                                setTimeout('redireccionar()', 1500);
                            </script>";
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <div class="tab-pane fade" id="CategoriaProducto" role="tabpanel" aria-labelledby="CategoriaProducto-tab">
        <!--Categoria de producto -->
        <div class="card-body">
            <h5 class="card-title text-center">Categoria producto</h5>
            <p class="card-text">
            <form action="../php/registro-categoria.php" class="row g-3" method="POST" enctype="multipart/form-data">
                <div class="col-6">
                    <label class="form-label">Nombre</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-restroom"></i></div>
                        <input name="NombreCategoria" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Descripción</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-pen"></i></div>
                        <input name="DescripcionCategoria" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            </p>
        </div>
        <form method="POST">
            <table class="table table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col"><i class="fas fa-align-left"></i> ID</th>
                        <th scope="col"><i class="fas fa-align-left"></i> Categoria</th>
                        <th scope="col"><i class="fas fa-align-left"></i> Descripción</th>
                        <th scope="col"><i class="fas fa-align-left"></i> Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $resultados = mysqli_query($conexion, "SELECT * FROM categoria_de_producto ORDER BY ID_CategoriaProducto DESC");
                    while ($print = mysqli_fetch_array($resultados)) {
                        echo "
                <tr>
                    <td>" . $print['ID_CategoriaProducto'] . "</td>
                    <td>" . $print['Categoria'] . "</td>
                    <td>" . $print['Descripcion'] . "</td>
                    <td> <button type='submit' name='deletecategoria' value='$print[ID_CategoriaProducto]' class='btn btn-outline-danger'><i class='fas fa-trash'></i></button>
                    </td>
                </tr>
                ";
                    }

                    if (isset($_POST['deletecategoria'])) {

                        $borrar = $_POST['deletecategoria'];

                        $resultados = mysqli_query($conexion, "SELECT * FROM producto WHERE ID_CategoriaProducto = $borrar");
                        while ($print = mysqli_fetch_array($resultados)) {
                            $resultado = mysqli_query($conexion, "DELETE FROM producto WHERE ID_CategoriaProducto = $borrar");
                            $dir = "../../img/";
                            $file = $print['Imagen'];
                            unlink($dir . $file);
                        }
                        $resultados = mysqli_query($conexion, "DELETE FROM categoria_de_producto WHERE ID_CategoriaProducto = $borrar");
                        echo "
                            <body>
                                <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Eliminado satisfactoriamente',
                                    showConfirmButton: false,
                                })
                                </script>
                            </body>
                            <script>
                                function redireccionar(){
                                window.location.href = 'registro.php';}
                                setTimeout('redireccionar()', 1500);
                            </script>";
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
    <div class="tab-pane fade" id="MarcaProducto" role="tabpanel" aria-labelledby="MarcaProducto-tab">
        <!--Marca de producto -->
        <div class="card-body">
            <h5 class="card-title text-center">Marca producto</h5>
            <p class="card-text">
            <form action="../php/registro-marca-producto.php" class="row g-3" method="POST" enctype="multipart/form-data">
                <div class="col-6">
                    <label class="form-label">Nombre</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fa-solid fa-trademark"></i></div>
                        <input name="Marca" value="" type="text" class="form-control">
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            </p>
            <form method="POST">
                <table class="table table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><i class="fas fa-align-left"></i> ID</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Categoria</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultados = mysqli_query($conexion, "SELECT * FROM marca ORDER BY ID_Marca DESC");
                        while ($print = mysqli_fetch_array($resultados)) {
                            echo "
                <tr>
                    <td>" . $print['ID_Marca'] . "</td>
                    <td>" . $print['Marca'] . "</td>
                    <td> <button type='submit' name='deletemarca' value='$print[ID_Marca]' class='btn btn-outline-danger'><i class='fas fa-trash'></i></button>
                     </td>
                </tr>
                ";
                        }

                        if (isset($_POST['deletemarca'])) {

                            $borrarmarca     = $_POST['deletemarca'];
                            $resultados = mysqli_query($conexion, "SELECT * FROM producto WHERE ID_Marca = $borrarmarca");
                            while ($print = mysqli_fetch_array($resultados)) {
                                $resultado = mysqli_query($conexion, "DELETE FROM producto WHERE ID_Marca = $borrarmarca");
                                $dir = "../../img/";
                                $file = $print['Imagen'];
                                unlink($dir . $file);
                            }
                            $resultados = mysqli_query($conexion, "DELETE FROM marca WHERE ID_Marca = $borrarmarca");
                            echo "
                            <body>
                                <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Eliminado satisfactoriamente',
                                    showConfirmButton: false,
                                })
                                </script>
                            </body>
                            <script>
                                function redireccionar(){
                                window.location.href = 'registro.php';}
                                setTimeout('redireccionar()', 1500);
                            </script>";
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>

    </div>


    <div class="tab-pane fade" id="TipoProducto" role="tabpanel" aria-labelledby="TipoProducto-tab">
        <!--Tipo de producto -->
        <div class="card-body">
            <h5 class="card-title text-center">Tipo producto</h5>
            <p class="card-text">
            <form action="../php/registro-tipo-producto.php" class="row g-3" method="POST" enctype="multipart/form-data">
                <div class="col-6">
                    <label class="form-label">Nombre</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-object-group"></i></div>
                        <input name="NombreProducto" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Descripción</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-pen"></i></div>
                        <input name="DescripcionProducto" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            </p>
            <form method="POST">
                <table class="table table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><i class="fas fa-align-left"></i> ID</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Tipo</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Descripción</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultados = mysqli_query($conexion, "SELECT * FROM tipo_de_producto ORDER BY ID_TipoProducto DESC");
                        while ($print = mysqli_fetch_array($resultados)) {
                            echo "
                <tr>
                    <td>" . $print['ID_TipoProducto'] . "</td>
                    <td>" . $print['TipoProducto'] . "</td>
                    <td>" . $print['Descripcion'] . "</td>
                    <td> <button type='submit' name='deletetipo' value='$print[ID_TipoProducto]' class='btn btn-outline-danger'><i class='fas fa-trash'></i></button>
                     </td>
                </tr>
                ";
                        }

                        if (isset($_POST['deletetipo'])) {

                            $borrar = $_POST['deletetipo'];

                            $resultados = mysqli_query($conexion, "SELECT * FROM producto WHERE ID_TipoProducto = $borrar");
                            while ($print = mysqli_fetch_array($resultados)) {
                                $resultado = mysqli_query($conexion, "DELETE FROM producto WHERE ID_TipoProducto = $borrar");
                                $dir = "../../img/";
                                $file = $print['Imagen'];
                                unlink($dir . $file);
                            }
                            $resultados = mysqli_query($conexion, "DELETE FROM tipo_de_producto WHERE ID_TipoProducto = $borrar");
                            echo "
                            <body>
                                <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Eliminado satisfactoriamente',
                                    showConfirmButton: false,
                                })
                                </script>
                            </body>
                            <script>
                                function redireccionar(){
                                window.location.href = 'registro.php';}
                                setTimeout('redireccionar()', 1500);
                            </script>";
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <div class="tab-pane fade" id="TallaProducto" role="tabpanel" aria-labelledby="TallaProducto-tab">
        <!--Talla de producto -->
        <div class="card-body">
            <h5 class="card-title text-center">Talla</h5>
            <p class="card-text">
            <form action="../php/registro-talla-producto.php" class="row g-3" method="POST" enctype="multipart/form-data">
                <div class="col-6">
                    <label class="form-label">Nombre</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-text-height"></i></div>
                        <input name="NombreTallaProducto" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Descripción</label>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-pen"></i></div>
                        <input name="DescripcionTallaProducto" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            </p>
            <form method="POST">
                <table class="table table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col"><i class="fas fa-align-left"></i> ID</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Talla</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Descripción</th>
                            <th scope="col"><i class="fas fa-align-left"></i> Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultados = mysqli_query($conexion, "SELECT * FROM talla ORDER BY ID_Talla DESC");
                        while ($print = mysqli_fetch_array($resultados)) {
                            echo "
                <tr>
                    <td>" . $print['ID_Talla'] . "</td>
                    <td>" . $print['Talla'] . "</td>
                    <td>" . $print['Descripcion'] . "</td>
                    <td> <button type='submit' name='deletetalla' value='$print[ID_Talla]' class='btn btn-outline-danger'><i class='fas fa-trash'></i></button>
                     </td>
                </tr>
                ";
                        }

                        if (isset($_POST['deletetalla'])) {

                            $borrar = $_POST['deletetalla'];

                            $resultados = mysqli_query($conexion, "SELECT * FROM producto WHERE ID_Talla = $borrar");
                            while ($print = mysqli_fetch_array($resultados)) {
                                $resultado = mysqli_query($conexion, "DELETE FROM producto WHERE ID_Talla = $borrar");
                                $dir = "../../img/";
                                $file = $print['Imagen'];
                                unlink($dir . $file);
                                
                            }
                            $resultados = mysqli_query($conexion, "DELETE FROM talla WHERE ID_Talla = $borrar");
                            echo "
                            <body>
                                <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Eliminado satisfactoriamente',
                                    showConfirmButton: false,
                                })
                                </script>
                            </body>
                            <script>
                                function redireccionar(){
                                window.location.href = 'registro.php';}
                                setTimeout('redireccionar()', 1500);
                            </script>";
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>