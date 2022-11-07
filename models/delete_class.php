<?php
include("../db.php");
$conex = conectar();
session_start();
$nusuario = $_SESSION['usuario'];


$idclaserev = $_GET['idclase'];



$deletesql="DELETE FROM clases WHERE idclase=$idclaserev";
$querydelete=mysqli_query($conex, ($deletesql));
if($querydelete){
    echo ("<script>window.location.href = '../vistas/turnose.php';</script>");
}
?>
