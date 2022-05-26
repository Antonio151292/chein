<?php
include 'header.php';
?>

<body>
    <!-- banner -->
    <div class="banner10" id="home1">
        <div class="container">
            <h2>Datos de cliente</h2>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Datos de cliente</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="mx-auto" style="margin: 1rem; padding: 1rem;">
        <div class="container">

            <div class="mx-auto" style="width: 70%;  margin-left: auto; margin-right: auto;">
                <h3 class="bars">Datos del cliente</h3>
                <table class="table table-bordered">
                    <tbody>
                       
                        <tr>
                            <td style="width: 200px;">Correo</td>
                            <td>usuario@mail.com</td>
                        </tr>
                        <tr>
                            <td>Nombre(s)</td>
                            <td>Antonio</td>
                        </tr>
                        <tr>
                            <td>Primer Apellido</td>
                            <td>González</td>
                        </tr>
                        <tr>
                            <td>Segundo Apellido</td>
                            <td>Hernández</td>
                        </tr>
                        <tr>
                            <td>Teléfono</td>
                            <td>2281306995</td>
                        </tr>
                        <tr>
                            <?php

                            ?>
                    </tbody>

                </table>
                <button type="submit" class="btn btn-primary">Editar</button>
                <hr />
                <h3 class="bars">Datos de dirección de envio</h3>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td style="width: 200px;">Direccíon principal</td>
                            <td>Emiliano Zapata</td>
                        </tr>
                        <tr>
                            <td>Angel Carvajal #16</td>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <td>País</td>
                            <td>México</td>
                        </tr>
                        <tr>
                            <td>Estado</td>
                            <td>Veracruz</td>
                        </tr>
                        <tr>
                            <td>Ciudad</td>
                            <td>Xalapa</td>
                        </tr>
                        <tr>
                            <td>C.P.</td>
                            <td>91093</td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Editar</button>
                <hr />
                <h3 class="bars">Datos de dirección de facturación</h3>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td style="width: 200px;">Direccíon principal</td>
                            <td>Emiliano Zapata</td>
                        </tr>
                        <tr>
                            <td>Angel Carvajal #16</td>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <td>País</td>
                            <td>México</td>
                        </tr>
                        <tr>
                            <td>Estado</td>
                            <td>Veracruz</td>
                        </tr>
                        <tr>
                            <td>Ciudad</td>
                            <td>Xalapa</td>
                        </tr>
                        <tr>
                            <td>C.P.</td>
                            <td>91093</td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Editar</button>
                <button style="left:0;position:relative;" type="submit" class="btn btn-primary">Editar</button>
            </div>
            <div class="bs-docs-example">

            </div>
        </div>
    </div>
</body>
<?php
include 'footer.php';
?>