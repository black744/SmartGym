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

include("../models/validacion_clientes.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <title>Home Usuario</title>
    <link rel="stylesheet" href="../css/EstiloHomes.css">
    <link rel="stylesheet" href="../css/EstiloGeneral.css">
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

    <div class="main_contentn">
        <div class="izquierdan" id="divsb">
            <?php
            $sql_count = "SELECT COUNT(*) AS idusuario FROM datos WHERE id_rol=0";
            $queryCount= mysqli_query($conex, ($sql_count));
            $cantidad = mysqli_fetch_assoc($queryCount);
            ?>
            <h2> Cantidad de usuarios clientes: <?php echo $cantidad['idusuario']; ?></h2>
            <?php
            $sql_counta = "SELECT COUNT(*) AS idusuario FROM datos WHERE id_rol=0 and estado_cuenta=1";
            $queryCounta= mysqli_query($conex, ($sql_counta));
            $cantidada = mysqli_fetch_assoc($queryCounta);
            ?>
            <h2> Cantidad de usuarios clientes activos: <?php echo $cantidada['idusuario']; ?></h2>
            <?php
            $sql_countd = "SELECT COUNT(*) AS idusuario FROM datos WHERE id_rol=0 and estado_cuenta=0";
            $queryCountd= mysqli_query($conex, ($sql_countd));
            $cantidadd = mysqli_fetch_assoc($queryCountd);
            ?>
            <h2> Cantidad de usuarios clientes inactivos: <?php echo $cantidadd['idusuario']; ?></h2>
            <?php
            $sql_counte = "SELECT COUNT(*) AS idusuario FROM datos WHERE id_rol=1";
            $queryCounte= mysqli_query($conex, ($sql_counte));
            $cantidade = mysqli_fetch_assoc($queryCounte);
            ?>
            <h2> Cantidad de usuarios Entrenadores: <?php echo $cantidade['idusuario']; ?></h2>

        </div>

        <style>
            .izquierdan h2{
                margin:3%;
                color: white;
            }
            .izquierdan p{
                margin:3%;
                color: white;
            }
        </style>

        <div class="derechan" id="divsb">
            <div class="progreso">

                <?php
                $SQLDefault = "SELECT image FROM datos WHERE idusuario=1";
                $QUERYDefault = mysqli_query($conex, ($SQLDefault));
                $ROWDefault = mysqli_fetch_array($QUERYDefault);
                $DefaultIMG = $ROWDefault['image'];
                if ($image == 0) {
                ?>
                    <img src="data:image/jpg;base64,<?php echo base64_encode($DefaultIMG); ?>" class="imgp">
                <?php

                } else { ?>
                    <img src="data:image/jpg;base64,<?php echo base64_encode($image); ?>" class="imgp">
                <?php } ?>
                <br>
                <h1><?php echo $row['nombre'] ?></h1>
                <br>
            </div>
        </div>
</body>

</html>