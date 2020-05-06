<!DOCTYPE HTML>
<html>
    <head>
        <title>Artesanías de mi Pueblo</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../assets/css/main.css" />
        <link rel="shortcut icon" href="../logo.png">
        <link rel="stylesheet" href="assets/css/modificarperfil.css">
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
                                        <li><a href="#menu">Menu</a></li>
                                    </ul>
                                </nav>
                        </div>
                    </header>
                    <nav id="menu">
                        <h2>Menu</h2>
                        <ul>
                            <li><a href="">Inicio</a></li>
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
                            <li><a href="../poo.php">Cerrar Sesión</a></li>
                        </ul>
                </nav>
                    <div id="main">
                        <div class="inner">
                                <div class="titulo">
                                    <h2>Modificar Cuenta</h2>
                                </div>
                                <section>
                                    <form method="post" action="modificar.php">
                                    <?php 
                                        include '../head.php'; 
                                        $id=$_SESSION['id_user'];                              
                                        $query = "SELECT * FROM usuarios WHERE id_user='$id'";
                                        $ejecutar = $con->query($query);
                                        while($fila = $ejecutar->fetch_array()):
                                    ?>
                                        <div class="contenido1">
                                        <div class="row uniform">
                                            <div class="datos">
                                                <div class="12u$">
                                                    <h3>Nombre Completo:</h3>
                                                    <input type="text" name="nombre" id="nombre" value="" placeholder="<?php echo $fila['nombre']; ?>">
                                                </div>
                                            </div>
                                             <div class="datos">
                                                <div class="12u$">
                                                    <h3>Nombre de Usuario:</h3>
                                                    <input type="text" name="username" id="username" value="" placeholder="<?php echo $fila['username']; ?>">
                                                </div>
                                             </div>
                                            <div class="datos">
                                                <div class="12u$">
                                                    <h3>Email:</h3>
                                                    <input type="email" name="email" id="email" placeholder="<?php echo $fila['email']; ?>">
                                                </div>  
                                            </div>
                                            <div class="datos">
                                                <div class="12u$">
                                                    <h3>DUI:</h3>
                                                    <input type="text" name="DUI" id="DUI" placeholder="<?php echo $fila['dui']; ?>">
                                                </div>  
                                            </div>
                                            <div class="datos">
                                                <div class="12u$">
                                                    <h3>Telefono:</h3>
                                                    <input type="tel" name="telefono" id="telefono" placeholder="<?php echo $fila['telefono']; ?>">
                                                </div>
                                            </div>
                                            <div class="datos">
                                                <div class="12u$">
                                                    <h3>Fecha de Nacimiento:</h3>
                                                    <input type="date" name="fecha_nac" id="datepicker" min="1920-01-01" max="2030-01-01" placeholder="<?php echo $fila['fecha_nac']; ?>" format="yy/mm/dd">
                                                </div>    
                                            </div>
                                            <div class="datos">
                                                <div class="12u$">
                                                    <h3>Contraseña Actual:</h3>
                                                    <input type="password" name="password" id="password" value="" placeholder="<?php echo $fila['password']; ?>" minlength="6" maxlength="12" size="12">
                                                 </div>
                                            </div>
                                            <?php
                                                endwhile;
                                            ?>
                                            <div class="datos">
                                                <div class="12u$">
                                                    <h3>Contraseña Nueva</h3>
                                                    <input type="password" name="c_password" id="confpassword" value="" placeholder="Contraseña Nueva" minlength="6" maxlength="12" size="12">
                                                 </div>
                                            </div>
                                            <div class="datos">
                                            <div class="foto">
                                            <h2>Ingrese una foto de perfil</h2>
                                                </div>
                                            </div>
                                            <div class="dato2">
                                            <div class="12u$">
                                                <input type="file" name="archivo" id="archivo" value="" placeholder="Subir Imagen">
                                            </div>
                                            </div>
                                            <div class="dato2">
                                                <div class="enviar">
                                                    <div class="12u$">
                                                        <input type="submit" value="Agregar" class="special">
                                                    </div>
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