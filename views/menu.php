<?php
include 'header.php';
?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="LoginRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <ul class="nav nav-tabs">
  <li ><a data-toggle="tab" href="#menu1">Iniciar sesión</a></li>
  <li><a class="nav-link active" data-toggle="tab" href="#menu"> </a></li>
  <li ><a data-toggle="tab" href="#menu2">Registrarse</a></li>
</ul>

<div class="tab-content">
  <div id="menu1" class="tab-pane fade">
  <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>
<!-- header -->
<!-- header -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" data-toggle="pill" href="#home">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" data-toggle="pill" href="#home">Active</a>
  </li>
</ul>
<ul class="nav nav-tabs">
  <li ><a data-toggle="tab" href="#menu1">Iniciar sesión</a></li>
  <li><a class="nav-link active" data-toggle="tab" href="#menu"> </a></li>
  <li ><a data-toggle="tab" href="#menu2">Registrarse</a></li>
</ul>

<div class="tab-content">
  <div id="menu1" class="tab-pane fade">
    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                    <div class="facts">
                                        <div class="register">
                                            <form action="/SesionIniciada" method="post">
                                                @csrf
                                                <input name="Email" placeholder="Correo electronico" type="text" required="">
                                                <input name="Password" placeholder="Contraseña" type="password" required="">
                                                <div class="sign-up">
                                                    <input type="submit" value="Iniciar sesión" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>
      <ul class="nav nav-pills">
  <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
  <li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
  <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3 style="color: #000000;">HOME</h3>
    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal -->

<div class="modal fade" id="myModal882" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div>
                <input type="submit" value="Cerrar Sesion" />
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    ¿Que esperas? ¡Registrate ahora! </h4>
            </div>
            <div class="modal-body modal-body-sub">
                <div class="row">
                    <div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
                        <div class="sap_tabs">


                        <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>
                        
                            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                <ul>
                                    <li class="resp-tab-item" data-toggle="tab" href="#menu1"><span>Iniciar sesión</span></li>
                                    <li class="resp-tab-item" data-toggle="tab" href="#menu1"><span>Registrarse</span></li>
                                </ul>

                                
                                <!-- Pop up de iniciar sesión / registro -->
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                    <div class="facts">
                                        <div class="register">
                                            <form action="/SesionIniciada" method="post">
                                                @csrf
                                                <input name="Email" placeholder="Correo electronico" type="text" required="">
                                                <input name="Password" placeholder="Contraseña" type="password" required="">
                                                <div class="sign-up">
                                                    <input type="submit" value="Iniciar sesión" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                    <div class="facts">

                                        <div class="register">

                                            <form action="/guardarUser" method="post">
                                                @csrf
                                                <input placeholder="Nombre" name="Name" type="text" required="">
                                                <input placeholder="Email" name="Email" type="email" required="">
                                                <input placeholder="Contraseña" name="	" type="password" required="">
                                                <input placeholder="Confirmar contraseña" name="Password" type="password" required="">
                                                <div class="sign-up">
                                                    <input type="submit" value="Crear cuenta" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@empty($nombre)
<script>
    $('#myModal88').modal('show');
</script>
@endempty
<div class="header">
    <div class="container">
        @empty($nombre)
        <div class="w3l_login">
            <a data-toggle="modal" data-target="#LoginRegister"><img src="../images/user.png" /></a>
        </div>
        @endempty
        @isset($nombre)
        <div class="w3l_login">
            <a href="#" data-toggle="modal" data-target="#myModal882"><img src="../images/user.png" /></a>
        </div>
        <div class='w31_login'>
            <p>{{$nombre}}</p>
        </div>
        @endisset
        <div class="w3l_logo">
            <h1><a href="index.php">CHEIN<span>Lo mejor en moda</span></a></h1>
        </div>
        <div class="search">
            <input class="search_box" type="checkbox" id="search_box">
            <label class="icon-search" for="search_box"><img src="../images/search.png" /></label>
            <div class="search_form">
                <form action="#" method="post">
                    <input type="text" name="Search" placeholder="Ingresa tu búsqueda...">
                    <input type="submit" value="Buscar">
                </form>
            </div>
        </div>

        <div class="cart box_1">
            <a href="/carrito">
                <div class="total">
                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> artículos)
                </div>
                <img src="../images/bag.png" alt="" />
            </a>
            <p><a href="javascript:;" class="simpleCart_empty">Carrito vacío</a></p>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="navigation">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
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
                    <li class="active"><a href="index.php" class="act">Inicio</a></li>
                    <!-- Mega Menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Caballeros</h6>

                                        <li><a href="camisas">Camisas<span>New</span></a></li>
                                        <li><a href="sweaters.php">Pantalones</a></li>
                                        <li><a href="skirts.php">Playeras</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Damas</h6>
                                        <li><a href="salwars.php">Vestidos</a></li>
                                        <li><a href="sarees.php">Blusas</a></li>
                                        <li><a href="sarees.php">Pantalones</a></li>
                                        <!-- <li><a href="products.php"><i>Summer Store</i></a></li> -->
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Niños</h6>
                                        <li><a href="sandals.php">Camisas</a></li>
                                        <li><a href="sandals.php">Pantalones</a></li>
                                        <li><a href="sandals.php">Playeras</a></li>
                                        <li><a href="sandals.php">Shorts</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Niñas</h6>
                                        <li><a href="sandals.php">Vestidos</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="about">Acerca de nosotros</a></li>
                    <li><a href="mail.php">Contactanos</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div><!-- //header -->
<!-- banner -->
<div class="banner" id="home1">
    <div class="container">
        <h3>La principal diferencia entre estilo y moda, <span>es la calidad</span></h3>
    </div>
</div>
<!-- //banner -->

<!-- new-products -->
<div class="new-products">
    <div class="container">
        <h3>Nuevos Productos</h3>

        <div class="agileinfo_new_products_grids">
            @isset($productos)
            @foreach($productos as $producto)
            <div class="col-md-3 agileinfo_new_products_grid">



                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">

                    <div class="hs-wrapper hs-wrapper1">
                        <!-- imagen -->
                        <img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
                        <img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
                        <img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
                        <img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
                        <img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
                        <img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
                        <img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
                        <img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />
                        <img src="images/{{ $producto-> ruta }}" alt=" " class="img-responsive" />

                        <div class="w3_hs_bottom w3_hs_bottom_sub">
                            <ul>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h5><a href="#">{{ $producto-> nombre  }}</a></h5>
                    <div class="simpleCart_shelfItem">
                        <!-- precio -->
                        <p><span>$320</span> <i class="item_price">$ {{$producto-> precio }}</i></p>
                        <form action="/index.blade.php" method="POST">
                            <input type="hidden" name="idProducto" value="{{$producto->id}}">
                            <input type="submit" value="Agregar al carrito" class="item_add" name="btnGuardar">
                        </form>
                        <p><a class="item_add" href="/agregarcarrito">Agregar al carrito</a></p>
                        <p><a class="item_add" href="#">Apartar Producto</a></p>
                    </div>
                </div>

            </div>
            @endforeach
            @endisset
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //new-products -->