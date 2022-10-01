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
$pesoactual= $row['pesoactual'];
$pesoinicial= $row['pesoinicial'];
$pesoideal= $row['pesoideal'];

?>

<!DOCTYPE html>
<html lang="en">
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

            <div class="header">
                <?php
                echo "Welcome $nusuario to smart Smart-gym !! Have a nice day."
                ?>
            </div>
            <div class="info">
                <div class="izquierda">
                    <div class="turnoultimo">
                        <?php
                        $sqlper= "SELECT * FROM turnos WHERE idusuario=$idusuario";
                        $queryper= mysqli_query($conex, $sqlper);
                        $datap= mysqli_fetch_row($queryper);
                        if ($datap == 0){
                            echo 'No existe un turno ';
                        
                        }else{
                        $sqlProximoTurno= "SELECT * FROM turnos WHERE idusuario='$idusuario' ORDER BY idturno DESC";
                        $queryProximoTurno= mysqli_query($conex, $sqlProximoTurno); 
                        $sqlquery= mysqli_fetch_array($queryProximoTurno);
                        $a= $sqlquery['idturno']; 
                        ?>
                        <p>Tu Próximo Túrno</p>
                        <p>Fecha y hora: 
                        <?php 
                        if ($sqlquery['fechahora'] == 0){
                        echo 'Si deseas pedir un turno -->';
                        }else{
                        echo $sqlquery['fechahora'];
                        };}?> </p>
                        <p>Entrenador</p>

                    </div>
                </div>

                <div class="derecha">
                <img src="data:image/jpg;base64,<?php echo base64_encode($image); ?>" class="imgp">
                <div class="nombre">
                    <p><?php echo $row['nombre']?></p>
                </div>
                <div class="progreso">
                    <p>Peso actual: <?php echo $pesoactual ?> </p>
                    <p>Peso ideal: <?php echo $pesoideal ?> </p>
                    <p>Peso inicial: <?php echo $pesoinicial ?> </p>
                    
                </div>
                <div class="progresoform">
                    <form method="post">
                        <p>ingrese peso actual</p>
                        <input class="orange" type="text" name="pesoactual"><input class="botonenviar" type="submit" name="enviarpesoactual">
                    </form>
                    <?php
                    if(isset($_POST['enviarpesoactual'])){
                    $NPactual= $_POST['pesoactual'];
                    $sqlNPA= "UPDATE datos SET pesoactual='$NPactual' WHERE idusuario='$idusuario'";
                    $queryNPA= mysqli_query($conex, $sqlNPA);
                    }
                    ?>
                    <form method="post">
                        <p>ingrese peso ideal</p>
                        <input class="orange" type="text" name="pesoideal"><input class="botonenviar" type="submit" name="enviarpesoideal">
                    </form>
                    <?php
                    if(isset($_POST['enviarpesoideal'])){
                    $NPideal= $_POST['pesoideal'];
                    $sqlideal= "UPDATE datos SET pesoideal='$NPideal' WHERE idusuario='$idusuario'";
                    $queryideal= mysqli_query($conex, $sqlideal);
                    }
                    ?>                    
                </div>
                

                </div>
            </div>

        </div>
    </div>

</body>

</html>