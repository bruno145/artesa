<?php
$host="localhost";
$user="root";
$password="";
$db="artesa";
$con = new mysqli($host,$user,$password,$db);
function formatearFecha($fecha){
    return date('g:i a', strtotime($fecha));
}
?>
