<?php
include("../db.php");
$conex = conectar();
session_start();
$nusuario = $_SESSION['usuario'];


$sql = "SELECT * FROM datos WHERE usuario='$nusuario'";
$query = mysqli_query($conex, $sql);

$row = mysqli_fetch_array($query);
$idrol = $row['id_rol'];
$nombre = $row['nombre'];
$apellido = $row['apellido'];
$dni = $row['dni'];
$correo = $row['correo'];
$idusuario = $row['idusuario'];
$image = $row['image'];
$pesoactual = $row['pesoactual'];
$pesoinicial = $row['pesoinicial'];
$pesoideal = $row['pesoideal'];
$ultimopago = $row['ultimopago'];


if (isset($_POST['enviarpesoactual'])) {
    $NPactual = $_POST['pesoactual'];
    $sqlNPA = "UPDATE datos SET pesoactual='$NPactual' WHERE idusuario='$idusuario'";
    $queryNPA = mysqli_query($conex, ($sqlNPA));
    if ($queryNPA) {
        echo ("<script>window.location.href = '../vistas/homeusuarioc.php';</script>");
    };
};

if (isset($_POST['enviarpesoideal'])) {
    $NPideal = $_POST['pesoideal'];
    $sqlideal = "UPDATE datos SET pesoideal='$NPideal' WHERE idusuario='$idusuario'";
    $queryideal = mysqli_query($conex, ($sqlideal));
    if ($queryideal) {
        echo ("<script>window.location.href = '../vistas/homeusuarioc.php';</script>");
    };
}
?>