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
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/estilousuario.css">
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
        <div class="main_content">
            
            <div class="info">
                <section class="seccion-perfil-usuario">
                    <div class="perfil-usuario-header">
                        <div class="perfil-usuario-portada">
                            <div class="perfil-usuario-avatar">  
                                <img src="data:image/jpg;base64,<?php echo base64_encode($image); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="perfil-usuario-body">
                        <div class="perfil-usuario-bio">
                            <?php
                            echo "<h4> $nusuario "  
                            ?>
                        </div>
                        <div class="perfil-usuario-footer">
                            <ul class="lista-datos">
                                <li> Nombre: <?php echo $nombre ?> </li> <br> 
                                <li> Apellido: <?php echo $apellido ?> </li> <br>
                                <li> Correo: <?php echo $correo ?> </li> <br>
                                <li> DNI: <?php echo $dni ?> </li> <br>
                            </ul>

                            <form action="editarinfo.php">
                                <button>Editar info</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

</body>

</html>