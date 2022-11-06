<?php
include("../db.php");
$conex = conectar();
session_start();
$nusuario = $_SESSION['usuario'];

$sql = "SELECT * FROM datos WHERE usuario='$nusuario'";
$query = mysqli_query($conex, $sql);

$row = mysqli_fetch_array($query);
$idusuario = $row['idusuario'];


$vto= date("y-m-d",strtotime($ultimopago."+ 30 days"));
echo $vto;

?>