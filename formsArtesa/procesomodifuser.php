<?php 
session_start();
include '../head.php';
$user = $_SESSION['id_user'];
$sql2 = "SELECT * FROM usuarios WHERE id_user='$user'";
    $eject = $con->query($sql2);
    while($fila = $eject->fetch_array()):
/////////////////////////////////
if (empty($_POST['nombre'])) {
        $nombre_pro=$fila['nombre'];
}else{
    $nombre_pro = $_POST['nombre'];
}
////////////////////////////////
if (empty($_POST['password'])) {
        $categoria=$fila['password'];
}else{
    $categoria = $_POST['password'];
}
////////////////////////////////
if (empty($_POST['username'])) {
        $categoria=$fila['username'];
}else{
    $categoria = $_POST['username'];
}
////////////////////    
if (empty($_POST['email'])) {
        $descripcion=$fila['email'];
}else{
    $descripcion = $_POST['email'];
    }
////////////////////    
if (empty($_POST['DUI'])) {
        $precio=$fila['dui'];
}else{
    $precio = $_POST['DUI'];
    }////////////////////////////////
if (empty($_POST['telefono'])) {
        $categoria=$fila['telefono'];
}else{
    $categoria = $_POST['telefono'];
}////////////////////////////////
if (empty($_POST['fecha_nac'])) {
        $categoria=$fila['fecha_nac'];
}else{
    $categoria = $_POST['fecha_nac'];
}
////////////////////////////////
if (empty($_POST['departamento'])) {
        $categoria=$filai['departamento'];
}else{
    $categoria = $_POST['departamento'];
}
//////////////////////
if (empty($_FILES['archivo'])){
        $nombreArchivo=$fila['image_pro'];
}else{

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
        $sql = "UPDATE FROM usuarios SET password='$password', username='$username', nombre='$name', dui='$dui', email='$email', telefono='$phone', fecha_nac='$fecha', tipo='$type', departamento='$departamento', image='images/$nombreArchivo' WHERE id_user=$_SESSION['id_user'] ";
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