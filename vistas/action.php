<?php
include("../db.php");
$conex=conectar();
session_start();
$v=$_POST['idu'];
$nusuario = $_SESSION['usuario'];
$sql="SELECT * FROM datos WHERE usuario='$nusuario'";
$query=mysqli_query($conex,$sql);
$re=0;
//usuario SESSION
$row=mysqli_fetch_array($query);
$idrol= $row['id_rol'];
$nombre= $row['nombre'];
$apellido= $row['apellido'];
$dni= $row['dni'];
$correo= $row['correo'];
$idusuario= $row['idusuario'];
$image= $row['image'];
//usuario 2
$sql2="SELECT * FROM datos WHERE idusuario='$v'";
$query2=mysqli_query($conex,$sql2);
$row2=mysqli_fetch_array($query2);
$usuario2=$row2['usuario'];
$idrol2= $row2['id_rol'];
$nombre2= $row2['nombre'];
$apellido2= $row2['apellido'];
$dni2= $row2['dni'];
$correo2= $row2['correo'];
$idusuario2= $row2['idusuario'];
$image2= $row2['image'];
$de = $idusuario;
$para = $idusuario2;
//mensajes
if(isset($_GET['leido'])) {
  $leido = mysqli_real_escape_string($conex,$_GET['leido']);
  $usuariod = mysqli_real_escape_string($conex,$_GET['idu']);

  $tchats = mysqli_query($conex,"SELECT * FROM chats WHERE de = '$usuariod' OR para = '$usuariod'");
  $tc = mysqli_fetch_array($tchats);
  if($tc['de'] != $idusuario) {
  $update = mysqli_query($conex,"UPDATE chats SET leido = '1' WHERE de = '$usuariod' OR para = '$usuariod'");
  }
}