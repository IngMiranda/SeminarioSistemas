<?php


$host 	= 'localhost';
$nom 	= 'id20343477_root';
$pass 	= 'root123456_AB';
$db 	= 'id20343477_id20343477_upemreferencias';

$conn = mysqli_connect($host, $nom, $pass, $db);

if (!$conn) 
{
  die("Error en la conexión: " . mysqli_connect_error());
}	
?>