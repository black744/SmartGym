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
                                //lunes
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
                                
                                //martes

                                if(isset($_POST['martesej1boton'])){
                                  $martesejercicio1series=$_POST['martesserej1'];
                                  $martesejercicio1repeticiones=$_POST['martesrepej1'];
                                  $martesejercicio1ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertmartesEj1 = "UPDATE `rutinas_martes` SET `id_ej1`='$martesejercicio1ejercicio',`series_ej1`='$martesejercicio1series',`repeticiones_ej1`='$martesejercicio1repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertmartesEj1 = mysqli_query($conex, $sqlinsertmartesEj1);

                                };
                                if(isset($_POST['martesej2boton'])){
                                  $martesejercicio2series=$_POST['martesserej2'];
                                  $martesejercicio2repeticiones=$_POST['martesrepej2'];
                                  $martesejercicio2ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertmartesEj2 = "UPDATE `rutinas_martes` SET `id_ej2`='$martesejercicio2ejercicio',`series_ej2`='$martesejercicio2series',`repeticiones_ej2`='$martesejercicio2repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertmartesEj2 = mysqli_query($conex, $sqlinsertmartesEj2);

                                };
                                if(isset($_POST['martesej3boton'])){
                                  $martesejercicio3series=$_POST['martesserej3'];
                                  $martesejercicio3repeticiones=$_POST['martesrepej3'];
                                  $martesejercicio3ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertmartesEj3 = "UPDATE `rutinas_martes` SET `id_ej3`='$martesejercicio3ejercicio',`series_ej3`='$martesejercicio3series',`repeticiones_ej3`='$martesejercicio3repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertmartesEj3 = mysqli_query($conex, $sqlinsertmartesEj3);

                                };
                                if(isset($_POST['martesej4boton'])){
                                  $martesejercicio4series=$_POST['martesserej4'];
                                  $martesejercicio4repeticiones=$_POST['martesrepej4'];
                                  $martesejercicio4ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertmartesEj4 = "UPDATE `rutinas_martes` SET `id_ej4`='$martesejercicio4ejercicio',`series_ej4`='$martesejercicio4series',`repeticiones_ej4`='$martesejercicio4repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertmartesEj4 = mysqli_query($conex, $sqlinsertmartesEj4);

                                };
                                if(isset($_POST['martesej5boton'])){
                                  $martesejercicio5series=$_POST['martesserej5'];
                                  $martesejercicio5repeticiones=$_POST['martesrepej5'];
                                  $martesejercicio5ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertmartesEj5 = "UPDATE `rutinas_martes` SET `id_ej5`='$martesejercicio5ejercicio',`series_ej5`='$martesejercicio5series',`repeticiones_ej5`='$martesejercicio5repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertmartesEj5 = mysqli_query($conex, $sqlinsertmartesEj5);

                                };

                                //miercoles

                                if(isset($_POST['miercolesej1boton'])){
                                  $miercolesejercicio1series=$_POST['miercolesserej1'];
                                  $miercolesejercicio1repeticiones=$_POST['miercolesrepej1'];
                                  $miercolesejercicio1ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertmiercolesEj1 = "UPDATE `rutinas_miercoles` SET `id_ej1`='$miercolesejercicio1ejercicio',`series_ej1`='$miercolesejercicio1series',`repeticiones_ej1`='$miercolesejercicio1repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertmiercolesEj1 = mysqli_query($conex, $sqlinsertmiercolesEj1);

                                };
                                if(isset($_POST['miercolesej2boton'])){
                                  $miercolesejercicio2series=$_POST['miercolesserej2'];
                                  $miercolesejercicio2repeticiones=$_POST['miercolesrepej2'];
                                  $miercolesejercicio2ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertmiercolesEj2 = "UPDATE `rutinas_miercoles` SET `id_ej2`='$miercolesejercicio2ejercicio',`series_ej2`='$miercolesejercicio2series',`repeticiones_ej2`='$miercolesejercicio2repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertmiercolesEj2 = mysqli_query($conex, $sqlinsertmiercolesEj2);

                                };
                                if(isset($_POST['miercolesej3boton'])){
                                  $miercolesejercicio3series=$_POST['miercolesserej3'];
                                  $miercolesejercicio3repeticiones=$_POST['miercolesrepej3'];
                                  $miercolesejercicio3ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertmiercolesEj3 = "UPDATE `rutinas_miercoles` SET `id_ej3`='$miercolesejercicio3ejercicio',`series_ej3`='$miercolesejercicio3series',`repeticiones_ej3`='$miercolesejercicio3repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertmiercolesEj3 = mysqli_query($conex, $sqlinsertmiercolesEj3);

                                };
                                if(isset($_POST['miercolesej4boton'])){
                                  $miercolesejercicio4series=$_POST['miercolesserej4'];
                                  $miercolesejercicio4repeticiones=$_POST['miercolesrepej4'];
                                  $miercolesejercicio4ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertmiercolesEj4 = "UPDATE `rutinas_miercoles` SET `id_ej4`='$miercolesejercicio4ejercicio',`series_ej4`='$miercolesejercicio4series',`repeticiones_ej4`='$miercolesejercicio4repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertmiercolesEj4 = mysqli_query($conex, $sqlinsertmiercolesEj4);

                                };
                                if(isset($_POST['miercolesej5boton'])){
                                  $miercolesejercicio5series=$_POST['miercolesserej5'];
                                  $miercolesejercicio5repeticiones=$_POST['miercolesrepej5'];
                                  $miercolesejercicio5ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertmiercolesEj5 = "UPDATE `rutinas_miercoles` SET `id_ej5`='$miercolesejercicio5ejercicio',`series_ej5`='$miercolesejercicio5series',`repeticiones_ej5`='$miercolesejercicio5repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertmiercolesEj5 = mysqli_query($conex, $sqlinsertmiercolesEj5);

                                };
                                
                                //jueves

                                if(isset($_POST['juevesej1boton'])){
                                  $juevesejercicio1series=$_POST['juevesserej1'];
                                  $juevesejercicio1repeticiones=$_POST['juevesrepej1'];
                                  $juevesejercicio1ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertjuevesEj1 = "UPDATE `rutinas_jueves` SET `id_ej1`='$juevesejercicio1ejercicio',`series_ej1`='$juevesejercicio1series',`repeticiones_ej1`='$juevesejercicio1repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertjuevesEj1 = mysqli_query($conex, $sqlinsertjuevesEj1);

                                };
                                if(isset($_POST['juevesej2boton'])){
                                  $juevesejercicio2series=$_POST['juevesserej2'];
                                  $juevesejercicio2repeticiones=$_POST['juevesrepej2'];
                                  $juevesejercicio2ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertjuevesEj2 = "UPDATE `rutinas_jueves` SET `id_ej2`='$juevesejercicio2ejercicio',`series_ej2`='$juevesejercicio2series',`repeticiones_ej2`='$juevesejercicio2repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertjuevesEj2 = mysqli_query($conex, $sqlinsertjuevesEj2);

                                };
                                if(isset($_POST['juevesej3boton'])){
                                  $juevesejercicio3series=$_POST['juevesserej3'];
                                  $juevesejercicio3repeticiones=$_POST['juevesrepej3'];
                                  $juevesejercicio3ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertjuevesEj3 = "UPDATE `rutinas_jueves` SET `id_ej3`='$juevesejercicio3ejercicio',`series_ej3`='$juevesejercicio3series',`repeticiones_ej3`='$juevesejercicio3repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertjuevesEj3 = mysqli_query($conex, $sqlinsertjuevesEj3);

                                };
                                if(isset($_POST['juevesej4boton'])){
                                  $juevesejercicio4series=$_POST['juevesserej4'];
                                  $juevesejercicio4repeticiones=$_POST['juevesrepej4'];
                                  $juevesejercicio4ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertjuevesEj4 = "UPDATE `rutinas_jueves` SET `id_ej4`='$juevesejercicio4ejercicio',`series_ej4`='$juevesejercicio4series',`repeticiones_ej4`='$juevesejercicio4repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertjuevesEj4 = mysqli_query($conex, $sqlinsertjuevesEj4);

                                };
                                if(isset($_POST['juevesej5boton'])){
                                  $juevesejercicio5series=$_POST['juevesserej5'];
                                  $juevesejercicio5repeticiones=$_POST['miercolesrepej5'];
                                  $juevesejercicio5ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertjuevesEj5 = "UPDATE `rutinas_jueves` SET `id_ej5`='$juevesejercicio5ejercicio',`series_ej5`='$juevesejercicio5series',`repeticiones_ej5`='$juevesejercicio5repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertjuevesEj5 = mysqli_query($conex, $sqlinsertjuevesEj5);

                                };

                                //viernes

                                if(isset($_POST['viernesej1boton'])){
                                  $viernesejercicio1series=$_POST['viernesserej1'];
                                  $viernesejercicio1repeticiones=$_POST['viernesrepej1'];
                                  $viernesejercicio1ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertviernesEj1 = "UPDATE `rutinas_viernes` SET `id_ej1`='$viernesejercicio1ejercicio',`series_ej1`='$viernesejercicio1series',`repeticiones_ej1`='$viernesejercicio1repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertviernesEj1 = mysqli_query($conex, $sqlinsertviernesEj1);

                                };
                                if(isset($_POST['viernesej2boton'])){
                                  $viernesejercicio2series=$_POST['viernesserej2'];
                                  $viernesejercicio2repeticiones=$_POST['viernesrepej2'];
                                  $viernesejercicio2ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertviernesEj2 = "UPDATE `rutinas_viernes` SET `id_ej2`='$viernesejercicio2ejercicio',`series_ej2`='$viernesejercicio2series',`repeticiones_ej2`='$viernesejercicio2repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertviernesEj2 = mysqli_query($conex, $sqlinsertviernesEj2);

                                };
                                if(isset($_POST['viernesej3boton'])){
                                  $viernesejercicio3series=$_POST['viernesserej3'];
                                  $viernesejercicio3repeticiones=$_POST['viernesrepej3'];
                                  $viernesejercicio3ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertviernesEj3 = "UPDATE `rutinas_viernes` SET `id_ej3`='$viernesejercicio3ejercicio',`series_ej3`='$viernesejercicio3series',`repeticiones_ej3`='$viernesejercicio3repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertviernesEj3 = mysqli_query($conex, $sqlinsertviernesEj3);

                                };
                                if(isset($_POST['viernesej4boton'])){
                                  $viernesejercicio4series=$_POST['viernesserej4'];
                                  $viernesejercicio4repeticiones=$_POST['viernesrepej4'];
                                  $viernesejercicio4ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertviernesEj4 = "UPDATE `rutinas_viernes` SET `id_ej4`='$viernesejercicio4ejercicio',`series_ej4`='$viernesejercicio4series',`repeticiones_ej4`='$viernesejercicio4repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertviernesEj4 = mysqli_query($conex, $sqlinsertviernesEj4);

                                };
                                if(isset($_POST['viernesej5boton'])){
                                  $viernesejercicio5series=$_POST['viernesserej5'];
                                  $viernesejercicio5repeticiones=$_POST['viernesrepej5'];
                                  $viernesejercicio5ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertviernesEj5 = "UPDATE `rutinas_viernes` SET `id_ej5`='$viernesejercicio5ejercicio',`series_ej5`='$viernesejercicio5series',`repeticiones_ej5`='$viernesejercicio5repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertviernesEj5 = mysqli_query($conex, $sqlinsertviernesEj5);

                                };
                                
                                //sabado

                                if(isset($_POST['sabadoej1boton'])){
                                  $sabadoejercicio1series=$_POST['sabadoserej1'];
                                  $sabadoejercicio1repeticiones=$_POST['sabadorepej1'];
                                  $sabadoejercicio1ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertsabadoEj1 = "UPDATE `rutinas_sabado` SET `id_ej1`='$sabadoejercicio1ejercicio',`series_ej1`='$sabadoejercicio1series',`repeticiones_ej1`='$sabadoejercicio1repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertsabadoEj1 = mysqli_query($conex, $sqlinsertsabadoEj1);

                                };
                                if(isset($_POST['sabadoej2boton'])){
                                  $sabadoejercicio2series=$_POST['sabadoserej2'];
                                  $sabadoejercicio2repeticiones=$_POST['sabadorepej2'];
                                  $sabadoejercicio2ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertsabadoEj2 = "UPDATE `rutinas_sabado` SET `id_ej2`='$sabadoejercicio2ejercicio',`series_ej2`='$sabadoejercicio2series',`repeticiones_ej2`='$sabadoejercicio2repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertsabadoEj2 = mysqli_query($conex, $sqlinsertsabadoEj2);

                                };
                                if(isset($_POST['sabadoej3boton'])){
                                  $sabadoejercicio3series=$_POST['sabadoserej3'];
                                  $sabadoejercicio3repeticiones=$_POST['sabadorepej3'];
                                  $sabadoejercicio3ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertsabadoEj3 = "UPDATE `rutinas_sabado` SET `id_ej3`='$sabadoejercicio3ejercicio',`series_ej3`='$sabadoejercicio3series',`repeticiones_ej3`='$sabadoejercicio3repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertsabadoEj3 = mysqli_query($conex, $sqlinsertsabadoEj3);

                                };
                                if(isset($_POST['sabadoej4boton'])){
                                  $sabadoejercicio4series=$_POST['sabadoserej4'];
                                  $sabadoejercicio4repeticiones=$_POST['sabadorepej4'];
                                  $sabadoejercicio4ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertsabadoEj4 = "UPDATE `rutinas_sabado` SET `id_ej4`='$sabadoejercicio4ejercicio',`series_ej4`='$sabadoejercicio4series',`repeticiones_ej4`='$sabadoejercicio4repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertsabadoEj4 = mysqli_query($conex, $sqlinsertsabadoEj4);

                                };
                                if(isset($_POST['sabadoej5boton'])){
                                  $sabadoejercicio5series=$_POST['sabadoserej5'];
                                  $sabadoejercicio5repeticiones=$_POST['sabadorepej5'];
                                  $sabadoejercicio5ejercicio=$_POST['s-e'];
                                  $iduselectr=$_POST['iduselectr'];
                                  
                                  $sqlinsertsabadoEj5 = "UPDATE `rutinas_sabado` SET `id_ej5`='$sabadoejercicio5ejercicio',`series_ej5`='$sabadoejercicio5series',`repeticiones_ej5`='$sabadoejercicio5repeticiones' WHERE idusuario='$iduselectr'";
                                  $queryinsertsabadoEj5 = mysqli_query($conex, $sqlinsertsabadoEj5);

                                };
                                ?>
                                <body onLoad="setTimeout('window.close()',100)">
                                