<?php 
if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
include 'head.php';
$username = $_POST['username']; 
$name = $_POST['nombre']; 
$email = $_POST['email']; 
$phone = $_POST['telefono']; 
$dui = $_POST['DUI']; 
$fecha = $_POST['fecha_nac']; 
$password = $_POST['password']; 
$type = $_POST['tipo']; 
$departamento = $_POST['departamento'];
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
$buscarUsuario = "SELECT * FROM usuarios            
WHERE username = '$username'";
$resultado = $con->query($buscarUsuario);
if ($resultado->num_rows > 0){
    print "<script>alert(\"El usuario ya ha sido tomado.\";location: registro.php);</script>";
}else{
        $sql = "INSERT INTO usuarios(password, username, nombre, dui, email, telefono, fecha_nac, tipo, departamento, image) VALUES ('$password','$username','$name','$dui','$email','$phone','$fecha','$type','$departamento', 'images/$nombreArchivo')";
      $eject = $con->query($sql);
        if ($eject === true) {
            print "<script>alert(Usuario creado exitosamente!
                                 Procede a loguearte)</script>";
            header("location: ingreso.php");
        }else{
            print "Error al crear el usuario." . $query . "<br>" . $con->error; 
        }
    }
}
    }
}
?>