<?php
include("../db.php");
$conex=conectar();
session_start();
if(isset($_POST['buttonlog'])){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $consulta="SELECT * FROM datos where usuario='$usuario' and contraseña='$contraseña'";
    $resultado=mysqli_query($conex,$consulta);
}
// die($contraseña);
$_SESSION['usuario'] = $usuario;



$filas=mysqli_fetch_array($resultado);
if($filas){
    switch($filas['id_rol']){
        case 0: 
            header("location: ../vistas/homeusuarioc.php");
            break;
        case 1: 
            header("location: ../vistas/homeusuarioc.php");
            break;
        case 2: 
            header("location: ../vistas/homeusuarioc.php");
            break;
        default:
        echo("<script>alert('El usuario y/o contraseña son invalidos');</script>");
        echo("<script>window.location.href = '../vistas/registro.php';</script>");
            break;
    }
}else{
    echo("<script>alert('El usuario y/o contraseña son invalidos');</script>");
    echo("<script>window.location.href = '../vistas/registro.php';</script>");
}


mysqli_free_result($resultado);
mysqli_close($conex);
?>
