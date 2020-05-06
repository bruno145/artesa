<!DOCTYPE HTML>
<html>
	<head>
		<title>Artesanías de mi pueblo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/estilo.css">
        <link rel="shortcut icon" href="../logo.png">
        <link rel="stylesheet" href="assets/css/modal.css">
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
							<li><a href="../formsUser/catalogo.php">Inicio</a></li>
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
						<?php
					$idproducto=$_GET['id_pro'];					
					include '../head.php';
					$consulta="SELECT * FROM producto p INNER JOIN usuarios U on p.id_user=u.id_user WHERE id_pro='$idproducto;'";
					$ejecutar = $con->query($consulta);
					while ($row=$ejecutar->fetch_array()):
						$nombre = $row['nombre_pro'];
						$image = $row['image_pro'];
						$descripcion = $row['descripcion'];
						$precio = $row['precio'];
						$departamento = $row['departamento'];
						$id_user = $row['id_user'];
						$categoria_pro = $row['categoria'];
						$nombre_user = $row['nombre'];
						$user_name = $row['username'];
						$telefono = $row['telefono'];
						$email = $row['email'];
					endwhile;
					 ?>
					<div id="main">
						<div class="inner">
                            <div id="c-slider">
                                <div id="slider">
                                    <div class="slides-container">
                                        <section>
                                            <img src="<?php echo $image; ?>">
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="info">                       
                                <div class="titulo">
                                <h2><?php echo $nombre; ?></h2>
                                </div>
                                <div class="precio">
                                    <p>Precio: </p>
                                    <h3>$<?php echo $precio; ?></h3>
                                </div>
                                <div class="descripcion">
                                    <h3>Descripción: </h3>
                                    <p><?php echo  $descripcion; ?></p>
                                </div>
                                    <p>Contactarse con el artesano:</p>
                                    <input id="mostrar-modal" name="modal" type="radio" />
                                    <label  for="mostrar-modal">Contactar</label>
                                <a href="../mensajeria.php?id_ar=<?php echo $id_user; ?>">Enviar Mensaje</a>

                                    <input id="cerrar-modal" name="modal" type="radio" /> 
                                    <label for="cerrar-modal"> X </label> 
                                    <div id="modal">
                                        <div class="contenido">

                                    <h3>Nombre artesano:</h3>
                                    <p><?php echo $nombre_user; ?></p>
                                    <h3>Teléfono: </h3>
                                        <p><?php echo $telefono; ?></p>
                                    <h3>Departamento: </h3>
                                    <p><?php echo $departamento; ?></p>
                                            <h3>Correo: </h3>
                                            <p><?php echo $email; ?></p>
                                            </div>
                                    </div>
                            </div>
                            </div>
                    </div>
              <div class="comentario">
                                <form  method="post">
                                    <div class="6u 12u$(xsmall)">
                                    <h3>Comenta si te gusto el producto</h3>
                                    <input type="text" name="comentario" required><br>
                                    </div>
                                    <input type="submit" value="comentar!" name="comentar" ><br>
                                </form>
                                <?php
                                    require("head.php");
                                    if (isset($_POST["comentar"])){
                                        $name=$_SESSION['username'];
                                        $commentary=$_POST["comentario"];
                                        $pro=$idproducto;
                                    if ($commentary==""){
                                        echo "<p>Escribe un comentario</P>";
                                    }
                                    else{
                                        $sql="INSERT INTO comentarios (nombre, comentario, producto) VALUES ( '$name', '$commentary','$pro')";
                                        $resultado=mysqli_query($con,$sql); 
                                    }
                                    }
                                    $sql2="SELECT * FROM comentarios WHERE producto=$idproducto";
                                    $resultado2=mysqli_query($con,$sql2);
                                    while($fila=mysqli_fetch_array($resultado2,MYSQLI_BOTH)){
                                    echo "<div class='comen'>";
                                    echo " <h3>" . $fila[1] . "</h3><br>" ;
                                    echo  "<p>" . $fila[2] . "</p><br>";
                                    echo "</div>";
                                    }
                                ?>
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