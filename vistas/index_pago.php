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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo-index-pago.css">
    <link rel="stylesheet" href="../css/estilo-planes.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db50c9d526.js"></script>
    <title> Pagina de Inicio </title>
</head>

<body>
<script src="https://sdk.mercadopago.com/js/v2"></script>
        <div class="boton">
            <button><a href="../vistas/index.php"><i class="fa-solid fa-circle-arrow-left"></i></a></button>
        </div>
        <style>
            .boton{
                background: #000;
            }
        </style>
    <h1 class="texto-encabezado" id="Planes-3"> Selecciona una suscripción </h1>
    <div class="contenedorimagen">
    </div>
        </div>
        </div>
                    

                    <div class="container">
                        <div class="container2"></div>

                        <div class="box">
                            &nbsp;
                            <i class="fa-solid fa-laptop"></i>
                            <h2> Plan virtual</h2> <br>
                            <form id="virtual" name="virtual" method="post" action="../vistas/cant_items.php">
                                <input type="text" value="Virtual" name="plantype"hidden>
                                <input type="number" value="1500" name="unit_price"hidden>
                                <button type="submit" name="consultavirtual"><i class="fa-solid fa-circle-arrow-down"></i></button>
                            </form>
                            
                        </div>

                        <div class="box">
                            &nbsp;
                            <i class="fa-solid fa-arrow-right-arrow-left"></i>
                            <h2> Plan Mixto </h2><br>
                            <form id="mixto" name="mixto" method="post" action="../vistas/cant_items.php">
                                <input type="text" value="Mixto" name="plantype"hidden>
                                <input type="number" value="3000" name="unit_price"hidden>
                                <button type="submit" name="consultamixto"><i class="fa-solid fa-circle-arrow-down"></i></button>
                            </form>
                            
                            <br>
                            <br>
                            
                        </div>

                        <div class="box">
                            &nbsp;
                            <i class="fa-solid fa-dumbbell"></i>
                            <h2> Plan Presencial </h2> <br>
                            <form id="presencial" name="presencial" method="post" action="../vistas/cant_items.php">
                                <input type="text" value="Presencial" name="plantype"hidden>
                                <input type="number" value="1510" name="unit_price"hidden>
                                <button type="submit" name="consultapresencial"><i class="fa-solid fa-circle-arrow-down"></i></button>
                            </form>
                            
                            
                        </div>

                    </div>

                
        </div>
    </main>

</body>
</html>