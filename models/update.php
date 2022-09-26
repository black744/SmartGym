<?php
include("../db.php");
$conex=conectar();
session_start();
$nusuario = $_SESSION['usuario'];

if(isset($_POST['buttonedit'])){
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $apellido = $_POST['apellido'];
    $contraseña = $_POST['contraseña'];
$sql="UPDATE datos SET nombre='$nombre',apellido='$apellido',usuario='$usuario',correo='$correo',contraseña='$contraseña' WHERE usuario='$nusuario'";
$query=mysqli_query($conex,$sql);

}

    if($query){
        Header("Location: ../vistas/perfilusuarioc.php");
    }
?>