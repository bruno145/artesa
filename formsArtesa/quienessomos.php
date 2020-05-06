<!DOCTYPE HTML>
<html>
	<head>
		<title>Artesanías de mi pueblo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/estiloquienessomos.css">
	</head>
	<body>
        <div id="wrapper">
				<header id="header">
				<div class="inner">
				<a href="index.html" class="logo">
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
                            <li><a href="agregarproducto.php">Agregar un producto</a></li>
                            <li><a href="preciodeventa.php">Calculadora Artesa</a></li>
                            <hr>
                            <h2><?php 
                    session_start();
                    if (isset($_SESSION['username']))
                        echo $_SESSION['username']; 
                    else
                        header("location: ../index.html");
                ?></h2> 
                            <li><a href="mismensajes.php">Mis mensajes</a></li>
                            <li><a href="perfilusuario.php">Configurar Cuenta</a></li>
                            <li><a href="../poo.php">Cerrar Sesión</a></li>
						</ul>
					</nav>

					<div id="main">
						<div class="inner">
							<h1>¿Quiénes Somos?</h1>
							<p>Lo que “Artesanías de Mi Pueblo” propone es un sistema de artesano-cliente que ayude a la compra y venta de productos creados artesanalmente ofreciendo así una descripción del producto en cuestión acompañada de una serie de fotografías que ayudan a la comercialización de este mismo dándole al cliente la opción de contactarse con el artesano a través del sitio o redes sociales para poder preguntarle por el producto o si lo tiene a la venta en cantidad y cosas por el estilo.</p>
                            <div class="contenido">
                                    <div class="img1">
                                        <img src="images/822595.jpg">
                                    </div>
                                    <div class="parrafo1">
                                        <p>En la actualidad, diferentes artesanos de El Salvador venden sus productos a menor escala porque no tienen los medios para darse a conocer, por lo que viven a costa de los turistas que visitan sus pueblos o compradores mayoristas, que adquieren las artesanías a bajo costo y que luego los venden a precios elevados en centros comerciales.</p>
                                    </div>
                            </div>
                            <hr>
                            <div class="contenido">
                                <div class="parrafo2">
                                    <p>En la actualidad, diferentes artesanos de El Salvador venden sus productos a menor escala porque no tienen los medios para darse a conocer, por lo que viven a costa de los turistas que visitan sus pueblos o compradores mayoristas, que adquieren las artesanías a bajo costo y que luego los venden a precios elevados en centros comerciales.</p>
                                </div>
                                <div class="img2">
                                    <img src="images/Great-Bazaar-960x960.jpg">
                                </div>
                            </div>
                            <hr>
                            <div class="contenido">
                                <div class="img3">
                                    <img src="images/artesano-oaxaqueño-ocotlan-IMG_1190.jpg">
                                </div>
                                <div class="parrafo3">
                                    <p>En la actualidad, diferentes artesanos de El Salvador venden sus productos a menor escala porque no tienen los medios para darse a conocer, por lo que viven a costa de los turistas que visitan sus pueblos o compradores mayoristas, que adquieren las artesanías a bajo costo y que luego los venden a precios elevados en centros comerciales.</p>
                                </div>
                            </div>
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
								<h2>Síguenos en</h2>
								<ul class="icons">
									<li><a href="https://twitter.com/artesa_sv" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/Artesan%C3%ADas-de-mi-pueblo-1869465476709706/" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/artesa_sv/" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Copyright 2017  |  Artesanias de mi pueblo </li>
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