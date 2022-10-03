<?php
include("../db.php");
$conex=conectar();
session_start();
$nusuario = $_SESSION['usuario'];

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
include("../models/validacion_clientes.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
    switch($idrol){
        case 0: 
            include ("../sidebars/sidebarc.php");
            break;
        case 1: 
            include ("../sidebars/sidebare.php");
            break;
        case 2: 
            include ("../sidebars/sidebara.php");
            break;
        default:
            die("Error");
            break;
} 
?>
    <meta charset="UTF-8">

    <title>Progreso</title>

    <link rel="stylesheet" href="../css/estilousuario.css">
</head>

<body>

    <script src="https://kit.fontawesome.com/db50c9d526.js"></script>

        <div class="main_content">
            <div class="info">
                <div class="contenedor-peso"> <p>tu peso anterior era de: ... </p> <br> <p>tu peso actual es de: ...</p> </div>
                <div class="contenedor-asistencia">  <p> tus asistencias a turnos presenciales es: </p> <br> <p> tus asistencias a turnos virtuales es: </p>  </div>

            </div>
        </div>
    </div>

</body>

</html>