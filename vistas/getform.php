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
  
                                if(isset($_POST['lunesej1boton'])){
                                  $lunesejercicio1series=$_POST['lunesserej1'];
                                  $lunesejercicio1repeticiones=$_POST['lunesrepej1'];
                                  $lunesejercicio1ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertLunesEj1 = "UPDATE `rutinas_lunes` SET `id_ej1`='$lunesejercicio1ejercicio',`series_ej1`='$lunesejercicio1series',`repeticiones_ej1`='$lunesejercicio1repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertLunesEj1 = mysqli_query($conex, $sqlinsertLunesEj1);

                                };
                                if(isset($_POST['lunesej2boton'])){
                                  $lunesejercicio2series=$_POST['lunesserej2'];
                                  $lunesejercicio2repeticiones=$_POST['lunesrepej2'];
                                  $lunesejercicio2ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertLunesEj2 = "UPDATE `rutinas_lunes` SET `id_ej2`='$lunesejercicio2ejercicio',`series_ej2`='$lunesejercicio2series',`repeticiones_ej2`='$lunesejercicio2repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertLunesEj2 = mysqli_query($conex, $sqlinsertLunesEj2);

                                };
                                if(isset($_POST['lunesej3boton'])){
                                  $lunesejercicio3series=$_POST['lunesserej3'];
                                  $lunesejercicio3repeticiones=$_POST['lunesrepej3'];
                                  $lunesejercicio3ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertLunesEj3 = "UPDATE `rutinas_lunes` SET `id_ej3`='$lunesejercicio3ejercicio',`series_ej3`='$lunesejercicio3series',`repeticiones_ej3`='$lunesejercicio3repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertLunesEj3 = mysqli_query($conex, $sqlinsertLunesEj3);

                                };
                                if(isset($_POST['lunesej4boton'])){
                                  $lunesejercicio4series=$_POST['lunesserej4'];
                                  $lunesejercicio4repeticiones=$_POST['lunesrepej4'];
                                  $lunesejercicio4ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertLunesEj4 = "UPDATE `rutinas_lunes` SET `id_ej4`='$lunesejercicio4ejercicio',`series_ej4`='$lunesejercicio4series',`repeticiones_ej4`='$lunesejercicio4repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertLunesEj4 = mysqli_query($conex, $sqlinsertLunesEj4);

                                };
                                if(isset($_POST['lunesej5boton'])){
                                  $lunesejercicio5series=$_POST['lunesserej5'];
                                  $lunesejercicio5repeticiones=$_POST['lunesrepej5'];
                                  $lunesejercicio5ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertLunesEj5 = "UPDATE `rutinas_lunes` SET `id_ej5`='$lunesejercicio5ejercicio',`series_ej5`='$lunesejercicio5series',`repeticiones_ej5`='$lunesejercicio5repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertLunesEj5 = mysqli_query($conex, $sqlinsertLunesEj5);

                                };
                                

                                ?>
                                <body onLoad="setTimeout('window.close()',100)">
                                