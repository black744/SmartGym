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
<html lang="en">

<head>
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
    <meta charset="UTF-8">

    <title>Rutina</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="../css/estilousuario.css">
    <link rel="stylesheet" href="../css/estilorutina.css">
    <link rel="stylesheet" href="../css/estilodiv.css">
</head>

<body>

    <div class="menu">

    <div class="carousel">
        <div class="carousel__item">Lunes 
            
        <div class="swiper swiper-hero">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <p>ejercicio  1</p>
        
        </div>
        <div class="swiper-slide">
            <p>ejercicio  2</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  3</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  4</p>
            
        </div>
        <div class="swiper-slide">
         <p>ejercicio  5</p>
         
        </div>
      </div>
      <!-- If we need pagination -->
      

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->
    </div>
</div>
        <div class="carousel__item">Martes

        <div class="swiper swiper-hero">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <p>ejercicio  1</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  2</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  3</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  4</p>
            
        </div>
        <div class="swiper-slide">
         <p>ejercicio  5</p>
         
        </div>
      </div>
      

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->
    </div>

        </div>
        <div class="carousel__item">Miercoles

        <div class="swiper swiper-hero">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <p>ejercicio  1</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  2</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  3</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  4</p>
            
        </div>
        <div class="swiper-slide">
         <p>ejercicio  5</p>
         
        </div>
      </div>
      

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->
    </div>

        </div>
        <div class="carousel__item">Jueves

        <div class="swiper swiper-hero">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <p>ejercicio  1</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  2</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  3</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  4</p>
            
        </div>
        <div class="swiper-slide">
         <p>ejercicio  5</p>
         
        </div>
      </div>
      

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->
    </div>

        </div>
        <div class="carousel__item">Viernes

        <div class="swiper swiper-hero">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <p>ejercicio  1</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  2</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  3</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  4</p>
            
        </div>
        <div class="swiper-slide">
         <p>ejercicio  5</p>
         
        </div>
      </div>
      

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->
    </div>

        </div>
        <div class="carousel__item">Sabado

        <div class="swiper swiper-hero">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <p>ejercicio  1</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  2</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  3</p>
            
        </div>
        <div class="swiper-slide">
            <p>ejercicio  4</p>
            
        </div>
        <div class="swiper-slide">
         <p>ejercicio  5</p>
         
        </div>
      </div>
      

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

    </div>

        </div>
    </div> 
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
      const swiper = new Swiper(".swiper-hero", {
        // Optional parameters
        // slidesPerView: "auto",
        // spaceBetween: 15,
        // slidesPerGroupAuto: true,

        direction: "horizontal",
        loop: true,
        // allowTouchMove: true,
        // effect: "cube",
        autoplay: {
          delay: 1000000,
          pauseOnMouseEnter: true,
          disableOnInteraction: false,
        },

        // If we need pagination
        pagination: {
          el: ".swiper-pagination",
          // type: "progressbar"
          clickable: true,
          // dynamicBullets: true
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        // And if we need scrollbar
        // scrollbar: {
        //   el: ".swiper-scrollbar",
        //   draggable: true,
        // },
      });
    </script>
</body>
<script src="../js/appdiv.js"></script>
</html>