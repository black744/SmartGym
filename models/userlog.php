<?php
include("../db.php");
$conex=conectar();
session_start();

$sql="SELECT * FROM datos WHERE usuario='$nusuario'";
$query=mysqli_query($conex,$sql);

$row=mysqli_fetch_array($query);
$idrol= $row['id_rol'];
$nombre= $row['nombre'];
$apellido= $row['apellido'];
$dni= $row['dni'];
$correo= $row['correo'];
$idusuario= $row['idusuario'];
$image= $row['image'];
$usuario=$row['usuario'];

if ($usuario != $_SESSION){
    header("Location: sessiondestroy.php");
}
?>