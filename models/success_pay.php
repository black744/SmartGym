<?php
include("../db.php");
$conex = conectar();
session_start();

$idusuario_pago_aceptado=$_GET["idusuario"];
$tipo_suscripcion=$_GET['plantype_set'];


$act_pago="UPDATE datos SET estado_cuenta='1', plantype='$tipo_suscripcion', ultimopago= NOW() WHERE idusuario='$idusuario_pago_aceptado'";
$query_pago_aceptado=mysqli_query($conex, ($act_pago));


echo("<script>alert('Pago acreditado correctamente, ya puede usar el servicio');</script>");
echo("<script>window.location.href = '../models/vto.php';</script>");

?>