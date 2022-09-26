<?php
include("../db.php");
$conex=conectar();
session_start();
$nusuario = $_SESSION['usuario'];

if (isset($_POST['submit1'])){
    $v = $_POST['idu'];
    echo $v;
}



$sql="SELECT * FROM datos WHERE usuario='$nusuario'";
$query=mysqli_query($conex,$sql);
$re=0;
//usuario SESSION
$row=mysqli_fetch_array($query);
$idrol= $row['id_rol'];
$nombre= $row['nombre'];
$apellido= $row['apellido'];
$dni= $row['dni'];
$correo= $row['correo'];
$idusuario= $row['idusuario'];
$image= $row['image'];
//usuario 2
$sql2="SELECT * FROM datos WHERE idusuario='$v'";
$query2=mysqli_query($conex,$sql2);
$row2=mysqli_fetch_array($query2);
$usuario2=$row2['usuario'];
$idrol2= $row2['id_rol'];
$nombre2= $row2['nombre'];
$apellido2= $row2['apellido'];
$dni2= $row2['dni'];
$correo2= $row2['correo'];
$idusuario2= $row2['idusuario'];
$image2= $row2['image'];
$de = $idusuario;
$para = $idusuario2;
//mensajes
if(isset($_GET['leido'])) {
  $leido = mysqli_real_escape_string($conex,$_GET['leido']);
  $usuariod = mysqli_real_escape_string($conex,$_GET['idu']);

  $tchats = mysqli_query($conex,"SELECT * FROM chats WHERE de = '$usuariod' OR para = '$usuariod'");
  $tc = mysqli_fetch_array($tchats);
  if($tc['de'] != $idusuario) {
  $update = mysqli_query($conex,"UPDATE chats SET leido = '1' WHERE de = '$usuariod' OR para = '$usuariod'");
  }
}

                $user = $idusuario2;
                $sess = $idusuario;
                $chats = mysqli_query($conex,"SELECT * FROM chats WHERE de = '$user' AND para = '$sess' OR de = '$sess' AND para = '$user'");
                while($ch = mysqli_fetch_array($chats)) { 
                  if($ch['de'] == $user){$var = $user;} else {$var=$sess;}
                  $usere=mysqli_query($conex,"SELECT * FROM datos WHERE idusuario = '$var'");
                  $us=mysqli_fetch_array($usere);
                ?>
<?php if($ch['para'] == $user){ ?>
    <!--msg received -->
    <br>
            
            <div class="msg-box-sended">
                    <p class="datam-sended">Tu</p>
                    <p class="msg-sended"><?php echo $ch['mensaje'];?></p>
                    <p class="dateandcheck-received"><?php echo formatearFecha($ch['fecha']); 
                    switch ($ch['leido']){
                        case 0:
                        ?>
                        <img src="../img/tilde-negro.png" width="20"></p>
                        <?php
                        break;
                        case 1:
                            ?>
                            <img src="../img/tilde-verde.png" width="20"></p>
                            <?php break;
                            default:
                            echo ERROR;
                            break;
                    }
                    ?> 
            </div>
    <!--msg sended -->
<?php } elseif($ch['de'] == $user){?>
        <br>
        <div class="msg-box-received">
            <p class="datam-received"><?php echo $usuario2;?></p>
                <p class="msg-received"><?php echo $ch['mensaje'];?></p>
                <p class="dateandcheck-received"><?php echo formatearFecha($ch['fecha']); 
        switch ($ch['leido']){
        case 0:
        ?>
        <img src="../img/tilde-negro.png" width="20"></p>
        <?php
        break;
        case 1:
            ?>
            <img src="../img/tilde-verde.png" width="20"></p>
            <?php break;
            default:
            echo ERROR;
            break;
    }
    
    ?>
                
        </div>


            
            <?php } ?>
            <?php } ?>

