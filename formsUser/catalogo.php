<!DOCTYPE HTML>
<html>
	<head>
		<title>Artesanías de mi pueblo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
        <link rel="shortcut icon" href="../logo.png">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	</head>
	<body>
			<div id="wrapper">
					<header id="header">
				    <div class="inner">
							<!-- Logo -->
								<a href="../index.html" class="logo">
									<span class="symbol"><img src="../logo.png" alt="" /></span><span class="title">Artesanías de mi pueblo</span>
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
							<li><a href="../formsArtesa/catalogo.php">Inicio</a></li>
							<li><a href="catalogo.php">Categorías</a></li>
							<li><a href="quienessomos.php">¿Quiénes Somos?</a></li>
                            <hr>
                            <h2><?php 
                    session_start();
                    if (isset($_SESSION['username']))
                        echo $_SESSION['username']; 
                    else
                        header("location: ../index.html");
                ?></h2> 
                            <li><a href="perfilusuario.php">Configurar Cuenta</a></li>
                            <li><a href="../poo.php">Cerrar Sesión</a></li>
						</ul>
					</nav>
					<div id="main">
						<div class="inner">
							<header>
								<h1>Disfruta la experiencia de compra de artesanías por manos salvadoreñas.</h1>
								<p>Nuestros servicios facilita la compra y venta de productos creados en el país propagando así la cultura y costumbres mitológicas salvadoreñas.</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/cucharas-de-madera.jpg" width="100" height="300" alt="" />
									</span>
									<a href="Catalogodecatalogo.php?categoria=Cucharas">
										<h2>Cucharas</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/maxresdefault.jpg" width="100" height="300" alt="" />
									</span>
									<a href="Catalogodecatalogo.php?categoria=Ceramica">
										<h2>Cerámica</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/ollasdebarro.JPG" width="100" height="300" alt="" />
									</span>
									<a href="Catalogodecatalogo.php?categoria=Ollas">
										<h2>Ollas</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								
								<article class="style5">
									<span class="image">
										<img src="images/el_comal_le_dijo_a_la_olla_by_danianzueto.jpg" width="100" height="300" alt="" />
									</span>
									<a href="Catalogodecatalogo.php?categoria=Comal">
										<h2>Comal</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/4546247832_8acf358f33.jpg" width="100" height="300" alt="" />
									</span>
									<a href="Catalogodecatalogo.php?categoria=Madera">
										<h2>Madera</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/bf17d61e4492a301877edeb7f4b5bf20.jpg" width="100" height="300" alt="" />
									</span>
									<a href="Catalogodecatalogo.php?categoria=Tela">
										<h2>Tela</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/1450819192131.jpg" width="100" height="300" alt="" />
									</span>
									<a href="Catalogodecatalogo.php?categoria=Figuras">
										<h2>Figuras</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="images/tex28.jpg" width="100" height="300" alt="" />
									</span>
									<a href="Catalogodecatalogo.php?categoria=Ropa">
										<h2>Ropa</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/788ba-44804_3.jpg" width="100" height="300" alt="" />
									</span>
									<a href="Catalogodecatalogo.php?categoria=Tarjetas">
										<h2>Tarjetas</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic11.jpg" width="100" height="300" alt="" />
									</span>
									<a href="#">
										<h2>Proximamente...</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic12.jpg" width="100" height="300" alt="" />
									</span>
									<a href="#">
										<h2>Proximamente...</h2>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
							</section>
						</div>
					</div>
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
								<h2>Síguenos en </h2>
								<ul class="icons">
									<li><a href="https://twitter.com/artesa_sv" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/Artesan%C3%ADas-de-mi-pueblo-1869465476709706/" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/artesa_sv/" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Copyright 2017  |  Artesanias de mi pueblo</li>
							</ul>
						</div>
					</footer>

			</div>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            
	</body>
</html>