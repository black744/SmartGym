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

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Perfil</title>

    <link rel="stylesheet" href="../css/estilousuario.css">
    <?php
    if ($idrol < 2){
        header("location: ../models/sessiondestroy.php");
    }else{
        phpAlert(   "Bienvenido $nusuario!\\n\\n Has accedido al panel de administracion"   );
    }
    ?>
</head>
        <div class="main_content">

            <div class="header">
                <?php
                echo "Welcome $nusuario to smart Smart-gym !! Have a nice day."
                ?>
            </div>
            <div class="info">
                <div>Esta es la pagina de usuario cliente</div>

            </div>
        </div>
    </div>
    <script src="../js/usuarios.js"></script>

</body>

</html>