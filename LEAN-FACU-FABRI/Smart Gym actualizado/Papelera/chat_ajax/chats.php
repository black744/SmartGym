<?php
include("../db.php");
$conex=conectar();
session_start();
$v=$_GET['idu'];
$nusuario = $_SESSION['usuario'];
$sql="SELECT * FROM datos WHERE usuario='$nusuario'";
$query=mysqli_query($conex,$sql);
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
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Mensajeria</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="../css/estilousuario.css">
</head>
<?php
    switch($idrol){
      case 0: 
          include ("../vistas/sidebars/sidebarc.php");
          break;
      case 1: 
          include ("../vistas/sidebars/sidebare.php");
          break;
      case 2: 
          include ("../vistas/sidebars/sidebara.php");
          break;
      default:
          die("Error");
          break;
} 
    ?>
<body>
  <div class="cuadrochat">
<div class="container clearfix">
    <div class="people-list" id="people-list">
      <div class="search">
        <input type="text" placeholder="search" />
        <i class="fa fa-search"></i>
      </div>
      <ul class="list">
      <?php
      
                  $chats1 = mysqli_query($conex,"SELECT * FROM c_chats WHERE de = '".$idusuario."' OR para = '".$idusuario."' order by id_cch desc");
        while($ch1 = mysqli_fetch_array($chats1)) { 

                    if($ch1['de'] == $idusuario) {$var1 = $ch1['para'];} elseif ($ch1['para'] == $idusuario) {$var1 = $ch1['de'];}
                    $usere1 = mysqli_query($conex,"SELECT * FROM datos WHERE idusuario = '$var1'");
                    $us1 = mysqli_fetch_array($usere1);

                    $chat1 = mysqli_query($conex,"SELECT * FROM chats WHERE id_cch = '".$ch1['id_cch']."' ORDER BY id_cha desc limit 1");
                    $cha1 = mysqli_fetch_array($chat1);

                  ?>
                  <div ><a id="music" href="chats.php?idu=<?php echo $var1; ?>&leido=1">
        <li class="clearfix">
          <img width="50" src="data:image/jpg;base64,<?php echo base64_encode($us1['image']); ?>" alt="avatar" />
          <div class="about">
           
            <div><a href="chats.php?idu=<?php echo $var1; ?>&leido=1"></a><?php echo $us1['usuario']; ?></div>

            <div class="status">

              <?php switch ($cha1['leido']){
                case 0:
                  ?>
                  <div class="tilde"><img src="../img/tilde-negro.png" width="20"></div>
                  <div class="ult.mensaje"><?php echo $cha1['mensaje'];?></div>
                  <?php
                  break;
                  case 1:
                    ?>
                    <div class="tilde"><img src="../img/tilde-verde.png" width="20"></div>
                    <div class="ult.mensaje"><?php echo $cha1['mensaje'];?></div>
                    <?php break;
                    default:
                    echo ERROR;
                    break;
              }
              }
    ?>

    </a>
    </li>
      </ul>
    </div>
            

    <div class="chat">
      <div class="chat-header clearfix">
      <div class="divimg"><img src="data:image/jpg;base64,<?php echo base64_encode($image2);?>"/> </div>
        
        <div class="chat-about">
        <div class="chat-with"><?php echo $usuario2 ?></div>
          <div class="chat-num-messages">
<?php
    switch($idrol2){
      case 0: 
          ?><h4>ROL: CLIENTE</h4><?php
          break;
      case 1: 
        ?><h4>ROL: ENTRENADOR</h4><?php
          break;
      case 2: 
        ?><h4>ROL: ADMIN</h4><?php
          break;
            default:
             die("ERROR");
               break;}
  ?>
          </div>
        </div>
        <i class="fa fa-star"></i>
      </div> <!-- end chat-header -->
      
      <div class="chat-history">
        <ul>
          <li class="clearfix">
          <?php
                $user = $idusuario2;
                $sess = $idusuario;
                $chats = mysqli_query($conex,"SELECT * FROM chats WHERE de = '$user' AND para = '$sess' OR de = '$sess' AND para = '$user'");
                while($ch = mysqli_fetch_array($chats)) { 
                  if($ch['de'] == $user){$var = $user;} else {$var=$sess;}
                  $usere=mysqli_query($conex,"SELECT * FROM datos WHERE idusuario = '$var'");
                  $us=mysqli_fetch_array($usere);
                ?>
<?php if($ch['para'] == $user){ ?>
                  <li>
            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle online"></i> <?php $us['usuario'];?></span>
              <span class="message-data-time"><?php echo $ch['fecha'];?></span>
            </div>
            <div class="message my-message">
              <?php echo $ch['mensaje'];?>
            </div>
          </li>
          <?php } elseif($ch['de'] == $user){?>

            <div class="message-data align-right">
              <span class="message-data-time" ><?php echo $ch['fecha'];?></span> &nbsp; &nbsp;
              <span class="message-data-name" ><?php $us['usuario'];?></span> <i class="fa fa-circle me"></i>
              
            </div>
            <div class="message other-message float-right">
            <?php echo $ch['mensaje'];?>
            </div>
          </li>
          <?php } ?>
          <?php } ?>

      </div> <!-- end chat-history -->
      
      <div class="chat-message clearfix">
      <form action="" method="post">
                <div class="input-group">
                  <div class="sendmsg">
                  <input type="text" name="mensaje" placeholder="Escribe un mensaje" class="form-control"></div>
                      <span class="input-group-btn">
                        <div class="buttonsend">
                        <input type="submit" name="enviar" class="btn btn-primary btn-flat">Enviar</button>
                        </div>
                        </div>
                      </span>
                </div>
              </form>

              <?php
              if(isset($_POST['enviar'])) {

                $mensaje = $_POST['mensaje'];
                $comprobar = mysqli_query($conex,"SELECT * FROM c_chats WHERE de = '$de' AND para = '$para' OR de = '$para' AND para = '$de'");
                $com = mysqli_fetch_array($comprobar);
                if(mysqli_num_rows($comprobar) == 0) {
                  $insert = mysqli_query($conex,"INSERT INTO c_chats (de,para) VALUES ('$de','$para')");
                  $siguiente = mysqli_query($conex,"SELECT id_cch FROM c_chats WHERE de = '$de' AND para = '$para' OR de = '$para' AND para = '$de'");
                  $si = mysqli_fetch_array($siguiente);
                  $insert2 = mysqli_query($conex,"INSERT INTO chats (id_cch,de,para,mensaje,fecha,leido) VALUES ('".$si['id_cch']."','$de','$para','$mensaje',now(),'0')");
                  if($insert) {echo '<script>window.location="chats.php?idu='.$para.'"</script>';}
                }
                else
                {
                  $insert3 = mysqli_query($conex,"INSERT INTO chats (id_cch,de,para,mensaje,fecha,leido) VALUES ('".$com['id_cch']."','$de','$para','$mensaje',now(),'0')");
                  if($insert3) {echo '<script>window.location="chats.php?idu='.$para.'"</script>';}
                }



              }

              ?>
  </div> <!-- end container -->


<script id="message-template" type="text/x-handlebars-template">
  <li class="clearfix">
    <div class="message-data align-right">
      <span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
      <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
    </div>
    <div class="message other-message float-right">
      {{messageOutput}}
    </div>
  </li>
</script>

<script id="message-response-template" type="text/x-handlebars-template">
  <li>
    <div class="message-data">
      <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
      <span class="message-data-time">{{time}}, Today</span>
    </div>
    <div class="message my-message">
      {{response}}
    </div>
  </li>
  </div>
</script>
<!-- partial -->


</body>
</html>

