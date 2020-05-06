<?php 
	session_start();
	include '../head.php';

	$nombre_pro = $_POST['nombre_pro'];
	$categoria = $_POST['categoria'];
	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];
	$departamento = $_SESSION['departamento'];
	$id_user = $_SESSION['id_user'];
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
	$enter = "INSERT INTO producto (nombre_pro, image_pro, descripcion, precio, departamento, id_user, categoria) VALUES ('$nombre_pro','images/$nombreArchivo','$descripcion','$precio','$departamento','$id_user','$categoria')";
	$query = $con->query($enter);
	if ($query === true)
		header("location: ../formsArtesa/catalogo.php");
	else
		print "Error al agregar producto";
	
?>