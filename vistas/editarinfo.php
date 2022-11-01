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
include("../models/validacion_clientes.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/EstiloPerfil.css" rel="stylesheet">
    <link href="../css/EstiloHomes.css" rel="stylesheet">
    <link href="../css/EstiloGeneral.css" rel="stylesheet">
    <title>Actualizar Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
    
    <div class="info">
        <section class="seccion-perfil-usuario">

            <div class="perfil-usuario-header" id="divsb">
                <div class="perfil-usuario-portada">
                    <div class="perfil-usuario-avatar">

                    <?php 
                                               $SQLDefault="SELECT image FROM datos WHERE idusuario=1";
                                               $QUERYDefault=mysqli_query($conex, ($SQLDefault));
                                               $ROWDefault = mysqli_fetch_array($QUERYDefault);
                                               $DefaultIMG=$ROWDefault['image'];
                    if ($image == 0){
                           ?>
                           <img src="data:image/jpg;base64,<?php echo base64_encode($DefaultIMG); ?>">
                           <?php

                    }else{?>
                <img src="data:image/jpg;base64,<?php echo base64_encode($image); ?>">
                    <?php } ?>
                        <form class="form" action="../models/uploadimage.php" method="post" enctype="multipart/form-data">
                            <input type="file" id="boton-av" name="image" />
                            <input type="submit" id="boton-av" value="UPLOAD" name="submit" />
                        </form>

                    </div>
                </div>
            </div>

            <div class="perfil-usuario-body" id="divsb">
                <div class="perfil-usuario-bio">
                    <input type="hidden" name="usuario" value="<?php echo $row['usuario']  ?>">
                </div>
                <div class="perfil-usuario-footer">
                    <form method="POST" action="../models/update.php">
                        <ul class="lista-datos">
                            <p>Nombre:</p><input id="inputsn" type="text" class="inputinfo" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>"> 
                            <p>Apellido:</p><input id="inputsn" type="text" class="inputinfo" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']  ?>"> 
                            <p>Apodo:</p><input id="inputsn" type="text" class="inputinfo" name="usuario" placeholder="Usuario" value="<?php echo $row['usuario']  ?>"> 
                            <p>D.N.I:</p><input id="inputsn" type="number" class="inputinfo" name="dni" placeholder="D.N.I" value="<?php echo $row['dni']  ?>"> 
                        </ul>
                        <ul class="lista-datos">
                            <p>Contraseña:</p><input id="inputsn" type="password" class="inputinfo" name="contraseña" placeholder="Contraseña" value="<?php echo $row['contraseña']  ?>"> 
                            <!--<input type="text" class="inputinfo" name="dom" placeholder="domicilio" value="<?php echo $row['dom']  ?>">
                                <input type="date" class="inputinfo" name="fnac" placeholder="fecha de nacimiento" value="<?php echo $row['fnac']  ?>"> -->
                        </ul>
                        <button id="btnsn" type="submit" name="buttonedit" value="Editar">finalizar edicion</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

</body>

</html>