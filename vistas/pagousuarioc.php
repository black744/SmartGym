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
include("../models/validacion_clientes.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pagos</title>
    <link rel="stylesheet" href="../css/estilousuario.css">
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
</head>



<body>
      
      <div class="main_content">
                  <div class="contenedor-pagos">

                      <div class="contenedor-cuerre-texto">
                          <h2> Escanea y Paga</h2>
                          <img src="../img/qr.png">
                          <p> Podes copiar el alias tambien: <br> alias.smartgym.mc</p>
                          <p> Podes copiar el cvu tambien: <br> 000085950003650 </p>
                          <p> Escanee el codigo, con la aplicacion de mercado pago para realizar el pago de la membresia del gimnasio</p>
                      </div>

                      <div class="mostrar-pago">
                          <form action="">
                              <div class="notificacion">
                                  <p> El pago realizado este mes ya se entrego exitosamente / el pago aun no se recibio, en caso de haber abonado debes aguardar un momento</p>
                                  <!--aca se conecta con la base de datos y si el check esta bien le dice, si el pago de este mes fue exitoso-->
                              </div>
                              <div class="notificacion">
                                  <p> estas al dia!! felicitaciones / no estas al dia con los pagos, debes : mes, mes, mes, etc</p>
                                  <!--aca se conceta con la base de datos y en tal caso de que deba 1 omas meses notificarle cual debe,-->
                              </div>
                          </form>
                      </div>

                  </div>
              </div>
              <!-- fin contenido -->
          </div>  
</body>

</html>