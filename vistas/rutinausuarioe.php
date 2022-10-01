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
$image= $row['image']
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <meta charset="UTF-8">

    <title>Rutina</title>

    <link rel="stylesheet" href="../css/estilousuario.css">
    <link rel="stylesheet" href="../css/estilorutina.css">
</head>

<body>

<div class="cont-t">
	<div class="menu">
			
			<button class="boton" name="Btn-crear-tabla" value="Btn-crear-tabla" id="Btn-crear-tabla"> Crear Rutina </button>
			<?php
			if(isset($_POST['Btn-crear-tabla'])){
				?>
				
				<?php
			}?>
			
	</div>
		
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
  

</body>

</html>