<?php 
session_start(); 
include 'head.php';

            if (isset($_SESSION['t'])) {
		      switch ($_SESSION['t']) {
			case 'Ar':
				header('location: formsArtesa/catalogo.php');
				break;
			case 'Cl':
				header('location: formsUser/catalogo.php');
				break;
			case 'Ad':
				header('location: modAd/index.php');
				break;
			case 'Mo':
				header('location: modAd/index.php');
				break;
			default:
				header('location: ../ingreso.html');
				break;
		          }		
            }
?>
<html>
	<head>
		<title>Iniciar Sesi&oacute;n</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Login</h2>
		<br>
        <br>
    <a href="../artesa/index.html">Volver</a>
		<br>
        <br>
		<form role="form" name="login" action="log.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario o email</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-succes" name="login" value="Entrar">Acceder</button>
		</form>
</div>
</div>
</div>
		<!--<script src="js/valida_login.js"></script>-->
	</body>
</html>