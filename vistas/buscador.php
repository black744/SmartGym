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
$plantype= $row['plantype'];

?>
<style>
  .botong {
    position: relative;
    left: -20%;
    width: 30%;
    height: 5vh;
    border-radius: 15px;
    background-color: #101010;
    margin-left: 15vh;
    color: white;
  }

  .botong:hover{
    cursor: pointer;
    border:2px solid white;
  }
</style>
<form method="post">
  <select name="claseid" id="claseid">
    <?php
    if($plantype != "Mixto"){
    $buscador = mysqli_query($conex, "SELECT * FROM clases WHERE modalidad='$plantype' AND entrenador LIKE LOWER('%" . $_POST["s-e"] . "%')");

    while ($resultado = mysqli_fetch_assoc($buscador)) {
      if($resultado == 0){
        ?>
        <p>No posee clases</p>
        <?php
}
      if ($resultado['cupos'] == 0 or $resultado['estado'] == 1 ) {
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
    };
    }else{
      $buscador = mysqli_query($conex, "SELECT * FROM clases WHERE entrenador LIKE LOWER('%" . $_POST["s-e"] . "%')");

      while ($resultado = mysqli_fetch_assoc($buscador)) {
        if ($resultado['cupos'] == 0 or $resultado['estado'] == 1 ) {
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
      };
    } ?>
  </select>
  <input class="botong" type="submit" name="enviarclase">
</form>