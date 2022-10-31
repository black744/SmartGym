<?php
include("../db.php");
$conex = conectar();
session_start();

$idusuario_pago_aceptado=$_GET["idusuario"];

$act_pago="UPDATE datos SET estado_cuenta='1' WHERE idusuario='$idusuario_pago_aceptado'";
$query_pago_aceptado=mysqli_query($conex, ($act_pago));

echo("<script>alert('Pago acreditado correctamente, ya puede usar el servicio');</script>");
echo("<script>window.location.href = '../vistas/homeusuarioc.php';</script>");

?>