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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/EstiloHomes.css">
    <link rel="stylesheet" type="text/css" href="../css/estiloturnos.css">
    <link rel="stylesheet" type="text/css" href="../css/EstiloGeneral.css">
    <title>Turnos</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js" integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ==" crossorigin="anonymous"></script>
    <script src="../js/appturnos.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#picker').dateTimePicker();
            $('#picker-no-time').dateTimePicker({
                showTime: false,
                dateFormat: 'DD/MM/YYYY',
                title: 'Select Date'
            });
        })
    </script>

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
    <div class="main_contentt">
            <div class="cont-turnos-asignados" id="divsb">
                <div class="header">
                    <P> Clases asignados</P>
                </div>
                <?php
                $query1 = mysqli_query($conex, "SELECT * from clases WHERE entrenador='$nusuario'");
                $result1 = mysqli_num_rows($query1);
                if ($result1 > 0) {
                    while ($data = mysqli_fetch_array($query1)) {


                ?>
                        <div class="turno-a">
                            <br>
                            <p> Fecha: <?php echo $data['fecha']; ?></p>
                            <p> Horario: <?php echo $data['hora']; ?></p>
                            <p> Modalidad: <?php echo $data['modalidad']; ?></p>
                            <p> Direccion: Miro 2126 (preguntar por silvia frujter)</p>
                        </div>
                <?php
                    }
                }; ?>

            </div>
            <div class="cont-calendario-seleccionar"  id="divsb">
                <div class="header2">
                    <P>Generar Clases</P>
                </div>
                <div class="turno-a">
                    <form class="tform" method="post">
                        <br>
                        <h3> Ingresar datos del turno para clase </h3>
                        <div style="width: fit-content;">
                            <div id="picker-no-time"></div>
                            <input name="f-c" type="hidden" id="result2" value="" />
                        </div>
                        <select class="sm" name="modalidad">
                            <option value="Vitual">Virtual</option>
                            <option value="Presencial">Presencial</option>
                        </select>

                        <br>

                        <input id="inputsn" class="ingreso-t" type="text" placeholder="Ingrese el horario de la clase (HR:MM)" name="h-c" required>
                        <br>

                        <input id="inputsn" class="ingreso-t" type="number" min="10" max="30" placeholder="Ingrese los cupos de la clase" name="c-c" required>
                        <br>
                        <input id="btnsn" class="botonguardado" type="submit" name="cargarclase">
                        <br>
                    </form>

                </div>
                <br>
                <br>
                <br>
                <?php
                if (isset($_POST['cargarclase'])) {
                    $fechaclase = $_POST['f-c'];
                    $modalidad = $_POST['modalidad'];
                    $horaclase = $_POST['h-c'];
                    $cuposclase = $_POST['c-c'];
                    $sqlclase = "INSERT INTO `clases`(`idclase`, `entrenador`, `modalidad`, `fecha`, `hora`, `cupos`, `estado`) VALUES ('','$nusuario','$modalidad','$fechaclase','$horaclase','$cuposclase','0')";
                    $queryclase = mysqli_query($conex, $sqlclase);
                }
                ?>
        </div>
    </div>
</div>
</body>

</html>