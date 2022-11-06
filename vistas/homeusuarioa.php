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

        </div>

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