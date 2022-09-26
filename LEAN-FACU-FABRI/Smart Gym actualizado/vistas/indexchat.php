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
    <body>


<div class="contentchat">
    <br>

    <h4>Numero de resultados encontrados:<?php echo $re ;?></h4>
    <br>
    
    <?php
        $query1=mysqli_query($conex,"SELECT idusuario, usuario, image FROM datos");
        $result1= mysqli_num_rows($query1);
        if($result1 > 0){
        while ($data= mysqli_fetch_array($query1)){
          if ($data['idusuario'] != $idusuario){

          
          $idu=$data['idusuario'];
?> 
<div class="chat">
    


</div>
    <div class="button" role="link" onclick="window.location='chats.php?idu=<?php echo urlencode($data['idusuario']);?>'">
        <div class="linea"></div>
          <div class="udata"><?php echo $data['usuario'] ?><?php $user2=$data['usuario'] ?></div>
              <img src="data:image/jpg;base64,<?php echo base64_encode($data['image']); ?>" alt="imgusr" class="marcou2" />
          <div class="linea"></div>
        </div>
 
    
    <?php
     $re++;
          }
        }
    }
    ?>

  </div>



</body>

</html>