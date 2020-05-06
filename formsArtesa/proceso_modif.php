	<?php
	session_start();
	include '../head.php';
	$pro = $_GET['id_pro'];
	$sqli = "SELECT * FROM producto WHERE id_pro='$pro'";
	$eject = $con->query($sqli);
	while($fila = $eject->fetch_array()): 
////////////////////////////
if (empty($_POST['nombre_pro'])) {
		$nombre_pro=$fila['nombre_pro'];
}else{
	$nombre_pro = $_POST['nombre_pro'];
}
////////////////////////////////
if (empty($_POST['categoria'])) {
		$categoria=$fila['categoria'];
}else{
	$categoria = $_POST['categoria'];
}
////////////////////	
if (empty($_POST['descripcion'])) {
		$descripcion=$fila['descripcion'];
}else{
	$descripcion = $_POST['descripcion'];
	}
////////////////////	
if (empty($_POST['precio'])) {
		$precio=$fila['precio'];
}else{
	$precio = $_POST['precio'];
	}
//////////////////////
if (empty($_FILES['archivo'])){
		$nombreArchivo=$fila['image_pro'];
}else{
	$formatos = array('.jpg', '.png');
    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
    	if (in_array($ext, $formatos)){
        if(move_uploaded_file($nombreTmpArchivo, "images/$nombreArchivo")){
        	print "<script>alert(Imagen subida con éxito);window.location='../artesa/formsArtesa/catalogo.php';</script>";
        }else{
        	print "<script>alert(Error al subir imagen, comprueba el directorio del archivo);</script>";
        }
        }else{
         	print "<script>alert(Formato de imagen no aceptado, intenta con JPG y PNG)</script>";
        }
	$imagen=$nombreTmpArchivo;
	}
	endwhile;
	$departamento = $_SESSION['departamento'];
	$id_user = $_SESSION['id_user'];
	$enter = "UPDATE producto SET nombre_pro='$nombre_pro', image_pro='images/$nombreArchivo', descripcion='$descripcion', precio='$precio', departamento='    			$departamento', categoria='$categoria' WHERE id_pro = '$pro'";
	$query = $con->query($enter);
	if ($query === true)
		header("location: ../formsArtesa/catalogo.php");
	else
		print "Error al agregar producto";