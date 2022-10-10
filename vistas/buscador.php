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
  .botong {
    width: 10vh;
    height: 5vh;
    border-radius: 40px;
    background-color: orangered;
    margin-left: 15vh;
    color: white;
  }
</style>
<form method="post">
  <select name="claseid" id="claseid">
    <?php

    $buscador = mysqli_query($conex, "SELECT * FROM clases WHERE entrenador LIKE LOWER('%" . $_POST["s-e"] . "%')");

    while ($resultado = mysqli_fetch_assoc($buscador)) {
      if ($resultado['cupos'] == 0) {
    ?>
        <option disabled value="<?php echo $resultado['idclase'] ?>">
          <p>Cupos: <?php echo $resultado['cupos'] ?> - Entrenador: <?php echo $resultado['entrenador'] ?> - <?php echo $resultado['fecha'] ?> - <?php echo $resultado['hora'] ?> - <?php echo $resultado['modalidad'] ?></p>
        </option>
      <?php
      } else {
      ?>
        <option value="<?php echo $resultado['idclase'] ?>">
          <p>Cupos: <?php echo $resultado['cupos'] ?> - Entrenador: <?php echo $resultado['entrenador'] ?> - <?php echo $resultado['fecha'] ?> - <?php echo $resultado['hora'] ?> - <?php echo $resultado['modalidad'] ?></p>
        </option>
    <?php }
    }; ?>
  </select>
  <input class="botong" type="submit" name="enviarclase">
</form>