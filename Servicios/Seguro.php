<!-- STEFANO JANAMPA GARCIA-->
<?php
require_once "ConexioSeguro.php";
$mensaje="";
$bandera = false;
$nombres = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$placa = $_POST['placa'];
$dni = $_POST['dni'];
$modelo_de_coche = $_POST['modelo_de_coche'];
$marca_de_coche = $_POST['marca_de_coche'];
$consulta = "INSERT INTO datos(Nombres,Apellidos,DNI,Placa_del_coche,Marca_del_coche,Modelo_del_coche) 
VALUES ('$nombres', '$apellidos','$dni' , '$placa',  '$marca_de_coche', '$modelo_de_coche')";
if($dni<=99999999){
    if($stmt = mysqli_prepare($link, $consulta)){
    
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $bandera=true;
            $mensaje="Registro exitoso";
            /* store result */
            
        } else{
            $mensaje="No se ha podido realizar el registro";
        }
    }
    
}else{
    $mensaje="El DNI Son de 8 digitos";
}


?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Diseños&reg;</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$(".dropdown img.flag").addClass("flagvisibility");

			$(".dropdown dt a").click(function () {
				$(".dropdown dd ul").toggle();
			});

			$(".dropdown dd ul li a").click(function () {
				var text = $(this).html();
				$(".dropdown dt a span").html(text);
				$(".dropdown dd ul").hide();
				$("#result").html("Selected value is: " + getSelectedValue("sample"));
			});

			function getSelectedValue(id) {
				return $("#" + id).find("dt a span.value").html();
			}

			$(document).bind('click', function (e) {
				var $clicked = $(e.target);
				if (!$clicked.parents().hasClass("dropdown"))
					$(".dropdown dd ul").hide();
			});


			$("#flagSwitcher").click(function () {
				$(".dropdown img.flag").toggleClass("flagvisibility");
			});
		});
	</script>
</head>

<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="header-left">
						<div class="logo">
							<a href="welcome.php"><img src="images/logo.png" alt="" /></a>
						</div>
						<div class="menu">
							<a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
							<ul class="nav" id="nav">
								<li class="current"><a href="shop.html">Vehiculos</a></li>
								<li><a href="Tienda.html">Tienda</a></li>
								<li><a href="Diseño.html">Diseños</a></li>
								<li><a href="experiance.html">Seguro</a></li>
								<li><a href="Ofertas.html">Ofertas</a></li>
								<li><a href="KITS.html">Kits</a></li>

								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
						</div>
						<div class="clear"></div>
					</div>
					<div class="header_right">
						<!-- start search-->
						<div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search"
										name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch(document.getElementById('sb-search'));
						</script>
						<ul class="icon1 sub-icon1 profile_img">
							<li><a class="active-icon c1" href="#"> </a>
								<ul class="sub-icon1 list">
									<div class="product_control_buttons">
										<a href="#"><img src="images/edit.png" alt="" /></a>
										<a href="#"><img src="images/close_edit.png" alt="" /></a>
									</div>
									<div class="clear"></div>
									<li class="list_img"><img src="images/1.jpg" alt="" /></li>
									<li class="list_desc">
										<h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
											$12.00</span>
									</li>
									<div class="login_buttons">
										<div class="check_button"><a href="checkout.html">Check out</a></div>
										<div class="login_button"><a href="login.html">Login</a></div>
										<div class="clear"></div>
									</div>
									<div class="clear"></div>
								</ul>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main">
        <?php
        if($bandera){?>
        <div class="container text-center" style="height:100vh;">
            <div class="alert alert-success" role="alert">
                <?php
                echo $mensaje;
                ?>
                
            </div>
            <a href="experiance.html" class="btn btn-success">Regresar</a>
        </div>
        <?php
        
        }else{?>
        <div class="container text-center" style="height:100vh;">
            <div class="alert alert-danger" role="alert">
            <?php
                echo $mensaje;
                ?>
                
            </div>
            <a href="experiance.html" class="btn btn-success">Regresar</a>
        </div>
        <?php

        }
    
        ?>
        
	</div>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>Servicios</h4>
						<li><a href="#">Tienda</a></li>
						<li><a href="#">Diseños</a></li>
						<li><a href="#">Seguro</a></li>
						<li><a href="#">Kits</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>SIGUENOS</h4>
						<li><a href="https://www.facebook.com/people/Utp-Cars/100072165656753/">Facebook</a></li>
						<li><a href="https://www.instagram.com/utpcars/">Instagram</a></li>
						<li><a href="https://www.youtube.com/channel/UComtbm8QWhDc9Vqa9NO2Pjw">YouTube</a></li>

					</ul>
				</div>
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>SOPORTE</h4>
						<li><a href="/contactenos/index.html">Contactenos</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>Newsletter</h4>
						<div class="footer_search">
							<form>
								<input type="text" value="Enter your email" onfocus="this.value = '';"
									onblur="if (this.value == '') {this.value = 'Enter your email';}">
								<input type="submit" value="Go">
							</form>
						</div>
						<ul class="social">
							<li class="facebook"><a
									href="https://www.facebook.com/people/Utp-Cars/100072165656753/"><span> </span></a>
							</li>
							<li class="twitter"><a href="#"><span> </span></a></li>
							<li class="instagram"><a href="https://www.instagram.com/utpcars/"><span> </span></a></li>
							<li class="pinterest"><a href="#"><span> </span></a></li>
							<li class="youtube"><a
									href="https://www.youtube.com/channel/UComtbm8QWhDc9Vqa9NO2Pjw"><span> </span></a>
							</li>
						</ul>

					</ul>
				</div>
			</div>
			<div class="row footer_bottom">
				<div class="copy">
					<p>Design: <a href="http://w3layouts.com" target="_blank">Grupo 6</a></p>
				</div>
				<dl id="sample" class="dropdown">
					<dt><a href="#"><span>Change Region</span></a></dt>
					<dd>
						<ul>
							<li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span
										class="value">AS</span></a></li>
							<li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span
										class="value">SL</span></a></li>
							<li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span
										class="value">NZ</span></a></li>
							<li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span
										class="value">Pk</span></a></li>
							<li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span
										class="value">UK</span></a></li>
							<li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span
										class="value">US</span></a></li>
						</ul>
					</dd>
				</dl>
			</div>
		</div>
	</div>
</body>

</html>