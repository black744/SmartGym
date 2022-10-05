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
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilousuario.css">
    <link rel="stylesheet" type="text/css" href="../css/estiloturnos.css">
    <title>Turnos</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js" integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ==" crossorigin="anonymous"></script>

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
    switch($idrol){
        case 0: 
            include ("sidebars/sidebarc.php");
            break;
        case 1: 
            include ("sidebars/sidebare.php");
            break;
        case 2: 
            include ("sidebars/sidebara.php");
            break;
        default:
            die("Error");
            break;
} 
?>

<body>

    <div class="cont-body-turnos">
        <div class="cont-turnos-asignados">
            <div class="header">
                <P>Turnos asignados</P>
            </div>
            <!-- <form action="">-->
            <div class="turno-a">
                <br>
                <p> fecha del turno: </p> <p> Horario: </p> 
                <p> Entrenador: </p>
                <p> Tipo de turno: </p>
                <p> Direccion: </p>

            </div>
            <div class="turno-a">
                <br>
                <p> fecha del turno: </p> <p> Horario: </p> 
                <p> Entrenador: </p>
                <p> Tipo de turno: </p>
                <p> Direccion: </p>

            </div>
            <!-- </form> -->
        </div>
        <div class="cont-calendario-seleccionar">
            <div class="header2">
                <P>Crear turno</P>
            </div>
            <!-- <form action=""> -->
            <button> Modificar turno</button>
            <button> Cancelar turno</button>
            <form method="post">
            <select name="s-e" id="s-e">
                <?php 
                $sqlentrenador="SELECT * FROM `datos` WHERE id_rol=1";
                $queryentrenador=mysqli_query($conex,$sqlentrenador);
                while($nEntrenador = mysqli_fetch_array($queryentrenador)){
                    ?>
				<option value="<?php echo $nEntrenador['idusuario'];?>"> <?php echo $nEntrenador['nombre'];?></option>
                <?php
                }
                ?>
			</select>
            <select name="s-m" id="s-m">
				<option value="1">Modalidad presencial </option>
				<option value="2">Modalidad virtual </option>
			</select>
            <div>
                <div style="width: 250px; margin: 50px auto;">
                <div id="picker-no-time"></div><input type="hidden" id="result" value="" /></div>
                
            </div>
            <select class="hora" name="time" id="hora">
                    <option value="1">9:00 AM</option>
                    <option value="2">10:00 AM</option>
                    <option value="3">11:00 AM</option>
                    <option value="4">12:00 AM</option>
                    <option value="5">13:00 PM</option>
                    <option value="6">14:00 PM</option>
                    <option value="7">15:00 PM</option>
                    <option value="8">16:00 PM</option>
                    <option value="9">17:00 PM</option>
                    <option value="10">18:00 PM</option>
                    <option value="11">19:00 PM</option>
                    <option value="12">20:00 PM</option>
                    <option value="13">21:00 PM</option>
                </select>
            
                <script type="text/javascript" src="../js/appturnos.js"></script>
            <input class="botonguardado" type="submit" value="enviar" name="enviar">
            </form>
            <?php
            if(isset($_POST['enviar'])){
                $ID_E = $_POST['s-e'];
                $MOD = $_POST['s-m'];
                $DATE = $_POST['result'];
                $sql1=mysqli_query($conex, "SELECT usuario FROM datos WHERE idusuario='$ID_E'");
                $query1=mysqli_fetch_array($sql1);
                $nombreent=$query1['usuario'];
                $TurnoQuery = "INSERT INTO `turnos`(`idturno`, `idusuario`, `identrenador`, `modalidad`, `fechahora`, `estado`, `usuario_cliente`, `usuario_entrenador`) VALUES ('','$idusuario','$ID_E','$MOD','$DATE', '0', '$nusuario', '$nombreent')";
                $queryT=mysqli_query($conex, $TurnoQuery);
            }
            ?>
        </div>
    </div>
    
</body>

</html>