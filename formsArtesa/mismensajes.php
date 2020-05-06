<?php 
include 'head.php';

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Artesanías de mi pueblo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/chat.css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	</head>
	<body>
			<div id="wrapper">
					<header id="header">
						<div class="inner">
								<a href="index.html" class="logo">
									<span class="symbol"><img src="../logo.png" alt="" /></span><span class="title">Artesanías de mi pueblo.</span>
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
                            <li><a href="agregarproducto.php">Agregar un producto</a></li>
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
                            <div class="chat">
                                <h1>Chat</h1>
                                <p>Acá podrás conversar con los diferentes usuarios que están interesados en tu producto. Selecciona a un cliente para iniciar la negociacion</p>
                                <hr>
                                <?php
									$id_ar = $_SESSION['id_user'];
									$name = $_SESSION['username'];
									$sql = "SELECT * FROM chat WHERE id_ar = '$id_ar' AND nombre != '$name' AND visto = '1' GROUP BY nombre ORDER BY id ASC";
									$eject = $con->query($sql);
									while ($fila=$eject->fetch_array()):
								?>
                                <div class="muro">
                                    <div class="p">
                                        <p>Nombre</p>
                                    </div>
                                    <div class="p">
                                        <p>Hora</p>
                                    </div>
                                    <div class="usuario">
                                        <a href="mensajeria.php?id_user=<?php echo $fila['id_user']?>">
                                        <div class="nombre">
                                            <h4><?php echo $fila['nombre']; ?></h4>
                                        </div>
                                        <div class="nombre">
                                            <h4><?php echo $fila['fecha']; 
                                            		  echo $fila['id_user']?></h4>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
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
								<li>&copy; Copyright 2017  |  Artesanias de mi pueblo </li>
							</ul>
						</div>
					</footer>

			</div>
            <script src="assets/css/slider.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/ie/respond.min.js"></script>
			<script src="assets/js/main.js"></script>
            <script src="assets/js/jquery.js"></script>
        <script src="assets/js/jquery.superslides.js"></script>
	</body>
</html>
