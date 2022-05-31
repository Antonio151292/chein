<!DOCTYPE html>
<?php
include 'views/php/conexion.php';
session_start();

    
if(isset($_SESSION['ID_TipoUsuario'])){
    $usuario = $_SESSION['ID_TipoUsuario'];
    $correo = $_SESSION['correo'];
    $ID_Usuario = $_SESSION['ID_Usuario'];
}else {};
?>
<html>

<head>
    <title>Chein</title>
    <!-- para-aplicaciones-móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Women's Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //para-aplicaciones-moviles -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="style/fontawesome-free/css/all.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="style/sweetalert/dist/sweetalert2.all.min.js"></script>
    <!-- //js -->
    <!-- cuenta regresiva -->
    <link rel="stylesheet" href="css/jquery.countdown.css" />
    <!-- cuenta regresiva -->
    <!-- carrito -->
    <script src="js/simpleCart.min.js"></script>
    <!-- Carrito -->
    <!-- para trabajar bootstrap -->
    <script type="text/javascript" src="style/js/bootstrap-3.1.1.min.js"></script>
    <!-- para trabajar bootstrap -->
    <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smooth-scrolling -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
</head>
<!-- header -->

<?php
include 'views/php/conexion.php';
/***************************************************************************************************** */
/* Se necesita validar la sesion activa para que cambie entre el model de iniciar sesio y el de cerrar */
/***************************************************************************************************** */

if (!isset($usuario)) {
    echo "
    <div class='modal fade' id='myModal88' tabindex='-1' role='dialog' aria-labelledby='myModal88' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
    <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>
                    &times;</button>
                <h4 class='modal-title' id='myModalLabel'>
                    ¡Inicie sesión ahora!</h4>
            </div>
            <div class='modal-body modal-body-sub'>
                <div class='row'>
                    <div class='col-md-8 modal_body_left modal_body_left1' style='border-right: 1px dotted #C2C2C2;padding-right:3em;'>
                        <div class='sap_tabs'>
                            <div id='horizontalTab' style='display: block; width: 100%; margin: 0px;'>
                                <ul>
                                    <li class='resp-tab-item' aria-controls='tab_item-0'><span>Iniciar sesión</span></li>
                                    <li class='resp-tab-item' aria-controls='tab_item-1'><span>Regístrate</span></li>
                                </ul>
                                <div class='tab-1 resp-tab-content' aria-labelledby='tab_item-0'>
                                    <div class='facts'>
                                        <div class='register'>
                                            <form action='views/php/iniciar-sesion.php' method='post'>
                                                <input name='Email' placeholder='Correo' type='text' required=''>
                                                <input name='Password' placeholder='Contraseña' type='password' required=''>
                                                <div class='sign-up'>
                                                    <input type='submit' value='Iniciar sesión' />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class='tab-2 resp-tab-content' aria-labelledby='tab_item-1'>
                                    <div class='facts'>
                                        <div class='register'>
                                            <form action='views/php/registrar-usuario.php' method='post'>
                                                <input placeholder='Correo' name='Email' type='email' required=''>
                                                <input placeholder='Contraseña' name='Password' type='password' required=''>
                                                <div class='sign-up'>
                                                    <input type='submit' value='Crear cuenta' />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src='js/easyResponsiveTabs.js' type='text/javascript'></script>
                        <script type='text/javascript'>
                            $(document).ready(function() {
                                $('#horizontalTab').easyResponsiveTabs({
                                    type: 'default', //Types: default, vertical, accordion           
                                    width: 'auto', //auto or any width like 600px
                                    fit: true // 100% fit in a container
                                });
                            });
                        </script>
                        <div id='OR' class='hidden-xs'>
                            O</div>
                    </div>
                    <div class='col-md-4 modal_body_right modal_body_right1'>
                        <div class='row text-center sign-with'>
                            <div class='col-md-12'>
                                <h3 class='other-nw'>
                                    Inicia sesión con</h3>
                            </div>
                            <div class='col-md-12'>
                                <ul class='social'>
                                    <li class='social_facebook'>
                                        <a href='#' class='entypo-facebook'></a>
                                    </li>
                                    <li class='social_dribbble'>
                                        <a href='#' class='entypo-dribbble'></a>
                                    </li>
                                    <li class='social_twitter'>
                                        <a href='#' class='entypo-twitter'></a>
                                    </li>
                                    <li class='social_behance'>
                                        <a href='#' class='entypo-behance'></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>
    ";
} else {
    echo "
    <div class='modal fade' id='myModal88' tabindex='-1' role='dialog' aria-labelledby='myModal88' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
    <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>
                    &times;</button>
                <h4 class='modal-title' id='myModalLabel'>
                    ¡Bienvenido!</h4>
            </div>
            <div class='modal-body modal-body-sub'>
                <div class='row'>
                    <div class='col-md-8 modal_body_left modal_body_left1' style='border-right: 1px dotted #C2C2C2;padding-right:3em;'>
                    <div class='sap_tabs'>
                    <ul>
                        <li><a href='profile.php'>Perfil</a></li>
                        <li><a href='orden.php'>Compras</a></li>
                        <li><a href='client-data.php'>Facturación</a></li>
                    </ul>   
                    <br>
                    <div id='horizontalTab' style='display: block; width: 100%; margin: 0px;'>
                        <a href='views/php/session_close.php' class='nav_link cerrar' title='Cerrar sesión'> <i class='fas fa-sign-out-alt' style='font-size: 1.5rem'></i> <span class='nav_name'>Cerrar sesión</span></a>
                    </div>
                </div>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
</div>
    ";
    
};

?>

<div class="header">
    <div class="container">
        <div class="w3l_login">
            <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
        </div>
        <div class="w3l_logo text-center">
            <h1><a href="index.php">CHEIN<span>Lo mejor en moda</span></a></h1>
        </div>
        
        <div class="cart box_1">
            <a href="checkout.php">
                <div class="total">
                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)
                </div>
                <img src="images/bag.png" alt="" />
            </a>
            <p><a href="javascript:;" class="simpleCart_empty">Vaciar carrito</a></p>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="navigation">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Marca y alternar se agrupan para una mejor visualización móvil -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php" class="act">Home</a></li>
                    <!-- Mega Menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Ropa</h6>
                                        <li><a href="dresses.php">Vestidos<span>New</span></a></li>
                                        <li><a href="sweaters.php">Suéteres</a></li>
                                        <li><a href="skirts.php">Pantalones cortos y faldas</a></li>
                                        <li><a href="jeans.php">Jeans</a></li>
                                        <li><a href="shirts.php">Camisas y camisetas<span>New</span></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Ropas etnicas</h6>
                                        <li><a href="salwars.php">Salwars</a></li>
                                        <li><a href="sarees.php">Sarees<span>New</span></a></li>
                                        <li><a href="products.php"><i>Tienda de verano</i></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-2">
                                    <ul class="multi-column-dropdown">
                                        <h6>Calzado</h6>
                                        <li><a href="sandals.php">De piso</a></li>
                                        <li><a href="sandals.php">Sandalias</a></li>
                                        <li><a href="sandals.php">Botas</a></li>
                                        <li><a href="sandals.php">Tacones</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w3ls_products_pos">
                                        <h4>50%<i>Off/-</i></h4>
                                        <img src="images/1.jpg" alt=" " class="img-responsive" />
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="about.php">Sobre nosotros</a></li>
                    <li><a href="mail.php">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- //header -->
