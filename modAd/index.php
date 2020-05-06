<?php
  	session_start(); 
	include '../head.php'; 
	if ($_SESSION['t'] != 'Mo' or $_SESSION['t'] != 'Ad') {
		header('location: ../log.php');
	}else{
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Administradores</title>
 </head>
 <body>
 <h1>Administradores</h1> 
 </body>
 </html>
 <?php 
}
  ?>