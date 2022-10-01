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
            <?php
        $query1=mysqli_query($conex,"SELECT * FROM datos WHERE identrenador='$idusuario'");
        $result1= mysqli_num_rows($query1);
        if($result1 > 0){
        while ($data= mysqli_fetch_array($query1)){
?> 
            <div class="turno-a">
                <p> fecha del turno: </p> <p> Horario: </p> 
                <p> Entrenador: </p>
                <p> Tipo de turno: </p>
                <p> Direccion: </p>
            </div>
            <?php
        }?>
            <div class="turno-a">
                <p> fecha del turno: </p> <p> Horario: </p> 
                <p> Cliente: </p>
                <p> Tipo de turno: </p>
                <p> Direccion: </p>

            </div>
            
		</div>
	  <div class="cont-calendario-seleccionar">
		  <div class="header2">
                <P>Aceptar turnos</P>
          </div>
            
            <div class="turno-a">
                <P>fecha:<br> hora:<br> entrenador:<br> modalidad:<br> alumno:<br> </P>
                <button class="boton"> Aceptar turno</button>
                
				<button class="boton"> Cancelar turno</button>
            </div>

             <div class="turno-a">
                <P>fecha:<br> hora:<br> entrenador:<br> modalidad:<br> alumno:<br> </P>
                <button class="boton"> Aceptar turno</button>
                
				<button class="boton"> Cancelar turno</button>
            </div>
             
		  
	</div>
  
</body>

</html>