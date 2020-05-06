<?php
$fijos = $_POST['fijo'];
$variable = $_POST['variable'];
$produccion = $_POST['produccion'];
$margen = $_POST['margen'];
$producto = $_POST['producto'];
$categoria = $_POST['categoria'];
$mage = $margen / 100;
$ct = $fijos + $variable;
$ctu = $ct / $produccion;
$pv = $ctu/(1-$mage);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Artesanías de mi pueblo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/pv.css">
        <link rel="stylesheet" href="assets/css/bell.css">
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
                            
                            <?php
                                echo '<div class="con">';
                                echo  "<h2>"."El precio de ".$producto." es de: </h2>";
                                echo "<h2>".round($pv,2)."</h2>";
                                echo '</div>';
                            ?>
                            <hr>
                            <div class="comparacion">
                            <p>Tambien hemos comparado el precio y la categoría de tu artesanía con los diferentes productos que cuenta nuestro sitio web.</p>
                            </div>
                            					            <?php
					            $cat=$categoria;
                                include '../head.php';                               
                                $query = "SELECT * FROM producto WHERE categoria='$cat'";
                                $ejecutar = $con->query($query);
                                ?>
                              <div class="contenido">
                                <div class="contenido-articulo">
                                    <?php while($fila = $ejecutar->fetch_array()): ?>
                                    <div class="articulo">
                                        <img src="<?php echo $fila['image_pro']; ?>">
                                        <h4><?php echo $fila['nombre_pro']; ?></h4>
                                        <a href="producto.php?id_pro=<?php echo $fila['id_pro']; ?>">$ <?php echo $fila['precio'];?></a>
                                    </div>
                                    <?php endwhile; ?>
                                
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