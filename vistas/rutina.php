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
if(isset($_POST['enviarid'])){
  $iduselect = $_POST['iduselect'];
}

include("../models/validacion_clientes.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/estilousuario.css">
    <link rel="stylesheet" href="../css/estilorutina.css">
    <link rel="stylesheet" href="../css/estilodiv.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"
        integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ=="
        crossorigin="anonymous"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



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
<style>
    .none{
        color: white;
    }
    </style>
<body>
    <div class="menu">
    <div class="none" id="mostrarinfo">
                                    </div>
        <div class="carousel">

            <div class="carousel__item">Lunes
                <div class="swiper swiper-hero">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>ejercicio 1</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                                <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                        <select class="se" name="s-e" onchange="enviar(this.form)">
                                            <?php
                    $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                    $queryentrenador = mysqli_query($conex, $sqlentrenador);
                    while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                    ?>
                                            <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                                <p><?php echo $nEntrenador['nombre']?></p>
                                            </option>

                                            <?php
                    }   
                    ?>
                                        </select>
                                    
                                    <input type="text" name="iduselectr" value="<?php echo $iduselect?>">
                                    <input name="lunesserej1" class="ingreso2" type="number">
                                    <input name="lunesrepej1" class="ingreso2" type="number">
                                    <button class="llamars-p">mostrar descripcion</button>
                                
                                <input class="btn-g" name="lunesej1boton" type="submit" value="Guardar ejercicio">
                                </form>          

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 2</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                        <select class="se" name="s-e" onchange="enviar(this.form)">
                                            <?php
                    $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                    $queryentrenador = mysqli_query($conex, $sqlentrenador);
                    while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                    ?>
                                            <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                                <p><?php echo $nEntrenador['nombre']?></p>
                                            </option>

                                            <?php
                    }
                    ?>
                                        </select>
                                    <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                    <input name="lunesserej2" class="ingreso2" type="number">
                                    <input name="lunesrepej2" class="ingreso2" type="number">
                                
                                <input class="btn-g" name="lunesej2boton" type="submit" value="Guardar ejercicio">
                                </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 3</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="lunesserej3" class="ingreso2" type="number">
                                <input name="lunesrepej3" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="lunesej3boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 4</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="lunesserej4" class="ingreso2" type="number">
                                <input name="lunesrepej4" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="lunesej4boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 5</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="lunesserej5" class="ingreso2" type="number">
                                <input name="lunesrepej5" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="lunesej5boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

            <div class="carousel__item">Martes
                <div class="swiper swiper-hero">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>ejercicio 1</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="martesserej1" class="ingreso2" type="number">
                                <input name="martesrepej1" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="martesej1boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 2</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="martesserej2" class="ingreso2" type="number">
                                <input name="martesrepej2" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="martesej2boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 3</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="martesserej3" class="ingreso2" type="number">
                                <input name="martesrepej3" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="martesej3boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 4</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="martesserej4" class="ingreso2" type="number">
                                <input name="martesrepej4" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="martesej4boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 5</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="martesserej5" class="ingreso2" type="number">
                                <input name="martesrepej5" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="martesej5boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="carousel__item">Miercoles
                <div class="swiper swiper-hero">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>ejercicio 1</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="miercolesserej1" class="ingreso2" type="number">
                                <input name="miercolesrepej1" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="miercolesej1boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 2</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="miercolesserej2" class="ingreso2" type="number">
                                <input name="miercolesrepej2" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="miercolesej2boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 3</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="miercolesserej3" class="ingreso2" type="number">
                                <input name="miercolesrepej3" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="miercolesej3boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 4</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="miercolesserej4" class="ingreso2" type="number">
                                <input name="miercolesrepej4" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="miercolesej4boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 5</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="miercolesserej5" class="ingreso2" type="number">
                                <input name="miercolesrepej5" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="miercolesej5boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="carousel__item">Jueves
                <div class="swiper swiper-hero">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>ejercicio 1</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="juevesserej1" class="ingreso2" type="number">
                                <input name="juevesrepej1" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="juevesej1boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 2</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="juevesserej2" class="ingreso2" type="number">
                                <input name="juevesrepej2" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="juevesej2boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 3</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="juevesserej3" class="ingreso2" type="number">
                                <input name="juevesrepej3" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="juevesej3boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 4</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="juevesserej4" class="ingreso2" type="number">
                                <input name="juevesrepej4" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="juevesej4boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 5</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="juevesserej5" class="ingreso2" type="number">
                                <input name="juevesrepej5" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="juevesej5boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="carousel__item">Viernes
                <div class="swiper swiper-hero">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>ejercicio 1</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="viernesserej1" class="ingreso2" type="number">
                                <input name="viernesrepej1" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="viernesej1boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 2</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="viernesserej2" class="ingreso2" type="number">
                                <input name="viernesrepej2" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="viernesej2boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 3</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="viernesserej3" class="ingreso2" type="number">
                                <input name="viernesrepej3" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="viernesej3boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 4</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="viernesserej4" class="ingreso2" type="number">
                                <input name="viernesrepej4" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="viernesej4boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 5</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="viernesserej5" class="ingreso2" type="number">
                                <input name="viernesrepej5" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="viernesej5boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="carousel__item">Sabado
                <div class="swiper swiper-hero">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>ejercicio 1</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="sabadoserej1" class="ingreso2" type="number">
                                <input name="sabadorepej1" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="sabadoej1boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 2</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="sabadoserej2" class="ingreso2" type="number">
                                <input name="sabadorepej2" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="sabadoej2boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 3</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="sabadoserej3" class="ingreso2" type="number">
                                <input name="sabadorepej3" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="sabadoej3boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 4</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="sabadoserej4" class="ingreso2" type="number">
                                <input name="sabadorepej4" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="sabadoej4boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>ejercicio 5</p>
                            <button class="btn-m" id="mostra"><i class="fa-solid fa-plus"></i></button>
                            <div class="sobretodo" id="oculto">
                            <form method="post" action="getform.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=600,height=300');">
                                    
                                    <select class="se" name="s-e" onchange="enviar(this.form)">
                                        <?php
                $sqlentrenador = "SELECT nombre,id_ejercicio FROM ejercicios";
                $queryentrenador = mysqli_query($conex, $sqlentrenador);
                while ($nEntrenador = mysqli_fetch_array($queryentrenador)) {
                ?>
                                        <option value="<?php echo $nEntrenador['id_ejercicio'] ?>">
                                            <p><?php echo $nEntrenador['nombre']?></p>
                                        </option>

                                        <?php
                }
                ?>
                                    </select>
                                <input type="text" name="iduselectr" value="<?php echo $iduselect?>" hidden>
                                <input name="sabadoserej5" class="ingreso2" type="number">
                                <input name="sabadorepej5" class="ingreso2" type="number">
                            
                            <input class="btn-g" name="sabadoej5boton" type="submit" value="Guardar ejercicio">
                            </form>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>

    </div>
    <script>
    function enviar(theForm) {
        $.ajax({
            type: "POST",
            url: "buscador1.php",
            data: $(theForm).serialize(),
            success: function(data) {
                $('#mostrarinfo').html(data);
            }
        });
        event.preventDefault();
    };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
    const swiper = new Swiper(".swiper-hero", {
        direction: "horizontal",
        loop: true,
        autoplay: {
            delay: 100000000,
            pauseOnMouseEnter: true,
            disableOnInteraction: false,
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });
    </script>

    <script>
    const btn = document.querySelectorAll(".btn-m")
    const conteinerr = document.querySelectorAll(".sobretodo")
    console.log(btn);
    console.log(conteinerr);
    for (let i = 0; i < btn.length; i++) {
        btn[i].addEventListener("click", function() {
            if (conteinerr[i].style.display === "block") {
                conteinerr[i].style.display = "none"
            } else {
                conteinerr[i].style.display = "block"
            }
        });
    }
    </script>

</body>
<script src="../js/appdiv.js"></script>

</html>