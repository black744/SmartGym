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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js" integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ==" crossorigin="anonymous"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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
            <div class="header" >
                <P>Turnos asignados</P>
            </div>
            <?php
            $sqlclasesasignadas = "SELECT clases_clientes.idclase, clases_clientes.usuario, clases.entrenador, clases.modalidad, clases.fecha, clases.hora FROM clases INNER JOIN clases_clientes ON clases.idclase = clases_clientes.idclase WHERE usuario = '$idusuario'";
            $queryclasesasignadas = mysqli_query($conex, $sqlclasesasignadas);
            while ($rowclasesasignadas = mysqli_fetch_array($queryclasesasignadas)) {
                $nturno = $rowclasesasignadas['idclase'];
            ?>
                <div class="turno-a">
                    <br>
                    <p> Fecha: <?php echo $rowclasesasignadas['fecha']; ?></p>
                    <p> Horario: <?php echo $rowclasesasignadas['hora']; ?></p>
                    <p> Entrenador: <?php echo $rowclasesasignadas['entrenador']; ?></p>
                    <p> Tipo de turno: <?php echo $rowclasesasignadas['modalidad']; ?></p>
                    <p> Direccion: av. siempre viva 777</p>
                    <br>
                </div>
            <?php
            } ?>
        </div>

        <div class="cont-calendario-seleccionar" id="divsb" >
            <div class="header2">
                <P>Unirse a Una clase</P>
            </div>
            <!-- <form action=""> -->
            <form class="cform" role="form" name="nD" id="nD" method="post">
                <select class="s-t" name="s-e" onchange="enviar(this.form)">
                    <option value=""> Seleccione entrenador </option>
                    <?php
                    $sqlentrenador = "SELECT * FROM `datos` WHERE id_rol=1";
                    $queryentrenador = mysqli_query($conex, $sqlentrenador);
                    while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                    ?>
                        <option value="<?php echo $nEntrenador['usuario']; ?>"> <?php echo $nEntrenador['nombre']; ?></option>

                    <?php
                    }
                    ?>

                </select>
                
            </form>

            <div id="mostrar" class="container col-12 row"></div>
                    
            <?php
            if (isset($_POST['enviarclase'])) {
                $idclase = $_POST['claseid'];

                $sqlcomp = "SELECT * FROM clases WHERE idclase='$idclase'";
                $querycomp = mysqli_query($conex, $sqlcomp);
                $filascomp = mysqli_fetch_array($querycomp);
                if ($idclase == 0) {
                    echo ("<script>window.location.href = '../vistas/turnosc.php';</script>");
                    echo ("<script>alert('Error, Accede a una clase valida');</script>");
                };
                if ($filascomp['cupos'] == 0) {
                    echo ("<script>alert('Error, La clase esta llena');</script>");
                    $sqlupdate = "UPDATE `clases` SET estado= 1 WHERE idclase='$idclase'";
                    $queryupdate = mysqli_query($conex, $sqlupdate);
                };
                $sqlcomp2 = "SELECT * FROM clases_clientes WHERE idclase='$idclase' AND usuario='$idusuario'";
                $querycomp2 = mysqli_query($conex, $sqlcomp2);
                $filascomp2 = mysqli_fetch_array($querycomp2);
                if ($filascomp2) {
                    echo ("<script>alert('Error, ya estas en esta clase');</script>");
                    echo ("<script>window.location.href = '../vistas/turnosc.php';</script>");
                } else {
                    if ($idclase == 0) {
                        echo ("<script>window.location.href = '../vistas/turnosc.php';</script>");
                        echo ("<script>alert('Error, Accede a una clase valida');</script>");
                    } else {
                        $sqlinsert = "INSERT INTO `clases_clientes`(`idclase`, `usuario`, `ai_id`) VALUES ('$idclase','$idusuario','')";
                        $sqlinsertquery = mysqli_query($conex, $sqlinsert);
                        $sqlupdate = "UPDATE `clases` SET cupos= cupos -1 WHERE idclase='$idclase'";
                        $queryupdate = mysqli_query($conex, $sqlupdate);
                    };
                };
            }; ?>
        </div>


        <script>
            function enviar(theForm) {
                $.ajax({
                    type: "POST",
                    url: "buscador.php",
                    data: $(theForm).serialize(),
                    success: function(data) {
                        $('#mostrar').html(data);
                    }
                });
                event.preventDefault();
            };
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    </div>
</body>


</html>