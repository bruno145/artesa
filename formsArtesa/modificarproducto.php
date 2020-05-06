<!DOCTYPE HTML>
<html>
	<head>
		<title>Artesanías de mi Pueblo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/modificarproducto.css">
    </head>
	<body>
			<div id="wrapper">
					<header id="header">
						<div class="inner">
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/shop.svg" alt="" /></span><span class="title">Artesanías de mi Pueblo</span>
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
							<li><a href="">Inicio</a></li>
							<li><a href="catalogo.html">Categorías</a></li>
							<li><a href="quienessomos.html">¿Quiénes Somos?</a></li>
                            <hr>
                            <h2></h2>
                            <li><a href="agregarproducto.php">Agregar producto</a></li>
                            <li><a href="../poo.php">Cerrar Sesión </a></li>
						</ul>
					</nav>
					<div id="main">
						<div class="inner">
							<h1>Modificar Producto</h1>
				            <p>Tienes que llenar todos los campos para poder modificar el producto.</p>
                            <div class="modificar">
                            <?php 
								include "../head.php";
								$pro = $_GET['id_pro'];
								$sqli = "SELECT * FROM producto WHERE id_pro='$pro'";
								$eject = $con->query($sqli);
								while($fila = $eject->fetch_array()): 
							?>
                                <form action="proceso_modif.php?id_pro=<?php echo $pro; ?>" method="post" enctype="multipart/form-data">
                                    <h3>Nombre del Producto: </h3>
                                    <div class="6u 12u$(xsmall)">
								        <input type="text" name="nombre_pro" id="nombre_pro" placeholder="<?php echo $fila['nombre_pro']; ?>">
								    </div>
                                    <h3>Categoría del Producto: </h3>
                                    <div class="6u 12u$(xsmall)">
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
                                    <h3>Precio: </h3>
                                    <div class="6u 12u$(xsmall)">
								        <input type="number" name="precio" id="precio" step="any" placeholder="<?php echo $fila['precio']; ?>"/>
								    </div>
                                    <div class="6u 12u$(xsmall)">
                                            <h3>Descripción:</h3>
								            <textarea name="descripcion" id="descripcion" placeholder="Descripción" rows="4"><?php echo $fila['descripcion']; ?></textarea>
								    </div>
								<?php endwhile; ?>
                                    <h3>Subir una imagen para la artesanía.</h3>
                                    <div class="contenido">
                                        <div class="12u$">
                                            <input type="file" name="archivo" id="archivo" value="" placeholder="Subir Imagen">
                                        </div>
                                    </div>
                                        <div class="enviar1">
                                            <div class="12u$">
                                                <input type="submit" value="Modificar" name="boton">
                                            </div>
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