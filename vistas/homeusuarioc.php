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
$ultimopago = $row['ultimopago'];

include("../models/validacion_clientes.php");

$sql1 = "SELECT idusuario FROM rutinas_lunes WHERE idusuario='$idusuario'";
$query1 = mysqli_query($conex, $sql1);
$numrowsquery = mysqli_num_rows($query1);

if ($numrowsquery == 0) {
    $sqlinsertLunes = "INSERT INTO `rutinas_lunes`(`idusuario`, `id_ej1`, `series_ej1`, `repeticiones_ej1`, `id_ej2`, `series_ej2`, `repeticiones_ej2`, `id_ej3`, `series_ej3`, `repeticiones_ej3`, `id_ej4`, `series_ej4`, `repeticiones_ej4`, `id_ej5`, `series_ej5`, `repeticiones_ej5`) VALUES ('$idusuario','','','','','','','','','','','','','','','')";
    $sqlinsertMartes = "INSERT INTO `rutinas_martes`(`idusuario`, `id_ej1`, `series_ej1`, `repeticiones_ej1`, `id_ej2`, `series_ej2`, `repeticiones_ej2`, `id_ej3`, `series_ej3`, `repeticiones_ej3`, `id_ej4`, `series_ej4`, `repeticiones_ej4`, `id_ej5`, `series_ej5`, `repeticiones_ej5`) VALUES ('$idusuario','','','','','','','','','','','','','','','')";
    $sqlinsertMiercoles = "INSERT INTO `rutinas_miercoles`(`idusuario`, `id_ej1`, `series_ej1`, `repeticiones_ej1`, `id_ej2`, `series_ej2`, `repeticiones_ej2`, `id_ej3`, `series_ej3`, `repeticiones_ej3`, `id_ej4`, `series_ej4`, `repeticiones_ej4`, `id_ej5`, `series_ej5`, `repeticiones_ej5`) VALUES ('$idusuario','','','','','','','','','','','','','','','')";
    $sqlinsertJueves = "INSERT INTO `rutinas_jueves`(`idusuario`, `id_ej1`, `series_ej1`, `repeticiones_ej1`, `id_ej2`, `series_ej2`, `repeticiones_ej2`, `id_ej3`, `series_ej3`, `repeticiones_ej3`, `id_ej4`, `series_ej4`, `repeticiones_ej4`, `id_ej5`, `series_ej5`, `repeticiones_ej5`) VALUES ('$idusuario','','','','','','','','','','','','','','','')";
    $sqlinsertViernes = "INSERT INTO `rutinas_viernes`(`idusuario`, `id_ej1`, `series_ej1`, `repeticiones_ej1`, `id_ej2`, `series_ej2`, `repeticiones_ej2`, `id_ej3`, `series_ej3`, `repeticiones_ej3`, `id_ej4`, `series_ej4`, `repeticiones_ej4`, `id_ej5`, `series_ej5`, `repeticiones_ej5`) VALUES ('$idusuario','','','','','','','','','','','','','','','')";
    $sqlinsertSabado = "INSERT INTO `rutinas_sabado`(`idusuario`, `id_ej1`, `series_ej1`, `repeticiones_ej1`, `id_ej2`, `series_ej2`, `repeticiones_ej2`, `id_ej3`, `series_ej3`, `repeticiones_ej3`, `id_ej4`, `series_ej4`, `repeticiones_ej4`, `id_ej5`, `series_ej5`, `repeticiones_ej5`) VALUES ('$idusuario','','','','','','','','','','','','','','','')";

    $queryinsertLunes = mysqli_query($conex, $sqlinsertLunes);
    $queryinsertMartes = mysqli_query($conex, $sqlinsertMartes);
    $queryinsertMiercoles = mysqli_query($conex, $sqlinsertMiercoles);
    $queryinsertJueves = mysqli_query($conex, $sqlinsertJueves);
    $queryinsertViernes = mysqli_query($conex, $sqlinsertViernes);
    $queryinsertSabado = mysqli_query($conex, $sqlinsertSabado);
};
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Home Usuario</title>
    <script src="https://kit.fontawesome.com/db50c9d526.js"></script>
    <link rel="stylesheet" href="../css/EstiloHomes.css">
    <link rel="stylesheet" href="../css/EstiloGeneral.css">
    <script src="../js/appbotonnegro.js" type="text/javascript" defer></script>
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

    <div class="main_content">
            <div class="izquierda" id="divsb">
                <div class="turnoultimo">
                    <?php
                    $sqlper = "SELECT * FROM clases_clientes WHERE usuario=$idusuario";
                    $queryper = mysqli_query($conex, $sqlper);
                    $datap = mysqli_fetch_row($queryper);
                    if ($datap == 0) {
                        echo '<br><br><h1>No se incribio un turno para una clase</h1>'; 
                    } else {
                        $sqlProximoTurno = "SELECT clases.entrenador, clases.modalidad, clases.fecha, clases.cupos, clases.hora, clases_clientes.idclase, clases_clientes.usuario FROM clases INNER JOIN clases_clientes ON clases.idclase= clases_clientes.idclase WHERE usuario='$idusuario' ORDER BY fecha ASC";
                        $queryProximoTurno = mysqli_query($conex, $sqlProximoTurno);
                        $sqlquery = mysqli_fetch_row($queryProximoTurno);
                    ?>
                        <h1><br>Próximo Túrno</h1>
                        <br>
                        <p>Fecha: <?php echo $sqlquery[2] ?>
                        <p>Hora: <?php echo $sqlquery[4] ?>
                        <p>Entrenador: <?php echo $sqlquery[0] ?>
                        <p>Modalidad: <?php echo $sqlquery[1] ?>
                        <p>Ubicacion: Av viva la polenta 1976</p>
                        <br>
                    <?php

                    } ?> </p>



                </div>
            </div>


            <div class="homepago" id="divsb">
                
                <div class="pago">
                <br>
                    <p> Fecha del ultimo pago: <?php echo $ultimopago;?></p>
                    <p> Vencimiento: <?php echo date("y-m-d",strtotime($ultimopago."+ 30 days"));?></p>
                    <br>
                </div>
            </div>

            <div class="derecha" id="divsb">
                
                <div class="progreso">
                <img src="data:image/jpg;base64,<?php echo base64_encode($image); ?>" class="imgp">
                <br>
                    <h1><?php echo $row['nombre'] ?></h1>
                    <br>
                    <p>Peso actual: <?php echo $pesoactual?> </p>
                    <p>Peso ideal: <?php echo $pesoideal?> </p>
                    <p>Peso inicial: <?php echo $pesoinicial?> </p>
                </div>
                <div class="progresoform">
                    <form method="post">
                        <p>Ingrese peso actual</p>
                        <input class="orange" type="number" id="inputs" name="pesoactual" placeholder="Peso en kg">
                        <input id="btns" class="botonenviar" type="submit" name="enviar">
                    </form>
                    <?php
                    if (isset($_POST['enviarpesoactual'])) {
                        $NPactual = $_POST['pesoactual'];
                        $sqlNPA = "UPDATE datos SET pesoactual='$NPactual' WHERE idusuario='$idusuario'";
                        $queryNPA = mysqli_query($conex, $sqlNPA);
                    }
                    ?>
                    <form method="post">
                        <p>Ingrese peso ideal</p>
                        <input class="orange" id="inputs" type="number" name="pesoideal" placeholder="Peso en kg">
                        <input id="btns" class="botonenviar" type="submit" name="enviar">
                    </form>
                    <?php
                    if (isset($_POST['enviarpesoideal'])) {
                        $NPideal = $_POST['pesoideal'];
                        $sqlideal = "UPDATE datos SET pesoideal='$NPideal' WHERE idusuario='$idusuario'";
                        $queryideal = mysqli_query($conex, $sqlideal);
                    }
                    ?>
                </div>


            </div>
        </div>

    </div>

</body>

</html>