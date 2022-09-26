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
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilousuario.css">
    <title>Progreso</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="progresocliente.css">
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
    <header>
        <div class="titulo">
        ESPACIO DE RUTINAS
        </div>
    </header>
    <br>
    <br>

    <div class="rutinas">
        <p>Rutinas:</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, quo adipisci natus asperiores quidem facilis exercitationem qui deserunt? Harum iure iusto libero ipsum alias doloribus tempore vero repudiandae ad consequatur.</p>
    </div>
    <div class="progreso">
    <p>Progreso actual:</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, iusto doloremque voluptatum rem pariatur beatae aliquam atque vel minima eaque id repellendus, laborum consectetur quod ipsa harum animi praesentium. Tenetur!</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, iusto doloremque voluptatum rem pariatur beatae aliquam atque vel minima eaque id repellendus, laborum consectetur quod ipsa harum animi praesentium. Tenetur!</p>
</div>
</main>
</body>
<footer>
    <nav class="navbar">
        <div class="contenedor">
            <a href=""><img src="mail.png.png" width="50" ></a>
            <br>
            <br>
            <a href=""><img src="casita2.png" width="50"></a>
        </div>
        <div class="logo">
        <img src="logo.png" width="50">
        </div>
        
    </nav>
</footer>
</html>