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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Perfil</title>

    <link rel="stylesheet" href="../css/estilochatindex.css">
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


        <div class="main_content">
      <style>
      .headerchat {
    padding: 13px;
    background: rgb(41, 41, 41);
    color: #ffffff;
    border-bottom: 1px solid #636363;
}

      </style>

            <div class="headerchat">
            <div class="inf">
                    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: grey;
  font-family: 'Open Sans', sans-serif;
}

.search {
    margin-left: -60%;
  width: 120%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #ff7514;
  border-right: none;
  padding: 5px;
  height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: black;
}

.searchTerm:focus{
  color: black;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #ff7514;
  background: #ff7514;
  text-align: center;
  color: grey;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.marco{
    height:50px;
   width:50px;
   background:#ff7514;
   margin-left: 95%;
   -moz-border-radius:50px;
   -webkit-border-radius:50px;
   border-radius:50px;
}
.marcou2{
    height:69px;
   width:69px;
   background:#ff7514;
   margin-left: 3%;
   margin-top: 1%;
   -moz-border-radius:50px;
   -webkit-border-radius:50px;
   border-radius:50px;
   
}
.msjbox{
    height:30px;
   width: 30px;
   background:#ff7514;
   margin-left: 90%;
   -moz-border-radius:50px;
   -webkit-border-radius:50px;
   border-radius:50px;
   margin-top: 12px;
   float: left;

}
      </style>
      <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="Buscar Usuarios">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
            </div>
            
            <img src="../img/msjbox.png" class="msjbox">

            <div class="marco">
                
            </div>
		</header>
	

        </div>
    </div>
</div>
</div>
    <body>
    <style>
        .contentchat{
            background: black;
            margin-left: 200px;   
            color: #ff7514;
        }
        .linea {
  border-top: 1px solid white;
  height: 2px;
  max-width: 1100px;
  padding: 0;
  margin: 20px auto 0 auto;
  
}
.udata{
    float: left;
    margin-left: 10%;
    margin-top: 3%;
    color: #ff7514;
}
        </style>
<div class="contentchat">
    <br>
    <h4>Numero de resultados encontrados:</h4>
    <br>
    <hr>
    <div class="linea"></div>
    <div class="udata"><h3>Nombre del Usuario</h3></div>
    <div class="marcou2"></div>
    <div class="linea"></div>
    <div class="linea"></div>
    <div class="udata"><h3>Nombre del Usuario</h3></div>
    <div class="marcou2"></div>
    <div class="linea"></div>
    <div class="linea"></div>
    <div class="udata"><h3>Nombre del Usuario</h3></div>
    <div class="marcou2"></div>
    <div class="linea"></div>
    </div>


</body>

</html>