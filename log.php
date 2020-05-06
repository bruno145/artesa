<?php 
if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "head.php";
			$user_id=null;
			$sql1= "SELECT * FROM usuarios WHERE username=\"$_POST[username]\" and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($row=$query->fetch_array()) {
				$id_user = $row['id_user'];
				$username = $row['username']; 
				$name = $row['nombre']; 
				$email = $row['email']; 
				$phone = $row['telefono']; 
				$dui = $row['dui']; 
				$fecha = $row['fecha_nac']; 
				$password = $row['password']; 
				$type = $row['tipo']; 
				$departamento = $row['departamento'];
				$image = $row['image'];
			}
			if($id_user==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../artesa/ingreso.php';</script>";
			}else{
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['id_user'] = $id_user;
				$_SESSION['t'] = $type;
				$_SESSION['email'] = $email;
				$_SESSION['nombre'] = $name;
				$_SESSION['phone'] = $phone;
				$_SESSION['fecha_nac'] = $fecha;
				$_SESSION['departamento'] = $departamento;
				$_SESSION['DUI'] = $dui;
				$_SESSION['image'] = $image;
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
				header('location: artesa/ingreso.php');
				break;
		          }		
            }
		}
	}
}
}
?>