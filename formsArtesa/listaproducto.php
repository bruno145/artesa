<!DOCTYPE HTML>
<html>
	<head>
		<title>Artesanías de mi pueblo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/listaproducto.css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
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
										<li><a href="#menu">Menú</a></li>
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
                    if (isset($_SESSION['username'])){
                        echo $_SESSION['username']; 
                    }else{
                        header("location: ../index.html");
                    }
                ?></h2>
                            <li><a href="agregarproducto.php">Agregar un producto</a></li>
                            <li><a href="artesano.php">Configurar Cuenta</a></li>
                            <li><a href="../poo.php">Cerrar Sesión</a></li>
						</ul>
					</nav>
					<div id="main">
						<div class="inner">                        
                           
                                <h1>Tus productos</h1>
                                <div class="txt">
                                    <p>Estos son los diferentes productos que has agregado a nuestra página, acá podrás eliminarlos o modificarlos.</p>
                                </div>
                                <hr>
                            <div class='contenido'>
                                <?php 
                            	include "../head.php";
                            	$var=$_SESSION['id_user'];
                            	$quer = "SELECT * FROM producto WHERE id_user='$var'";
                            	  $eject = $con->query($quer);
                               while($fil = $eject->fetch_array()): 
                               	?>
                                   <div class='contenido-l'>
                                    <div class='con'>
                                        <div class='num'>
                                            <p>#<?php echo $fil['id_pro']; ?></p>
                                        </div>
                                    </div>
                                    <div class='con'>
                                        <div class='nombre'>
                                            <p><?php echo $fil['nombre_pro']; ?></p>
                                        </div>
                                    </div>
                                    <div class='con'>
                                        <div class='precio'>
                                            <p>$<?php echo $fil['precio']; ?></p>
                                        </div>
                                    </div>
                                    <form action="modificarproducto.php?id_pro=<?php echo $fil['id_pro']; ?>" method="POST">
                                        <input type="submit" name="modificar" value="modificar" id="modificar">
                                    </form> 
                                    <form action="eliminarpro.php?id_pro=<?php echo $fil['id_pro']; ?>" method="POST">
                                        <input type="submit" name="eliminar" value="eliminar" id="eliminar">
                                    </form> 
                                    </div>
                            </div>
                        <?php endwhile; ?>
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
            <script src="assets/css/slider.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <script src="assets/js/jquery.js"></script>
        <script src="assets/js/jquery.superslides.js"></script>
	</body>
</html>