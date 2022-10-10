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
    <meta charset="UTF-8">
    <title>Rutina</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <link rel="stylesheet" href="../css/estilousuario.css">
    <link rel="stylesheet" href="../css/estilorutina.css">

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

<div class="cont-t">

<div class="container">

    <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Search..">
    <hr>

    <table class="table table-bordered order-table ">
        <thead>
        <tr>
            <th>Nombre y apellido</th>
            <th>DNI</th>
        </tr>
        </thead>
        <tr>
        <td>Ecopetrol</td>
        <td>Maria Perez</td>
        <td><button>crear rutina</button></td>
        </tr>

        <tr>
        <td>Ecocaca</td>
        <td>Maria P</td>
        <td><button>crear rutina</button></td>
        </tr>

        <tr>
        <td>Ecopedo</td>
        <td>Maria Perez</td>
        <td><button>crear rutina</button></td>
        </tr>

        <tr>
        <td>Ecopete</td>
        <td>Maria Perez</td>
        <td><button>crear rutina</button></td>
        </tr>
        
    </table>

    </div>

	<div class="menu">
			
		<table class="c-t-rutina">
			<tbody class="cuerpo-t">
			<tr class="fil">
			<td></td>
			<th class="dias">Lunes</th>
			<th class="dias">Martes</th>
			<th class="dias">Miercoles</th>
			<th class="dias">Jueves</th>
			<th class="dias">Viernes</th>
			<th class="dias">Sabado</th>
			<th class="dias">Domingo</th>
			</tr>
			

			<tr class="fil">
				<td class="ej"> <p>Ejercicio 1</p> </td>
	
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				
				</th>

				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
			</tr>
			<tr class="fil">
				<td class="ej"> <p>Ejercicio 2</p> </td>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
			
			</tr>
			<tr class="fil">
				<td class="ej"> <p>Ejercicio 3</p> </td>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				

			</tr>
			<tr class="fil">
				<td class="ej"> <p>Ejercicio 4</p> </td>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
			
			</tr>
			<tr class="fil">
				<td class="ej"> <p>Ejercicio 5</p> </td>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
				<th class="ce">
                <a href="ejercicios.php"> <button class="boton">  Añadir ejercicio </button> </a>
				<br>
				<br>
				<button class="boton"> Eliminar ejercicio</button>
				</th>
				
			
			</tr>
		</tbody>
		</table>
	</div>
	</div>
</body>

</html>