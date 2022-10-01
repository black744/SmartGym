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
        $query1=mysqli_query($conex,"SELECT * FROM turnos WHERE identrenador='$idusuario' AND estado='1'");
        $result1= mysqli_num_rows($query1);
        if($result1 > 0){
        while ($data= mysqli_fetch_array($query1)){

?> 
            <div class="turno-a">
                <p> fecha del turno:<?php echo $data['fechahora'];?></p> <p> Horario:<?php echo $data['fechahora'];?></p> 
                <p> Entrenador:<?php echo $data['identrenador'];?></p>
                <p> Tipo de turno:<?php echo $data['modalidad'];?></p>
                <p> Direccion:g</p>
            </div>
            <?php
        }};?>
<<<<<<< HEAD
            
=======
        
>>>>>>> ba5c40068d37e4ac6323ab43d3d0821508e38934
		</div>
	  <div class="cont-calendario-seleccionar">
		  <div class="header2">
                <P>Aceptar turnos</P>
          </div>
            <?php
            $query2=mysqli_query($conex,"SELECT * FROM turnos WHERE identrenador='$idusuario' AND estado='0'");
            $result2= mysqli_num_rows($query2);
            while ($data1= mysqli_fetch_array($query2)){
                $idturno=$data1['idturno'];
                
            ?>
                <div class="turno-a">
                <P><br> <?php echo $idturno?>fecha y hora:<?php echo $data1['fechahora']?><br> entrenador:<?php echo $data1['identrenador']?><br> modalidad:<br> alumno:<br> </P>
                <form method="POST">
                    <input type="text" name="idturnoh" value="<?php echo $idturno;?>" hidden>
                <input type="submit" id="cancelarturno" name="cancelarturno" value="Cancelar">
                <input type="submit" id="aceptarturno" name="aceptarturno" value="Aceptar">
            </form>
            <?php
                if(isset($_POST['cancelarturno'])){
                    $idturno1= $_POST['idturnoh'];
                    $consultacancelar="UPDATE turnos SET estado='2' WHERE idturno='$idturno1'";
                    $resultadocanc = mysqli_query($conex, $consultacancelar);
                };
                if(isset($_POST['aceptarturno'])){
                    $idturno2= $_POST['idturnoh'];
                    $consultaaceptar="UPDATE turnos SET estado='1' WHERE idturno='$idturno2'";
                    $resultadoacept = mysqli_query($conex, $consultaaceptar);
                };?>
            </div>

            <?php
            };?>
             <div class="turno-a">
                <P>fecha:<br> hora:<br> entrenador:<br> modalidad:<br> alumno:<br> </P>
                <button class="boton"> Aceptar turno</button>
                
				<button class="boton"> Cancelar turno</button>
            </div>
             
		  
	</div>
  
</body>

</html>