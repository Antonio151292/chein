<?php
include 'header.php';



?>
<!-- banner -->
<div class="banner10" id="home1">
	<div class="container">
		<h2>Checkout</h2>
	</div>
</div>
<!-- //banner -->
<!-- breadcrumbs -->
<div class="breadcrumb_dress">
	<div class="container">
		<ul>
			<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
			<li>Checkout</li>
		</ul>
	</div>
</div>
<!-- //breadcrumbs -->
<!-- checkout -->
<div class="checkout">
	<div class="container">
		<h3>SU CARRITO DE COMPRAS TIENE: <span>3 Productos</span></h3>

		<div class="checkout-right">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>SL No.</th>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Nombre del producto</th>
						<th>Cargos de Servicio</th>
						<th>Precio</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tr class="rem1">
					<td class="invert">1</td>
					<td class="invert-image"><a href="single.html"><img src="images/j3.jpg" alt=" " class="img-responsive" /></a></td>
					<td class="invert">
						<div class="quantity">
							<div class="quantity-select">
								<div class="entry value-minus">&nbsp;</div>
								<div class="entry value"><span>1</span></div>
								<div class="entry value-plus active">&nbsp;</div>
							</div>
						</div>
					</td>
					<td class="invert">Beige solid Chinos</td>
					<td class="invert">$5.00</td>
					<td class="invert">$200.00</td>
					<td class="invert">
						<div class="rem">
							<div class="close1"> </div>
						</div>
						<script>
							$(document).ready(function(c) {
								$('.close1').on('click', function(c) {
									$('.rem1').fadeOut('slow', function(c) {
										$('.rem1').remove();
									});
								});
							});
						</script>
					</td>
				</tr>
				<tr class="rem2">
					<td class="invert">2</td>
					<td class="invert-image"><a href="single.html"><img src="images/ss5.jpg" alt=" " class="img-responsive" /></a></td>
					<td class="invert">
						<div class="quantity">
							<div class="quantity-select">
								<div class="entry value-minus">&nbsp;</div>
								<div class="entry value"><span>1</span></div>
								<div class="entry value-plus active">&nbsp;</div>
							</div>
						</div>
					</td>
					<td class="invert">Floral Border Skirt</td>
					<td class="invert">$5.00</td>
					<td class="invert">$270.00</td>
					<td class="invert">
						<div class="rem">
							<div class="close2"> </div>
						</div>
						<script>
							$(document).ready(function(c) {
								$('.close2').on('click', function(c) {
									$('.rem2').fadeOut('slow', function(c) {
										$('.rem2').remove();
									});
								});
							});
						</script>
					</td>
				</tr>
				<tr class="rem3">
					<td class="invert">3</td>
					<td class="invert-image"><a href="single.html"><img src="images/c7.jpg" alt=" " class="img-responsive" /></a></td>
					<td class="invert">
						<div class="quantity">
							<div class="quantity-select">
								<div class="entry value-minus">&nbsp;</div>
								<div class="entry value"><span>1</span></div>
								<div class="entry value-plus active">&nbsp;</div>
							</div>
						</div>
					</td>
					<td class="invert">Beige Sandals</td>
					<td class="invert">$5.00</td>
					<td class="invert">$212.00</td>
					<td class="invert">
						<div class="rem">
							<div class="close3"> </div>
						</div>
						<script>
							$(document).ready(function(c) {
								$('.close3').on('click', function(c) {
									$('.rem3').fadeOut('slow', function(c) {
										$('.rem3').remove();
									});
								});
							});
						</script>
					</td>
				</tr>
				<!--quantity-->
				<script>
					$('.value-plus').on('click', function() {
						var divUpd = $(this).parent().find('.value'),
							newVal = parseInt(divUpd.text(), 10) + 1;
						divUpd.text(newVal);
					});

					$('.value-minus').on('click', function() {
						var divUpd = $(this).parent().find('.value'),
							newVal = parseInt(divUpd.text(), 10) - 1;
						if (newVal >= 1) divUpd.text(newVal);
					});
				</script>
				<!--quantity-->
			</table>
		</div>
		<h3>Productos Apartados <span>1 Products</span></h3>
		<div class="checkout-right">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>SL No.</th>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Nombre del producto</th>
						<th>Cargos de Servicio</th>
						<th>Precio</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tr class="rem1">
					<td class="invert">1</td>
					<td class="invert-image"><a href="single.html"><img src="images/j3.jpg" alt=" " class="img-responsive" /></a></td>
					<td class="invert">
						<div class="quantity">
							<div class="quantity-select">
								<div class="entry value-minus">&nbsp;</div>
								<div class="entry value"><span>1</span></div>
								<div class="entry value-plus active">&nbsp;</div>
							</div>
						</div>
					</td>
					<td class="invert">Beige solid Chinos</td>
					<td class="invert">$5.00</td>
					<td class="invert">$200.00</td>
					<td class="invert">
						<div class="rem">
							<div class="close1"> </div>
						</div>
						<script>
							$(document).ready(function(c) {
								$('.close1').on('click', function(c) {
									$('.rem1').fadeOut('slow', function(c) {
										$('.rem1').remove();
									});
								});
							});
						</script>
					</td>
				</tr>
				<!--quantity-->
				<script>
					$('.value-plus').on('click', function() {
						var divUpd = $(this).parent().find('.value'),
							newVal = parseInt(divUpd.text(), 10) + 1;
						divUpd.text(newVal);
					});

					$('.value-minus').on('click', function() {
						var divUpd = $(this).parent().find('.value'),
							newVal = parseInt(divUpd.text(), 10) - 1;
						if (newVal >= 1) divUpd.text(newVal);
					});
				</script>
				<!--quantity-->
			</table>
		</div>
		<div class="checkout-left">
			<div class="checkout-left-basket">
				<button type="button" style="cursor: pointer; border: 1px solid  transparent; background-color: transparent;" class="open-modal" data-open="modal1">
					<h4>Continuar con el pago</h4>
				</button>
				<ul>
					<li>Producto 1 <i>-</i> <span>$200.00 </span></li>
					<li>Producto 2 <i>-</i> <span>$270.00 </span></li>
					<li>Producto 3 <i>-</i> <span>$212.00 </span></li>
					<li>Cargos totales por servicio <i>-</i> <span>$15.00</span></li>
					<li>Total <i>-</i> <span class="simpleCart_total"></span></li>

				</ul>
			</div>
			<div class="checkout-right-basket">
				<a href="products.html"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continuar comprando</a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="w3l_related_products">
	<div class="container">
		<h3>Productos Relacionados</h3>
		<ul id="flexiselDemo2">
			<li>
				<div class="w3l_related_products_grid">
					<div class="agile_ecommerce_tab_left dresses_grid">
						<div class="hs-wrapper hs-wrapper3">
							<img src="images/ss1.jpg" alt=" " class="img-responsive">
							<img src="images/ss2.jpg" alt=" " class="img-responsive">
							<img src="images/ss3.jpg" alt=" " class="img-responsive">
							<img src="images/ss4.jpg" alt=" " class="img-responsive">
							<img src="images/ss5.jpg" alt=" " class="img-responsive">
							<img src="images/ss6.jpg" alt=" " class="img-responsive">
							<img src="images/ss7.jpg" alt=" " class="img-responsive">
							<img src="images/ss8.jpg" alt=" " class="img-responsive">
							<div class="w3_hs_bottom">
								<div class="flex_ecommerce">
									<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
								</div>
							</div>
						</div>
						<h5><a href="single.html">Pink Flared Skirt</a></h5>
						<div class="simpleCart_shelfItem">
							<p class="flexisel_ecommerce_cart"><span>$312</span> <i class="item_price">$212</i></p>
							<p><a class="item_add" href="#">Agregar al carrito</a></p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3l_related_products_grid">
					<div class="agile_ecommerce_tab_left dresses_grid">
						<div class="hs-wrapper hs-wrapper3">
							<img src="images/ss2.jpg" alt=" " class="img-responsive">
							<img src="images/ss3.jpg" alt=" " class="img-responsive">
							<img src="images/ss4.jpg" alt=" " class="img-responsive">
							<img src="images/ss5.jpg" alt=" " class="img-responsive">
							<img src="images/ss6.jpg" alt=" " class="img-responsive">
							<img src="images/ss9.jpg" alt=" " class="img-responsive">
							<img src="images/ss7.jpg" alt=" " class="img-responsive">
							<img src="images/ss8.jpg" alt=" " class="img-responsive">
							<div class="w3_hs_bottom">
								<div class="flex_ecommerce">
									<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
								</div>
							</div>
						</div>
						<h5><a href="single.html">Red Pencil Skirt</a></h5>
						<div class="simpleCart_shelfItem">
							<p class="flexisel_ecommerce_cart"><span>$432</span> <i class="item_price">$323</i></p>
							<p><a class="item_add" href="#">Agregar al carrito</a></p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3l_related_products_grid">
					<div class="agile_ecommerce_tab_left dresses_grid">
						<div class="hs-wrapper hs-wrapper3">
							<img src="images/ss3.jpg" alt=" " class="img-responsive">
							<img src="images/ss4.jpg" alt=" " class="img-responsive">
							<img src="images/ss5.jpg" alt=" " class="img-responsive">
							<img src="images/ss6.jpg" alt=" " class="img-responsive">
							<img src="images/ss7.jpg" alt=" " class="img-responsive">
							<img src="images/ss8.jpg" alt=" " class="img-responsive">
							<img src="images/ss9.jpg" alt=" " class="img-responsive">
							<img src="images/ss1.jpg" alt=" " class="img-responsive">
							<div class="w3_hs_bottom">
								<div class="flex_ecommerce">
									<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
								</div>
							</div>
						</div>
						<h5><a href="single.html">Yellow Cotton Skirt</a></h5>
						<div class="simpleCart_shelfItem">
							<p class="flexisel_ecommerce_cart"><span>$323</span> <i class="item_price">$310</i></p>
							<p><a class="item_add" href="#">Agregar al carrito</a></p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3l_related_products_grid">
					<div class="agile_ecommerce_tab_left dresses_grid">
						<div class="hs-wrapper hs-wrapper3">
							<img src="images/ss4.jpg" alt=" " class="img-responsive">
							<img src="images/ss5.jpg" alt=" " class="img-responsive">
							<img src="images/ss6.jpg" alt=" " class="img-responsive">
							<img src="images/ss7.jpg" alt=" " class="img-responsive">
							<img src="images/ss8.jpg" alt=" " class="img-responsive">
							<img src="images/ss9.jpg" alt=" " class="img-responsive">
							<img src="images/ss1.jpg" alt=" " class="img-responsive">
							<img src="images/ss2.jpg" alt=" " class="img-responsive">
							<div class="w3_hs_bottom">
								<div class="flex_ecommerce">
									<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
								</div>
							</div>
						</div>
						<h5><a href="single.html">Black Short</a></h5>
						<div class="simpleCart_shelfItem">
							<p class="flexisel_ecommerce_cart"><span>$256</span> <i class="item_price">$200</i></p>
							<p><a class="item_add" href="#">Agregar al carrito</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo2").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: {
						portrait: {
							changePoint: 480,
							visibleItems: 1
						},
						landscape: {
							changePoint: 640,
							visibleItems: 2
						},
						tablet: {
							changePoint: 768,
							visibleItems: 3
						}
					}
				});

			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
</div>
<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<section>
				<div class="modal-body">
					<div class="col-md-5 modal_body_left">
						<img src="images/39.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="col-md-7 modal_body_right">
						<h4>a good look women's Long Skirt</h4>
						<p>Ut enim ad minim veniam, quis nostrud
							exercitation ullamco laboris nisi ut aliquip ex ea
							commodo consequat.Duis aute irure dolor in
							reprehenderit in voluptate velit esse cillum dolore
							eu fugiat nulla pariatur. Excepteur sint occaecat
							cupidatat non proident, sunt in culpa qui officia
							deserunt mollit anim id est laborum.</p>
						<div class="rating">
							<div class="rating-left">
								<img src="images/star-.png" alt=" " class="img-responsive" />
							</div>
							<div class="rating-left">
								<img src="images/star-.png" alt=" " class="img-responsive" />
							</div>
							<div class="rating-left">
								<img src="images/star-.png" alt=" " class="img-responsive" />
							</div>
							<div class="rating-left">
								<img src="images/star.png" alt=" " class="img-responsive" />
							</div>
							<div class="rating-left">
								<img src="images/star.png" alt=" " class="img-responsive" />
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="modal_body_right_cart simpleCart_shelfItem">
							<p><span>$320</span> <i class="item_price">$250</i></p>
							<p><a class="item_add" href="#">Agregar al carrito</a></p>
						</div>
						<h5>Color</h5>
						<div class="color-quality">
							<ul>
								<li><a href="#"><span></span>Red</a></li>
								<li><a href="#" class="brown"><span></span>Yellow</a></li>
								<li><a href="#" class="purple"><span></span>Purple</a></li>
								<li><a href="#" class="gray"><span></span>Violet</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</section>
		</div>
	</div>
</div>
<!-- //checkout -->

<?php
include 'footer.php';
?>
<!-- //footer -->
</body>

</html>
<div class="modal" id="modal1">
	<div class="modal-dialog">
		<header class="modal-header">
			Ingresa tus datos de pago
			<button class="close-modal" aria-label="close modal" data-close>
				✕
			</button>
		</header>
		<section class="modal-content" style="background: #ff9b05;">
			<form id="regForm" action="" method="POST">
				<!-- Una "pestaña" para cada paso en el formulario: -->
				<div class="tab">Datos de tarjeta:
					<div class="card">
						<img src="https://seeklogo.com/images/V/VISA-logo-62D5B26FE1-seeklogo.com.png" class="logo-card">
						<label>Numero de tarjeta:</label>
						<input style="color:#fff" id="user" name="tarjeta" type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" min="1" max="9999999999999999" class="input cardnumber" placeholder="1234 5678 9101 1121">
						<script>
							var input = document.getElementById('user');
							input.addEventListener('input', function() {
								if (this.value.length > 12)
									this.value = this.value.slice(0, 16);
							})
						</script>
						<label>Nombre:</label>
						<input style="color:#fff" name="nombre" class="input name" placeholder="Edgar Pérez">
						<label class="toleft">CCV:</label>
						<input style="color:#fff" class="input toleft ccv" placeholder="321">
					</div>
				</div>
				<div class="tab">Datos de facturación:
					<label id="texto_nav1"></label>
					<div class="form-floating mb-3">
						<label for="floatingInput">Dirección</label>
						<input type="text" class="form-control" id="floatingInput" placeholder="Principal 123...">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">Direccion 2</label>
						<input type="text" class="form-control" id="floatingInput" placeholder="Secundaria 123...">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">Ciudad</label>
						<input type="text" class="form-control" id="floatingInput" placeholder="Veracruz">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">Pais</label>
						<input type="text" class="form-control" id="floatingInput" placeholder="México">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">CP</label>
						<input type="text" class="form-control" id="floatingInput" placeholder="91000">
					</div>
				</div>
				<div class="tab">Dirección de envio:
					<div class="form-floating mb-3">
						<label for="floatingInput">Dirección</label>
						<input name="direccion1" type="text" class="form-control" id="floatingInput" placeholder="Principal 123...">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">Direccion 2</label>
						<input name="direccion2" type="text" class="form-control" id="floatingInput" placeholder="Secundaria 123...">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">Ciudad</label>
						<input name="ciudad" type="text" class="form-control" id="floatingInput" placeholder="Veracruz">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">Pais</label>
						<input name="pais" type="text" class="form-control" id="floatingInput" placeholder="México">
					</div>
					<div class="form-floating mb-3">
						<label for="floatingInput">CP</label>
						<input name="cp" type="text" class="form-control" id="floatingInput" placeholder="91000">
					</div>
				</div>
				<div class="tab">Tu pago será procesado en un momento
					<p></p>
					<p></p>
					<p>El monto de tu pago es:</p>
					<h3><span class="simpleCart_total"></span></h3>
				</div>
				<div class="position-relative">

					<!-- Círculos que indican los pasos del formulario: -->
					<div style="text-align:center;margin-top:40px;">
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
					</div>
					<div class="text-center">
						<br>
						<button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior /</button>
						<button type="button" id="nextBtn" onclick="nextPrev(1)">/ Siguiente</button>
					</div>
				</div>
			</form>
			<button id="cerrar" aria-label="close modal" data-close>Cancelar pago</button>
			<br>
			<br>

		</section>

	</div>
</div>
<?php
if (isset($_REQUEST["btnGuardar"])) {
	$id = $_POST['idProducto'];
	$_SESSION['productos']['id'] = $id;
	echo "<script>alert('Producto $id agregado con exito');</script>";
}
?>
<link href="style/css/modal-cobro.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="style/js/modal-cobro.js"></script>
