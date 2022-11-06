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
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Home Usuario</title>
    <link rel="stylesheet" href="../css/EstiloHomes.css">
    <link rel="stylesheet" href="../css/EstiloGeneral.css">
    <link rel="stylesheet" href="../css/estilocrearusuario.css">
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
    <div class="main_contentn">
        <div class="registrocu" id="divsb">
        <form class="formulario" action="../models/registrar.php" method="POST">
            <h2 class="create-account">Crear una cuenta a entrenador</h2>
            <input type="text" placeholder="Nombre" name="nombre" required>
            <input type="apellido" placeholder="Apellido" name="apellido" required>
            <input type="number" placeholder="DNI" name="dni" required pattern="[0-9]">
            <input type="Usuario" placeholder="Usuario" name="usuario" required>
            <input type="email" placeholder="Email" name="correo" required>
            <input type="password" placeholder="Contraseña" name="contraseña" required>
            <input type="number" placeholder="peso inicial" name="PA" required pattern="[0-9]">
            <select name="sexo" id="genero" class="sg">
                <option>Selecciona genero</option>
                <option value="1">Hombre</option>
                <option value="2">Mujer</option>
            </select>
            <input class="btn-r" type="submit" name="buttonreg" value="Registrar Usuario">
        </form>
        </div>
    </div>
</body>

</html>