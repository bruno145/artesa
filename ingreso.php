<?php session_start(); 
            if (isset($_SESSION['t'])) {
		      switch ($_SESSION['t']) {
			case 'Ar':
				header('location: formsArtesa/catalogo.php');
				break;
			case 'Cl':
				header('location: formsUser/catalogo.php');
				break;
			case 'Ad':
				header('location: modAd/index.php');
				break;
			case 'Mo':
				header('location: modAd/index.php');
				break;
		          }		
            }
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Artesanías de mi Pueblo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/agregarproducto.css">
	</head>
	<body>
			<div id="wrapper">
					<header id="header">
						<div class="inner">
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/shop.svg" alt="" /></span><span class="title">Artesanías de mi pueblo.</span>
								</a>
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>
						</div>
					</header>
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Inicio</a></li>
                            <hr>
                            <h2>Invitado</h2>
                            <li><a href="registro.php">Registrate</a></li>
                            <li><a href="quienessomos.html">¿Quiénes Somos?</a></li>
						</ul>
					</nav>
					<div id="main">
						<div class="inner">
								<div class="titulo">
                                    <h2>Login</h2>
								</div>
								<section>
									<form role="form" method="post" name="login" action="log.php">
										<div class="contenido1">
                                        <div class="row uniform">
                                         <div class="contenido2">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="username" id="username" value="" placeholder="Nombre de Usuario">
											</div>
                                             </div>
                                            <div class="contenido2">
                                                <div class="6u 12u$(xsmall)">
												    <input type="password" name="password" id="password" value="" placeholder="Contraseña" minlength="3" maxlength="20" size="20">
											     </div>
                                            </div>
                                                <div class="enviar">
                                                    <div class="boton">
                                                        <div class="12u$">
                                                            <input type="submit" value="Acceder" class="special">
                                                        </div>
                                                    </div>
											     </div>
                                            </div>
										</div>
									</form>
								</section>
                            <script src="js/valida_login.js"></script>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<div class="terminos">
                                    <h3>TÉRMINOS Y CONDICIONES</h3>
                                    <p>Artesanías de mi pueblo no se hace responsable de ...
                                    </p>
                                    <p>Para conocer el reglamento y uso del sitio web, 
                                    por favor dirigete a la sección de "¿Quiénes somos?"</p>
                                </div>
							</section>
							<section>
								<h2>Síguenos en</h2>
								<ul class="icons">
									<li><a href="https://twitter.com/artesa_sv" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/Artesan%C3%ADas-de-mi-pueblo-1869465476709706/" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/artesa_sv/" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
                                <p>Síguenos en nuestras diferentes redes sociales, para mejorar nuestro servicio.</p>
							</section>
							<ul class="copyright">
								<li>&copy; Derechos Reservados 2017</li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>