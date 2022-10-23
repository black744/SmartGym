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

include("../models/validacion_clientes.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <title>Home Usuario</title>
    <link rel="stylesheet" href="../css/estilousuario.css">
</head>
<?php
switch ($idrol) {
    case 0:
        include("sidebars/sidebarc.php");
        break;
    case 1:
        include("sidebars/sidebare.php");
        break;
    case 2:
        include("sidebars/sidebara.php");
        break;
    default:
        die("Error");
        break;
}
?>

<body>

<div class="izq">
    <h1>Turnos proximos</h1>
    <hr>
    <div class="turno-prox">
        <p> de turno <br> xd <br> xd <br> xd </p>
    </div>
</div>

<style>
    .turno-prox{
        position:relative;
        height: 25vh;
        width: 90%;
        margin: 5%;
        border: 1px solid red;
        border-radius: 15px;
        background: #fb5c0d;
    }
</style>

<div class="der">
    <h1> datos semanales</h1>
    <hr>
    <p> cuantos clientes tienen clases con vos</p>
</div>

</body>
</html>