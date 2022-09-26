<?php
include("../db.php");
$conex=conectar();
session_start();
$nusuario = $_SESSION['usuario'];
$re=0;


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
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Perfil</title>

    <link rel="stylesheet" href="../css/estilochats.css">

	<meta http-equiv="refresh" content="20"> <!-- para refrescar la pagina-->

	<script>
		$(document).ready(function() {
			// Set trigger and container variables
			var trigger = $('.chat'),
				container = $('#content');

			// Fire on click
			trigger.on('click', function() {
				// Set $this for re-use. Set target from data attribute
				var $this = $(this),
					target = $this.data('target');

				// Load target page into container
				container.load(target + '.php');

				// Stop normal link behavior
				return false;
			});
		});
	</script>
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
<div class="chatcontent">

    <div class="users"> <?php
    $query1=mysqli_query($conex,"SELECT idusuario, usuario, image FROM datos");
        $result1= mysqli_num_rows($query1);
        if($result1 > 0){
        while ($data= mysqli_fetch_array($query1)){
          $idu=$data['idusuario'];
?>       <form method="POST">
        <li class="clearfix">
          <img width="50" src="data:image/jpg;base64,<?php echo base64_encode($data['image']); ?>" alt="avatar" />
          <div class="about">
           
            <div class="name"><?php echo $data['usuario'] ?><?php $user2=$data['usuario'] ?></div>
          </div>
          <input type="text" value="<?php echo $data['idusuario']; ?>" name="idu" id="idu"/>
          <input type="submit" name="enviarxd" id="enviarxd" value="enviarxd"/>
        </form>
        </li>
        <?php
        }
    }
    ?>
      </ul>
    </div>
    <?php
    if(isset($_POST['enviarxd'])){
        $idu22 = $_POST['idu'];
    ?>
        <div class="chat" id="chat">
            <?php
                                //sql
                                $sql2="SELECT * FROM datos WHERE idusuario='$idu22'";
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
                                
                                //sql 
                                ?>
                                <img src="data:image/jpg;base64,<?php echo base64_encode($row2['image']); ?>" alt="img"/>
                                <?php
                                //msg
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

                            <div class="menem"> 
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
</div>


            
            <?php } ?>
            <?php } ?>
            <?php } ?>


</div>




</body>

</html>