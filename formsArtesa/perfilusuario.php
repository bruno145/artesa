<!DOCTYPE HTML>
<html>
	<head>
		<title>Artesanías de mi pueblo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
        <link rel="shortcut icon" href="../logo.png">
        <link rel="stylesheet" href="assets/css/perfilusuario.css">
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
                            <li><a href="../poo.php">Cerrar Sesión</a></li>
						</ul>
					</nav>
					<div id="main">
						<div class="inner">
                            <div class="contenido">
							    <h2>Perfil de usuario</h2>
                                <div class="info">
                                <div class="img">
                                    <input type="image" name="imagen" id="imagen" width="200" height="150"  src="../<?php echo $_SESSION['image']?>">
                                 </div>
                                 <br>
                                    <div class="con">
                                        <h3>Nombre Completo:</h3>
                                        <p><?php echo $_SESSION['nombre']; ?></p>
                                    </div>
                                    <div class="con">
                                        <h3>Nombre de Usuario:</h3>
                                        <p><?php echo $_SESSION['username']; ?></p>
                                    </div>
                                    <div class="con">
                                        <h3>Email:</h3>
                                        <p><?php echo $_SESSION['email']; ?></p>
                                    </div>
                                    <div class="con">
                                        <h3>Teléfono</h3>
                                        <p>6<?php echo $_SESSION['phone']; ?></p>
                                    </div>
                                    <div class="con">
                                        <h3>DUI</h3>
                                        <p><?php echo $_SESSION['DUI']; ?></p>
                                    </div>
                                    <div class="con">
                                        <h3>Fecha de nacimiento</h3>
                                        <p><?php echo $_SESSION['fecha_nac']; ?></p>
                                    </div>
                                    <div class="con">
                                        <h3>Tipo de Usuario</h3>
                                        <p><?php $tipo = $_SESSION['t'];
                                        		if($tipo = "Ar"){
                                        			echo "Artesano";
                                        		}elseif($tipo = "Cl"){
                                        			echo "Cliente";
                                        		}else{
                                        			echo "ADMINISTRADOR";
                                        		} ?></p>
                                    </div>
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
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>