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
    <div class="main_contente">
        <div class="izquierdae" id="divsb">
            <style>
                h1 {
                    margin: 3%;
                    color: #fff;
                }
            </style>
            <h1> Proximas clases </h1>
            <hr>
            <div class="turno-prox">
                <?php
                $sqlper = "SELECT * FROM clases WHERE entrenador='$nusuario'";
                $queryper = mysqli_query($conex, $sqlper);
                while ($datap = mysqli_fetch_array($queryper)) {
                ?>
                    <br>
                    <h2>Clase N° <?php echo $datap['idclase'] ?></h2>
                    <p>Modalidad: <?php echo $datap['modalidad'] ?></p>
                    <p>Fecha: <?php echo $datap['fecha'] ?></p>
                    <p>hora: <?php echo $datap['hora'] ?></p>
                    <p>cantidad de personas: <?php echo $datap['cupos'] ?></p>
                    <hr>
                <?php



                }; ?>
            </div>
        </div>

        <style>
            .turno-prox {
                position: relative;
                height: fit-content;
                width: 90%;
                margin: 5%;
                border-radius: 15px;
                background: #fb4c0d;

            }

            .turno-prox p {
                font-size: 22px;
                margin: 2%;
                color: #fff;
            }

            .turno-prox h2 {
                font-size: 24px;
                margin: 2%;
                color: #fff;
            }

            hr {
                margin: 2%;
                border: 1px solid #303030;
            }
        </style>

        <div class="derechae" id="divsb">
            <div class="progreso">
                <?php
                $SQLDefault = 'CALL getImage()';
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
    </div>
</body>

</html>