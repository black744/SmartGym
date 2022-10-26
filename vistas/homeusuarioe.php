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

    <div class="turno-prox">
    <?php
                    $sqlper = "SELECT * FROM clases WHERE entrenador='$nusuario' WHERE estado=1";
                    $queryper = mysqli_query($conex, $sqlper);
                    while ($datap = mysqli_fetch_array($queryper)){
                        ?>
                        <br>
                        <p>Clase N° <?php echo $datap['idclase']?></p>
                        <p>Fecha: <?php echo $datap['fecha']?></p>
                        <p>hora: <?php echo $datap['hora']?></p>
                        <hr>
                        <?php
                    
                    
                        
                    };?>
    </div>
</div>

<style>
    .turno-prox{
        position:relative;
        height: fit-content;
        width: 90%;
        margin: 5%;
        border-radius: 15px;
        background: #fb5c0d;

    } 

    .turno-prox p{
        margin: 2%;
        color: #fff;
    }

    hr{
        margin:2%;
        border: 1px solid #303030;
    }
</style>

<div class="der">
    <h1> datos semanales</h1>
    <hr>
    <p> cuantos clientes tienen clases con vos</p>
</div>

</body>
</html>