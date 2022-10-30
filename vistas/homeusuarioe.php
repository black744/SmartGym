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

    <div class="izq" id="divsb">
        <style>
            h1{
                margin: 3%;
                color: #fff;
            }
        </style>
        <h1>Turnos proximos</h1>

        <div class="turno-prox">
            <?php
            $sqlper = "SELECT * FROM clases WHERE entrenador='$nusuario'";
            $queryper = mysqli_query($conex, $sqlper);
            while ($datap = mysqli_fetch_array($queryper)) {
            ?>
                <br>
                <p>Clase N° <?php echo $datap['idclase'] ?></p>
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
            background: #fb5c0d;

        }

        .turno-prox p {
            margin: 2%;
            color: #fff;
        }

        hr {
            margin: 2%;
            border: 1px solid #303030;
        }
    </style>

    <div class="der" id="divsb" >
        <h1> datos semanales</h1>
        <hr>
        <div class="caruselo">
            <div class="citem">Content #1</div>
            <div class="citem">Content #2</div>
            <div class="citem">Content #3</div>
        </div>
    </div>

    <style>
        .caruselo {
            position: relative;
        }

        .citem {
            height: 53vh;
            margin: 3vh;
            border-radius: 15px;
            background: #fb4c0d;
            padding: 1em;
            font-weight: bold;
            font-size: 2em;
            color: #ffffff;
            display: none;
        }

        .citem--selected {
            display: block;
        }

        .caruselo__nav {
            width: 100%;
            padding: 20px 0;
            position: absolute;
            bottom: 0;
            left: 0;
            text-align: center;
        }

        .caruselo__button {
            width: 4vh;
            height: 4vh;
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5%;
            margin: 0 5px;
            cursor: pointer;
        }

        .caruselo__button--selected {
            background: rgba(255, 255, 255, 0.5);
        }
    </style>
</body>
<script>
        document.querySelectorAll(".caruselo").forEach((carousel) => {
            const items = carousel.querySelectorAll(".citem");
            const buttonsHtml = Array.from(items, () => {
                return `<span class="caruselo__button"></span>`;
            });

            carousel.insertAdjacentHTML(
                "beforeend",
                `
		<div class="caruselo__nav">
			${buttonsHtml.join("")}
		</div>
	`
            );

            const buttons = carousel.querySelectorAll(".caruselo__button");

            buttons.forEach((button, i) => {
                button.addEventListener("click", () => {
                    // un-select all the items
                    items.forEach((item) =>
                        item.classList.remove("citem--selected")
                    );
                    buttons.forEach((button) =>
                        button.classList.remove("caruselo__button--selected")
                    );

                    items[i].classList.add("citem--selected");
                    button.classList.add("caruselo__button--selected");
                });
            });

            // Select the first item on page load
            items[0].classList.add("citem--selected");
            buttons[0].classList.add("caruselo__button--selected");
        });
    </script>
</html>