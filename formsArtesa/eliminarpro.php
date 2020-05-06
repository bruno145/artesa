<?php 
	include "../head.php";
	$pro = $_GET['id_pro'];
	$sqli = "DELETE FROM producto WHERE id_pro='$pro'";
	$eject = $con->query($sqli);
	if ($eject==true){
		echo '<script>alert("Producto eliminado exitosamente")</script>';
        header("Location: ../formsArtesa/listaproducto.php");
	}else{
		echo '<script>alert("Error al eliminar producto")</script>';
        header("Location: ../formsArtesa/listaproducto.php");
	}
?>