<!DOCTYPE HTML>
<html>
	<head>
		<title>Artesanías de mi Pueblo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/agregarproducto.css">
	</head>
	<body>
			<div id="wrapper">
					<header id="header">
						<div class="inner">
								<a href="catalogo.php" class="logo">
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
							<li><a href="../formsArtesa/catalogo.php">Inicio</a></li>
							<li><a href="catalogo.php">Categorías</a></li>
							<li><a href="quienessomos.php">¿Quiénes Somos?</a></li>
                            <li><a href="preciodeventa.php">Calculadora Artesa</a></li>
                                                      <li><a href="listaproducto.php">Mis Productos</a></li>


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
								<div class="titulo">
                                    <h1>Agregar Producto</h1>
								</div>
								<section>
									<form method="POST" action="proceso_productos.php" enctype="multipart/form-data">
										<div class="row uniform">
                                        <div class="contenido">
                                            <h3>Nombre del Producto:</h3>
											<div class="12u$">
												<input type="text" maxlength="25" name="nombre_pro" id="nombre_pro" value="" placeholder="Nombre del producto" required/>
											</div>
                                         </div>
                                            <div class="contenido">
											<div class="12u$">
                                                <h3>Categoría:</h3>
												<div class="select-wrapper">
													<select name="categoria" id="categoria">
														<option value="Cucharas">Cucharas</option>
														<option value="Ceramica">Cerámica</option>
														<option value="Ollas">Ollas</option>
														<option value="Comal">Comal</option>
                                                        <option value="Madera">Madera</option>
                                                        <option value="Tela">Tela</option>
                                                        <option value="Figuras">Figuras</option>
                                                        <option value="Ropa">Ropa</option>
                                                        <option value="Tarjetas">Tarjetas</option>
													</select>
												</div>
											</div>
                                            </div>
                                                <div class="contenido">
                                            <div class="12u$">
                                                <h3>Descripción:</h3>
												<textarea name="descripcion" id="descripcion" placeholder="Descripción" rows="4"></textarea>
											</div>
                                            </div>
                                            <div class="contenido">
                                                <div class="12u$">
                                                    <h3>Precio:</h3>
												    <input type="number" name="precio" id="precio" min="0.00" max="500" value="" placeholder="Precio" step="any" required>
                                                </div>
                                            </div>
                                            <div class="contenido">
                                            <div class="12u$">
                                                <h3>Imagen:</h3>
                                            </div>
                                            </div>
                                            <div class="contenido">
                                            <div class="12u$">
                                                <input type="file" name="archivo" id="archivo" value="" placeholder="Subir Imagen" required>
                                            </div>
                                            </div>
                                            <div class="contenido">
                                                <div class="enviar1">
                                                    <div class="12u$">
                                                        <input type="submit" value="Agregar" class="special" name="boton">
                                                    </div>
											     </div>
                                            </div>
                                        </div>
                                        </form>
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>