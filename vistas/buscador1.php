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
z-index:1;
top: 68vh;
left: 28vw;
margin-left: 3%;
height: 80px;
width: 470px;
margin-top:2vh;
font-size: 10px;
}
</style>

<script>
    const selec = document.querySelectorAll(".se")
    const testo = document.querySelectorAll(".s-p")
    console.log(btn);
    console.log(conteinerr);
    for (let i = 0; i < btn.length; i++) {
        btn[i].addEventListener("click", function() {
            if (conteinerr[i].style.display === "block") {
                conteinerr[i].style.display = "none"
            } else {
                conteinerr[i].style.display = "block"
            }
        });
    }
    </script>

<?php
$buscador = mysqli_query($conex, "SELECT * FROM ejercicios WHERE id_ejercicio LIKE LOWER('%" . $_POST["s-e"] . "%')");
$resultado = mysqli_fetch_assoc($buscador)
?>
<div class="s-p">
<h3><?php echo $resultado['descripcion']?></h3>
</div>