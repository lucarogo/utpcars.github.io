<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
 <!DOCTYPE HTML>

<html>

<head>
	<title>Servicios&reg;</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<a href="../index.html" class="logo"><strong>UTP'CARS</strong> <span>Shop</span></a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>
<!-- MODIFICARE HIPERVINCULOS DE DISEÑO, OFERTAS, KITS -->
		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				<li><a href="../index.html">Inicio</a></li>
				<li><a href="shop.html">Vehiculos</a></li>
				<li><a href="generic.html">Tienda</a></li>
				<li><a href="Diseño.html">Diseños</a></li>
			</ul>
			<ul class="actions stacked">
				<li><a href="reset-password.php" class="button primary fit">Cambia Tu Contraseña</a></li>
				<li><a href="logout.php" class="button fit">Cerrar Sesion</a></li>
			</ul>
		</nav>

		<!-- Banner -->
		<section id="banner" class="major">
			<div class="inner">
				<header class="major">
					<h1>Bienvenido, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
				</header>
				<div class="content">
					
					<p><strong>Ahora ya estas registrado</strong>
						<BR>Podras realizar compras, ver diseños, articulos, accesorios y todos los servicios en general.
						<br>Gracias por formar parte de UTP car's.
					</p>

					<ul class="actions">
						<li><a href="#menu" class="button next scrolly">Opciones</a></li>
					</ul>
				</div>
			</div>
		</section>

		<!-- Main -->
		<div id="main">

			<!-- One -->
			<section id="one" class="tiles">
				<article>
					<span class="image">
						<img src="imagen/pic01.jpg" alt="" />
					</span>
					<header class="major">
						<h3><a href="shop.html" class="link">Vehiculos</a></h3>
						<p>Modelos modernos diseñados para usted</p>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="imagen/pic02.jpg" alt="" />
					</span>
					<header class="major">
						<h3><a href="Tienda.html" class="link">Tienda</a></h3>
						<p>Aquí Podra conseguir todo lo que necesita</p>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="imagen/pic03.jpg" alt="" />
					</span>
					<header class="major">
						<h3><a href="Diseño.html" class="link">Diseños</a></h3>
						<p>Deje volar su imaginación personalize su vehiculo</p>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="imagen/pic04.jpg" alt="" />
					</span>
					<header class="major">
						<h3><a href="/Servicios/experiance.html" class="link">Seguro</a></h3>
						<p>Viaje sin miedo a donde sea</p>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="imagen/pic05.jpg" alt="" />
					</span>
					<header class="major">
						<h3><a href="Ofertas.html" class="link">Ofertas</a></h3>
						<p>Consiga lo que busca al mejor precio</p>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="imagen/pic06.jpg" alt="" />
					</span>
					<header class="major">
						<h3><a href="KITS.html" class="link">Kits</a></h3>
						<p>Más es mejor que uno</p>
					</header>
				</article>
			</section>

			<!-- Two -->
			<section id="two">
				<div class="inner">
					<header class="major">
						<h2>¿Encontro lo que buscaba?</h2>
					</header>
					<p>En UTP-Cars nos complace poder ayudarlo, por ese motivo, tomomamos en cuenta todas las sugerencias para poder mejor para usted, 
						dejanos tu opinion. ¡ESTAMOS CRECIENCO PARA TI, CRECE CON NOSOTROS!</p>
					<ul class="actions">
						<li><a href="../Nosotros.html" class="button next">Nosotros</a></li>
					</ul>
				</div>
			</section>

		</div>

		<!-- Contact -->
		<section id="contact">
			<div class="inner">
				<section>
					<form method="post" action="#">
						<div class="fields">
							<div class="field half">
								<label for="name">Name</label>
								<input type="text" name="name" id="name" />
							</div>
							<div class="field half">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" />
							</div>
							<div class="field">
								<label for="message">Message</label>
								<textarea name="message" id="message" rows="6"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Send Message" class="primary" /></li>
							<li><input type="reset" value="Clear" /></li>
						</ul>
					</form>
				</section>
				<section class="split">
					<section>
						<div class="contact-method">
							<span class="icon solid alt fa-envelope"></span>
							<h3>Email</h3>
							<a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin">lucarogosfk@gmail.com</a>
						</div>
					</section>
					<section>
						<div class="contact-method">
							<span class="icon solid alt fa-phone"></span>
							<h3>Phone</h3>
							<span>+51 977621339</span>
						</div>
					</section>
					<section>
						<div class="contact-method">
							<span class="icon solid alt fa-home"></span>
							<h3>Address</h3>
							<span>1234 Somewhere Road #5432<br />
								Nashville, TN 00000<br />
								United States of America</span>
						</div>
					</section>
				</section>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<ul class="icons">
					<li><a href="https://www.youtube.com/channel/UComtbm8QWhDc9Vqa9NO2Pjw" class="icon brands alt fa-youtube"><span class="label">YouTube</span></a></li>
					<li><a href="https://www.facebook.com/people/Utp-Cars/100072165656753/" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/utpcars/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
					
					
				</ul>
				<ul class="copyright">
					<li>&copy; Utp-Cars</li>
					<li>Design: <a href="https://html5up.net">Gupo 6</a></li>
				</ul>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>