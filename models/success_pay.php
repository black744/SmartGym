<?php
include("../db.php");
$conex = conectar();
session_start();

$idusuario_pago_aceptado=$_GET["idusuario"];
$tipo_suscripcion=$_GET['plantype_set'];
$quantity= $_GET['quantity'];
switch($quantity){
    case 1:
$act_pago="UPDATE datos SET estado_cuenta='1', plantype='$tipo_suscripcion', cantidad_meses='$quantity', vencimiento = date_add(NOW(), INTERVAL +1 MONTH),  ultimopago= NOW() WHERE idusuario='$idusuario_pago_aceptado'";
$query_pago_aceptado=mysqli_query($conex, ($act_pago));
break;
    case 3:
$act_pago="UPDATE datos SET estado_cuenta='1', plantype='$tipo_suscripcion', cantidad_meses='$quantity', vencimiento = date_add(NOW(), INTERVAL +3 MONTH),  ultimopago= NOW() WHERE idusuario='$idusuario_pago_aceptado'";
$query_pago_aceptado=mysqli_query($conex, ($act_pago));
break;
    case 6:
$act_pago="UPDATE datos SET estado_cuenta='1', plantype='$tipo_suscripcion', cantidad_meses='$quantity', vencimiento = date_add(NOW(), INTERVAL +6 MONTH),  ultimopago= NOW() WHERE idusuario='$idusuario_pago_aceptado'";
$query_pago_aceptado=mysqli_query($conex, ($act_pago));
break;
echo("<script>alert('Error en el pago, Contactate con un administrador para solucionar el inconveniente');</script>");
echo("<script>window.location.href = '../models/sessiondestroy.php';</script>");
    default:


}



echo("<script>alert('Pago acreditado correctamente, ya puede usar el servicio');</script>");
echo("<script>window.location.href = '../vistas/homeusuarioc.php';</script>");

?>