<?php
include 'header.php';
if (isset($usuario)) {
    $cliente = $usuario;
} else {
    echo '
    
    
    <div style="display: flex;
    justify-content: center;
    align-items: center;">
    <h1>NO DEBERIAS ESTAR AQUÍ
    <img class="rounded mx-auto d-block" style="display:block;
    margin:auto;width: 50px;" src="images/preocupado.png">
    </div>
    </h1>
    
    ';
    echo "
 <script>
        function redireccionar(){
        window.location.href = 'index.php';}
        setTimeout('redireccionar()', 1200);
    </script>";
    die();
}
?>

<body>
    <!-- banner -->
    <div class="banner10" id="home1">
        <div class="container">
            <h2>Ordenes</h2>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Ordenes</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="mx-auto" style="margin: 1rem; padding: 1rem;">
        <div class="container">

            <div class="mx-auto" style="width: 70%;  margin-left: auto; margin-right: auto;">
                <h3 class="bars">Tus ordenes</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 20px;">#</th>
                            <th>Fecha</th>
                            <th>Total</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><input value="2022-03-22" disabled type="date" id="start" name="trip-start" style='border:0px;background-color: rgba(255, 255, 255, 0);' ></td>
                            <td>$2100</td>
                            <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><input value="2022-04-12" disabled type="date" id="start" name="trip-start" style='border:0px;background-color: rgba(255, 255, 255, 0);'></td>
                            <td>1200</td>
                            <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><input value="2022-05-17" disabled type="date" id="start" name="trip-start" style='border:0px;background-color: rgba(255, 255, 255, 0);'></td>
                            <td>$780</td>
                            <td><button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></button></td>
                        </tr>

                    </tbody>

                </table>
                

            </div>
            <div class="bs-docs-example">

            </div>
        </div>
    </div>
</body>
<?php
include 'footer.php';
?>