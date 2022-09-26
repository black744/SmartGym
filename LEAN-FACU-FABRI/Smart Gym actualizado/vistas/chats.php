<?php
include("../db.php");
$conex=conectar();
session_start();
$v=$_GET['idu'];
$nusuario = $_SESSION['usuario'];
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Perfil</title>

    <link rel="stylesheet" href="../css/estilochatsl.css">
    <script type="text/javascript">
        function ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('msgcontainer').innerHTML = req.responseText;
            
                }
            }
            req.open('GET', 'msgcontainer.php', true);
            req.send();
        }
        setInterval(function(){ajax();}, 1000);
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


        <div class="main_content">

            <div class="headerchata">
            <div class="inf">

      <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="Buscar Usuarios">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
            </div>
            
            <img src="../img/msjbox.png" class="msjbox"><div class="circulo"></div>

            <img src="data:image/jpg;base64,<?php echo base64_encode($row['image']); ?>" alt="img" class="marco" />
                
            </div>
		</header>
	

        </div>
    </div>
    
</div>

</div>
</div>
</div>
    <body onload="ajax();">
        <!--header-->
        <div class="chat">
            <img src="data:image/jpg;base64,<?php echo base64_encode($row2['image']); ?>" alt="img" class="img" />
            <div class="infop">
                <h3><?php echo $row2['nombre']?>&nbsp;<?php echo $row2['apellido']?> </h3> 
                <form method="POST" action="msgcontainer.php">
                    <input type="text" name="idu" value="<?php $idusuario2;?>">
                    <input type="text" name="idu2" value="<?php $idusuario;?>">
                    <input type="submit" name="submit1"value="submit1">
                </form>
            </div>
        </div>
    <!-- msg content-->
<div class="msgcontainer" id="msgcontainer"> 

</div>


       <!--Footer-->
    <form method="post" action="" name="mandar" id="mandar">
        <div class="chatbottom"></div>
            <form method="post" action="">
                <input type="text" class="inputmsg" placeholder="&nbsp;&nbsp;&nbsp;Escribe tu mensaje" name="mensaje" id="enviar">
                <input type="submit" name="enviar" id="enviar" class="btnsend">
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
		</div>	

            

</body>

</html>