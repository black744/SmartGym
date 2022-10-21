<?php include("../db.php");
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

?>
<style>
.s-p{
position: relative;
margin-left: 3%;
height: 80px;
width: 470px;
margin-top:2vh;
font-size: 10px;
}
</style>
<?php
$buscador = mysqli_query($conex, "SELECT * FROM ejercicios WHERE id_ejercicio LIKE LOWER('%" . $_POST["s-e"] . "%')");
$resultado = mysqli_fetch_assoc($buscador)
?>
<div class="s-p">
<h3><?php echo $resultado['descripcion']?></h3>
</div>