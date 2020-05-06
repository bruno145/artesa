<!DOCTYPE HTML>
<html>
	<head>
		<title>Artesanías de mi pueblo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/pv.css">
        <link rel="stylesheet" href="assets/css/modal.css">
	</head>
	<body>
			<div id="wrapper">
					<header id="header">
						<div class="inner">
								<a href="" class="logo">
									<span class="symbol"><img src="images/shop.svg" alt="" /></span><span class="title">Artesanías de mi pueblo</span>
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
                            <li><a href="agregarproducto.php">Agregar un producto</a></li>
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
							<h1>Precio de Ventas</h1>
				            <p>Artesanías de mi pueblo te a ayuda a calcular el precio ideal para que tengas buenas ganancias conforme a los gastos realizados a la elaboracion de tus artesanías.</p>
                            <hr>
				            <h2>Como usar la calculadora</h2>
                            <p>Antes que nada debes tener a mano todo los gastos que has hecho para la elaboración de tus artesanías</p>
                            <h3>Costos Fijos</h3>
                            <p>Los costos fijos son aquellos costos que debe pagar independientemente de su nivel de operación, es decir, produzca o no produzca debe pagarlos. Como por ejemplo el salario de empleados, los recibos del agua, luz o el pago del alquiler, aunque no se venda se debe pagar.</p>
                            <h3>Costos Variables</h3>
                            <p>Es todo aquel costo que aumenta o disminuye según aumente o disminuya la producción. Un ejemplo claro de costo variable es la materia prima, puesto que entre más unidades se produzcan, más materia prima se requiere, o caso contrario, entre menos unidades se produzcan, menos materia prima se requiere.</p>
                            <h3>Costos Totales</h3>
                            <p>Es la suma de de los costos variables con los costos fijos.</p>
                            <h3>Costos Totales Unitario</h3>
                            <p>Es el valor promedio para la elaboracion de un pruducto</p>
                            <hr>
                            <div class="empecemos">
                            <h2>¡Empecemos!</h2>
                            <form action="bell.php" method="post">
                                <h3>Nombre del producto</h3>
                                <div class="6u 12u$(xsmall)">
                                <input required type="text" name="producto" id="producto" placeholder="Nombre del producto">
                                </div>
                                <div class="6u 12u$(xsmall)">
                                                <h3>Categoría:</h3>
												<div class="select-wrapper">
													<select name="categoria" id="categoria" required>
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
                                <h3>¿Cuanto son tus costos fijos?</h3>
                                <input type="number" step="any" name="fijo" id="fijo" required>
                                <h3>¿Cuanto son tus costos variable?</h3>
                                <input type="number" step="any" name="variable" id="variables" required>
                                <h3>¿De cuanto fue tu produción?</h3>
                                <input type="number" name="produccion" id="produccion" required>
                                <h3>¿Tu margen de gananias que deseas?</h3>
                                <input type="number" name="margen" id="margen" required>
                                <div class="enviar">
                                <input type="submit" name="enviar" id="enviar">
                                </div>
                            </form>
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