<?php

use function PHPSTORM_META\sql_injection_subst;

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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../css/estilorutina.css">
  <link rel="stylesheet" href="../css/estilodiv.css">
  <link rel="stylesheet" href="../css/EstiloGeneral.css">
</head>
<style>
  .dataview {
    background: #fb4c0d;
    left: 5%;
    position: relative;
    height: 90%;
    width: 90%;
    border-radius: 15px;
    overflow-y: scroll;
  }

  .dataview::-webkit-scrollbar {
    position: relative;
    margin-right: 2vw;
    width: 8px;
    height: 12px;
  }
.dataview::-webkit-scrollbar-button {
    width: 12px;
    height: 12px;
  }
  .dataview::-webkit-scrollbar-thumb {
    background: #000000;
    border: 1px solid #ffffff;
    border-radius: 100px;
  }
  .dataview::-webkit-scrollbar-thumb:hover {
    background: #fb4c0d;
  }
  .dataview::-webkit-scrollbar-thumb:active {
    background: #404040;
  }
  .dataview::-webkit-scrollbar-track {
    background: #000000;
    border: 0px none #ffffff;
    border-radius: 50px;
  }
  .dataview::-webkit-scrollbar-track:hover {
    background: #000000;
  }
  .dataview::-webkit-scrollbar-track:active {
    background: #000000;
  }
  .dataview::-webkit-scrollbar-corner {
    background: transparent;
  }

</style>

<body>


  <div class="main_content">
    <div class="carousel">
      <div class="carousel__item" id="divsb">Lunes

        <div class="swiper swiper-hero">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <p>Ejercicio 1</p>
              <div class="dataview">
                <?php
                $sqlmostrarlunesej1 = "SELECT rutinas_lunes.idusuario, rutinas_lunes.series_ej1, rutinas_lunes.repeticiones_ej1, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_lunes
              INNER JOIN ejercicios ON rutinas_lunes.id_ej1 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarlunesej1 = mysqli_query($conex, ($sqlmostrarlunesej1));
                $rowlunesej1 = mysqli_fetch_array($querymostrarlunesej1);
                if ($rowlunesej1 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowlunesej1['nombre']; ?></h5>
                  <hr>
                  <p class="cseje">Cantidad de Series: <?php echo $rowlunesej1['series_ej1']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowlunesej1['repeticiones_ej1']; ?></p><br>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowlunesej1['descripcion']; ?></p>
                  
                <?php
                } else {
                ?>
                  <p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

              <style>
                .neje {
                  font-size: 2.5rem;
                  max-width: 20%;
                  margin-top: 2%;
                  margin-bottom: 3%;
                  margin-left: 8%;
                  margin-right: 0%;
                  color: #fff;
                }

                .deje {
                  font-size: 2rem;
                  max-width: 80%;
                  max-height: 25%;
                  margin: 8%;
                  color: #fff;
                }

                .cseje {
                  font-size: 2rem;
                  color: #fff;
                }

                .creje {
                  font-size: 2rem;
                  margin: 1%;
                  color: #fff;
                }
              </style>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 2</p>
              <div class="dataview">
                <?php
                $sqlmostrarlunesej2 = "SELECT rutinas_lunes.idusuario, rutinas_lunes.series_ej2, rutinas_lunes.repeticiones_ej2, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_lunes
              INNER JOIN ejercicios ON rutinas_lunes.id_ej2 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarlunesej2 = mysqli_query($conex, ($sqlmostrarlunesej2));
                $rowlunesej2 = mysqli_fetch_array($querymostrarlunesej2);
                if ($rowlunesej2 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowlunesej2['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowlunesej2['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowlunesej2['series_ej2']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowlunesej2['repeticiones_ej2']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 3</p>
              <div class="dataview">
                <?php
                $sqlmostrarlunesej3 = "SELECT rutinas_lunes.idusuario, rutinas_lunes.series_ej3, rutinas_lunes.repeticiones_ej3, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_lunes
              INNER JOIN ejercicios ON rutinas_lunes.id_ej3 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarlunesej3 = mysqli_query($conex, ($sqlmostrarlunesej3));
                $rowlunesej3 = mysqli_fetch_array($querymostrarlunesej3);
                if ($rowlunesej3 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowlunesej3['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowlunesej3['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowlunesej3['series_ej3']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowlunesej3['repeticiones_ej3']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 4</p>
              <div class="dataview">
                <?php
                $sqlmostrarlunesej4 = "SELECT rutinas_lunes.idusuario, rutinas_lunes.series_ej4, rutinas_lunes.repeticiones_ej4, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_lunes
              INNER JOIN ejercicios ON rutinas_lunes.id_ej4 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarlunesej4 = mysqli_query($conex, ($sqlmostrarlunesej4));
                $rowlunesej4 = mysqli_fetch_array($querymostrarlunesej4);
                if ($rowlunesej4 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowlunesej4['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowlunesej4['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowlunesej4['series_ej4']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowlunesej4['repeticiones_ej4']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>
            </div>
            <div class="swiper-slide">
              <p>Ejercicio 5</p>
              <div class="dataview">
                <?php
                $sqlmostrarlunesej5 = "SELECT rutinas_lunes.idusuario, rutinas_lunes.series_ej5, rutinas_lunes.repeticiones_ej5, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_lunes
              INNER JOIN ejercicios ON rutinas_lunes.id_ej5 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarlunesej5 = mysqli_query($conex, ($sqlmostrarlunesej5));
                $rowlunesej5 = mysqli_fetch_array($querymostrarlunesej5);
                if ($rowlunesej5 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowlunesej5['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowlunesej5['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowlunesej5['series_ej5']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowlunesej5['repeticiones_ej5']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

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
      <div class="carousel__item" id="divsb">Martes

        <div class="swiper swiper-hero">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <p>Ejercicio 1</p>
              <div class="dataview">
                <?php
                $sqlmostrarmartesej1 = "SELECT rutinas_martes.idusuario, rutinas_martes.series_ej1, rutinas_martes.repeticiones_ej1, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_martes
              INNER JOIN ejercicios ON rutinas_martes.id_ej1 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarmartesej1 = mysqli_query($conex, ($sqlmostrarmartesej1));
                $rowmartesej1 = mysqli_fetch_array($querymostrarmartesej1);
                if ($rowmartesej1 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowmartesej1['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowmartesej1['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowmartesej1['series_ej1']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowmartesej1['repeticiones_ej1']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>
            </div>
            <div class="swiper-slide">
              <p>Ejercicio 2</p>
              <div class="dataview">
                <?php
                $sqlmostrarmartesej2 = "SELECT rutinas_martes.idusuario, rutinas_martes.series_ej2, rutinas_martes.repeticiones_ej2, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_martes
              INNER JOIN ejercicios ON rutinas_martes.id_ej2 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarmartesej2 = mysqli_query($conex, ($sqlmostrarmartesej2));
                $rowmartesej2 = mysqli_fetch_array($querymostrarmartesej2);
                if ($rowmartesej2 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowmartesej2['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowmartesej2['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowmartesej2['series_ej2']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowmartesej2['repeticiones_ej2']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 3</p>
              <div class="dataview">
                <?php
                $sqlmostrarmartesej3 = "SELECT rutinas_martes.idusuario, rutinas_martes.series_ej3, rutinas_martes.repeticiones_ej3, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_martes
              INNER JOIN ejercicios ON rutinas_martes.id_ej3 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarmartesej3 = mysqli_query($conex, ($sqlmostrarmartesej3));
                $rowmartesej3 = mysqli_fetch_array($querymostrarmartesej3);
                if ($rowmartesej3 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowmartesej3['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowmartesej3['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowmartesej3['series_ej3']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowmartesej3['repeticiones_ej3']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 4</p>
              <div class="dataview">
                <?php
                $sqlmostrarmartesej4 = "SELECT rutinas_martes.idusuario, rutinas_martes.series_ej4, rutinas_martes.repeticiones_ej4, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_martes
              INNER JOIN ejercicios ON rutinas_martes.id_ej4 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarmartesej4 = mysqli_query($conex, ($sqlmostrarmartesej4));
                $rowmartesej4 = mysqli_fetch_array($querymostrarmartesej4);
                if ($rowmartesej4 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowmartesej4['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowmartesej4['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowmartesej4['series_ej4']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowmartesej4['repeticiones_ej4']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 5</p>
              <div class="dataview">
                <?php
                $sqlmostrarmartesej5 = "SELECT rutinas_martes.idusuario, rutinas_martes.series_ej5, rutinas_martes.repeticiones_ej5, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_martes
              INNER JOIN ejercicios ON rutinas_martes.id_ej5 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarmartesej5 = mysqli_query($conex, ($sqlmostrarmartesej5));
                $rowmartesej5 = mysqli_fetch_array($querymostrarmartesej5);
                if ($rowmartesej5 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowmartesej5['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowmartesej5['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowmartesej5['series_ej5']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowmartesej5['repeticiones_ej5']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
          </div>


          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

          <!-- If we need scrollbar -->
          <!-- <div class="swiper-scrollbar"></div> -->
        </div>

      </div>
      <div class="carousel__item" id="divsb">Miercoles

        <div class="swiper swiper-hero">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <p>Ejercicio 1</p>
              <div class="dataview">
                <?php
                $sqlmostrarmiercolesej1 = "SELECT rutinas_miercoles.idusuario, rutinas_miercoles.series_ej1, rutinas_miercoles.repeticiones_ej1, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_miercoles
              INNER JOIN ejercicios ON rutinas_miercoles.id_ej1 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarmiercolesej1 = mysqli_query($conex, ($sqlmostrarmiercolesej1));
                $rowmiercolesej1 = mysqli_fetch_array($querymostrarmiercolesej1);
                if ($rowmiercolesej1 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowmiercolesej1['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowmiercolesej1['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowmiercolesej1['series_ej1']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowmiercolesej1['repeticiones_ej1']; ?></p>
                <?php
                } else {
                ?>
                <br>  <p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 2</p>
              <div class="dataview">
                <?php
                $sqlmostrarmiercolesej2 = "SELECT rutinas_miercoles.idusuario, rutinas_miercoles.series_ej2, rutinas_miercoles.repeticiones_ej2, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_miercoles
              INNER JOIN ejercicios ON rutinas_miercoles.id_ej2 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarmiercolesej2 = mysqli_query($conex, ($sqlmostrarmiercolesej2));
                $rowmiercolesej2 = mysqli_fetch_array($querymostrarmiercolesej2);
                if ($rowmiercolesej2 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowmiercolesej2['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowmiercolesej2['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowmiercolesej2['series_ej2']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowmiercolesej2['repeticiones_ej2']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>


            </div>
            <div class="swiper-slide">
              <p>Ejercicio 3</p>
              <div class="dataview">
                <?php
                $sqlmostrarmiercolesej3 = "SELECT rutinas_miercoles.idusuario, rutinas_miercoles.series_ej3, rutinas_miercoles.repeticiones_ej3, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_miercoles
              INNER JOIN ejercicios ON rutinas_miercoles.id_ej3 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarmiercolesej3 = mysqli_query($conex, ($sqlmostrarmiercolesej3));
                $rowmiercolesej3 = mysqli_fetch_array($querymostrarmiercolesej3);
                if ($rowmiercolesej3 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowmiercolesej3['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowmiercolesej3['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowmiercolesej3['series_ej3']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowmiercolesej3['repeticiones_ej3']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 4</p>
              <div class="dataview">
                <?php
                $sqlmostrarmiercolesej4 = "SELECT rutinas_miercoles.idusuario, rutinas_miercoles.series_ej4, rutinas_miercoles.repeticiones_ej4, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_miercoles
              INNER JOIN ejercicios ON rutinas_miercoles.id_ej4 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarmiercolesej4 = mysqli_query($conex, ($sqlmostrarmiercolesej4));
                $rowmiercolesej4 = mysqli_fetch_array($querymostrarmiercolesej4);
                if ($rowmiercolesej4 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowmiercolesej4['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio:<br><br> <?php echo $rowmiercolesej4['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowmiercolesej4['series_ej4']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowmiercolesej4['repeticiones_ej4']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 5</p>
              <div class="dataview">
                <?php
                $sqlmostrarmiercolesej5 = "SELECT rutinas_miercoles.idusuario, rutinas_miercoles.series_ej5, rutinas_miercoles.repeticiones_ej5, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_miercoles
              INNER JOIN ejercicios ON rutinas_miercoles.id_ej5 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarmiercolesej5 = mysqli_query($conex, ($sqlmostrarmiercolesej5));
                $rowmiercolesej5 = mysqli_fetch_array($querymostrarmiercolesej5);
                if ($rowmiercolesej5 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowmiercolesej5['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowmiercolesej5['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowmiercolesej5['series_ej5']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowmiercolesej5['repeticiones_ej5']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
          </div>


          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

          <!-- If we need scrollbar -->
          <!-- <div class="swiper-scrollbar"></div> -->
        </div>

      </div>
      <div class="carousel__item" id="divsb">Jueves

        <div class="swiper swiper-hero">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <p>Ejercicio 1</p>
              <div class="dataview">
                <?php
                $sqlmostrarjuevesej1 = "SELECT rutinas_jueves.idusuario, rutinas_jueves.series_ej1, rutinas_jueves.repeticiones_ej1, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_jueves
              INNER JOIN ejercicios ON rutinas_jueves.id_ej1 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarjuevesej1 = mysqli_query($conex, ($sqlmostrarjuevesej1));
                $rowjuevesej1 = mysqli_fetch_array($querymostrarjuevesej1);
                if ($rowjuevesej1 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowjuevesej1['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio:<br><br> <?php echo $rowjuevesej1['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowjuevesej1['series_ej1']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowjuevesej1['repeticiones_ej1']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 2</p>
              <div class="dataview">
                <?php
                $sqlmostrarjuevesej2 = "SELECT rutinas_jueves.idusuario, rutinas_jueves.series_ej2, rutinas_jueves.repeticiones_ej2, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_jueves
              INNER JOIN ejercicios ON rutinas_jueves.id_ej2 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarjuevesej2 = mysqli_query($conex, ($sqlmostrarjuevesej2));
                $rowjuevesej2 = mysqli_fetch_array($querymostrarjuevesej2);
                if ($rowjuevesej2 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowjuevesej2['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowjuevesej2['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowjuevesej2['series_ej2']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowjuevesej2['repeticiones_ej2']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 3</p>
              <div class="dataview">
                <?php
                $sqlmostrarjuevesej3 = "SELECT rutinas_jueves.idusuario, rutinas_jueves.series_ej3, rutinas_jueves.repeticiones_ej3, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_jueves
              INNER JOIN ejercicios ON rutinas_jueves.id_ej3 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarjuevesej3 = mysqli_query($conex, ($sqlmostrarjuevesej3));
                $rowjuevesej3 = mysqli_fetch_array($querymostrarjuevesej3);
                if ($rowjuevesej3 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowjuevesej3['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowjuevesej3['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowjuevesej3['series_ej3']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowjuevesej3['repeticiones_ej3']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 4</p>
              <div class="dataview">
                <?php
                $sqlmostrarjuevesej4 = "SELECT rutinas_jueves.idusuario, rutinas_jueves.series_ej4, rutinas_jueves.repeticiones_ej4, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_jueves
              INNER JOIN ejercicios ON rutinas_jueves.id_ej4 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarjuevesej4 = mysqli_query($conex, ($sqlmostrarjuevesej4));
                $rowjuevesej4 = mysqli_fetch_array($querymostrarjuevesej4);
                if ($rowjuevesej4 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowjuevesej4['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowjuevesej4['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowjuevesej4['series_ej4']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowjuevesej4['repeticiones_ej4']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 5</p>
              <div class="dataview">
                <?php
                $sqlmostrarjuevesej5 = "SELECT rutinas_jueves.idusuario, rutinas_jueves.series_ej5, rutinas_jueves.repeticiones_ej5, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_jueves
              INNER JOIN ejercicios ON rutinas_jueves.id_ej5 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarjuevesej5 = mysqli_query($conex, ($sqlmostrarjuevesej5));
                $rowjuevesej5 = mysqli_fetch_array($querymostrarjuevesej5);
                if ($rowjuevesej5 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowjuevesej5['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowjuevesej5['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowjuevesej5['series_ej5']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowjuevesej5['repeticiones_ej5']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
          </div>


          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

          <!-- If we need scrollbar -->
          <!-- <div class="swiper-scrollbar"></div> -->
        </div>

      </div>
      <div class="carousel__item" id="divsb">Viernes

        <div class="swiper swiper-hero">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <p>Ejercicio 1</p>
              <div class="dataview">
                <?php
                $sqlmostrarviernesej1 = "SELECT rutinas_viernes.idusuario, rutinas_viernes.series_ej1, rutinas_viernes.repeticiones_ej1, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_viernes
              INNER JOIN ejercicios ON rutinas_viernes.id_ej1 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarviernesej1 = mysqli_query($conex, ($sqlmostrarviernesej1));
                $rowviernesej1 = mysqli_fetch_array($querymostrarviernesej1);
                if ($rowviernesej1 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowviernesej1['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowviernesej1['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowviernesej1['series_ej1']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowviernesej1['repeticiones_ej1']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 2</p>
              <div class="dataview">
                <?php
                $sqlmostrarviernesej2 = "SELECT rutinas_viernes.idusuario, rutinas_viernes.series_ej2, rutinas_viernes.repeticiones_ej2, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_viernes
              INNER JOIN ejercicios ON rutinas_viernes.id_ej2 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarviernesej2 = mysqli_query($conex, ($sqlmostrarviernesej2));
                $rowviernesej2 = mysqli_fetch_array($querymostrarviernesej2);
                if ($rowviernesej2 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowviernesej2['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowviernesej2['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowviernesej2['series_ej2']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowviernesej2['repeticiones_ej2']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 3</p>
              <div class="dataview">
                <?php
                $sqlmostrarviernesej3 = "SELECT rutinas_viernes.idusuario, rutinas_viernes.series_ej3, rutinas_viernes.repeticiones_ej3, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_viernes
              INNER JOIN ejercicios ON rutinas_viernes.id_ej3 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarviernesej3 = mysqli_query($conex, ($sqlmostrarviernesej3));
                $rowviernesej3 = mysqli_fetch_array($querymostrarviernesej3);
                if ($rowviernesej3 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowviernesej3['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowviernesej3['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowviernesej3['series_ej3']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowviernesej3['repeticiones_ej3']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 4</p>
              <div class="dataview">
                <?php
                $sqlmostrarviernesej4 = "SELECT rutinas_viernes.idusuario, rutinas_viernes.series_ej4, rutinas_viernes.repeticiones_ej4, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_viernes
              INNER JOIN ejercicios ON rutinas_viernes.id_ej4 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarviernesej4 = mysqli_query($conex, ($sqlmostrarviernesej4));
                $rowviernesej4 = mysqli_fetch_array($querymostrarviernesej4);
                if ($rowviernesej4 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowviernesej4['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowviernesej4['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowviernesej4['series_ej4']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowviernesej4['repeticiones_ej4']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 5</p>
              <div class="dataview">
                <?php
                $sqlmostrarviernesej5 = "SELECT rutinas_viernes.idusuario, rutinas_viernes.series_ej5, rutinas_viernes.repeticiones_ej5, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_viernes
              INNER JOIN ejercicios ON rutinas_viernes.id_ej5 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarviernesej5 = mysqli_query($conex, ($sqlmostrarviernesej5));
                $rowviernesej5 = mysqli_fetch_array($querymostrarviernesej5);
                if ($rowviernesej5 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowviernesej5['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowviernesej5['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowviernesej5['series_ej5']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowviernesej5['repeticiones_ej5']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>
            </div>
          </div>


          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

          <!-- If we need scrollbar -->
          <!-- <div class="swiper-scrollbar"></div> -->
        </div>

      </div>
      <div class="carousel__item" id="divsb">Sabado

        <div class="swiper swiper-hero">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <p>Ejercicio 1</p>
              <div class="dataview">
                <?php
                $sqlmostrarsabadoej1 = "SELECT rutinas_sabado.idusuario, rutinas_sabado.series_ej1, rutinas_sabado.repeticiones_ej1, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_sabado
              INNER JOIN ejercicios ON rutinas_sabado.id_ej1 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarsabadoej1 = mysqli_query($conex, ($sqlmostrarsabadoej1));
                $rowsabadoej1 = mysqli_fetch_array($querymostrarsabadoej1);
                if ($rowsabadoej1 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowsabadoej1['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowsabadoej1['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowsabadoej1['series_ej1']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowsabadoej1['repeticiones_ej1']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 2</p>
              <div class="dataview">
                <?php
                $sqlmostrarsabadoej2 = "SELECT rutinas_sabado.idusuario, rutinas_sabado.series_ej2, rutinas_sabado.repeticiones_ej2, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_sabado
              INNER JOIN ejercicios ON rutinas_sabado.id_ej2 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarsabadoej2 = mysqli_query($conex, ($sqlmostrarsabadoej2));
                $rowsabadoej2 = mysqli_fetch_array($querymostrarsabadoej2);
                if ($rowsabadoej2 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowsabadoej2['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowsabadoej2['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowsabadoej2['series_ej2']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowsabadoej2['repeticiones_ej2']; ?></p>
                <?php
                } else {
                ?>
                  <p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 3</p>
              <div class="dataview">
                <?php
                $sqlmostrarsabadoej3 = "SELECT rutinas_sabado.idusuario, rutinas_sabado.series_ej3, rutinas_sabado.repeticiones_ej3, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_sabado
              INNER JOIN ejercicios ON rutinas_sabado.id_ej3 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarsabadoej3 = mysqli_query($conex, ($sqlmostrarsabadoej3));
                $rowsabadoej3 = mysqli_fetch_array($querymostrarsabadoej3);
                if ($rowsabadoej3 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowsabadoej3['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowsabadoej3['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowsabadoej3['series_ej3']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowsabadoej3['repeticiones_ej3']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 4</p>
              <div class="dataview">
                <?php
                $sqlmostrarsabadoej4 = "SELECT rutinas_sabado.idusuario, rutinas_sabado.series_ej4, rutinas_sabado.repeticiones_ej4, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_sabado
              INNER JOIN ejercicios ON rutinas_sabado.id_ej4 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarsabadoej4 = mysqli_query($conex, ($sqlmostrarsabadoej4));
                $rowsabadoej4 = mysqli_fetch_array($querymostrarsabadoej4);
                if ($rowsabadoej4 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowsabadoej4['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowsabadoej4['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowsabadoej4['series_ej4']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowsabadoej4['repeticiones_ej4']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

            </div>
            <div class="swiper-slide">
              <p>Ejercicio 5</p>
              <div class="dataview">
                <?php
                $sqlmostrarsabadoej5 = "SELECT rutinas_sabado.idusuario, rutinas_sabado.series_ej5, rutinas_sabado.repeticiones_ej5, ejercicios.nombre, ejercicios.descripcion
              FROM rutinas_sabado
              INNER JOIN ejercicios ON rutinas_sabado.id_ej5 = ejercicios.id_ejercicio WHERE idusuario='$idusuario'";
                $querymostrarsabadoej5 = mysqli_query($conex, ($sqlmostrarsabadoej5));
                $rowsabadoej5 = mysqli_fetch_array($querymostrarsabadoej5);
                if ($rowsabadoej5 != 0) {
                ?>
                  <h5 class="neje"><br><?php echo $rowsabadoej5['nombre']; ?></h5>
                  <hr>
                  <p class="deje">Descripcion del Ejercicio: <br><br> <?php echo $rowsabadoej5['descripcion']; ?></p>
                  <p class="cseje">Cantidad de Series: <?php echo $rowsabadoej5['series_ej5']; ?></p>
                  <p class="creje">Cantidad de Repeticiones: <?php echo $rowsabadoej5['repeticiones_ej5']; ?></p>
                <?php
                } else {
                ?>
                  <br><p>No hay ejercicios cargados</p>
                <?php
                };
                ?>
              </div>

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