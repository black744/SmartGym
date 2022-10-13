<?php
include("../db.php");
$conex=conectar();
session_start();
$nusuario = $_SESSION['usuario'];

if(isset($_POST['guardar-rutina'])){
    $nombreejer = $_POST['nombreejer'];
    $descripcion = $_post['descripcion'];
    $cantidadseries = $_post['cantidadseries'];
    $cantidadrepeticiones = $_post['cantidadrepeticiones'];

$sql="UPDATE rutina SET  nombreejer='$nombreejer', descripcion='$descripcion', cantidadrepeticiones='$cantidadrepeticiones', cantidadseries='$cantidadseries'
WHERE usuario='$nusuario'";
$query=mysqli_query($conex,$sql);

}

?>