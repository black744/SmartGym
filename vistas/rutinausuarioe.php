<?php
include("../db.php");
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
include("../models/validacion_clientes.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Rutina</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <link rel="stylesheet" href="../css/estilousuario.css">
  <link rel="stylesheet" href="../css/estilorutina.css">
  <link rel="stylesheet" href="../css/estilotablau.css">
  <link rel="stylesheet" href="../css/EstiloGeneral.css">

  <script>
    (function(document) {
      'use strict';

      var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
          _input = e.target;
          var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
          Arr.forEach.call(tables, function(table) {
            Arr.forEach.call(table.tBodies, function(tbody) {
              Arr.forEach.call(tbody.rows, _filter);
            });
          });
        }

        function _filter(row) {
          var text = row.textContent.toLowerCase(),
            val = _input.value.toLowerCase();
          row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
          init: function() {
            var inputs = document.getElementsByClassName('light-table-filter');
            Arr.forEach.call(inputs, function(input) {
              input.oninput = _onInputEvent;
            });
          }
        };
      })(Array.prototype);

      document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
          LightTableFilter.init();
        }
      });

    })(document);
  </script>

</head>

<?php
switch ($idrol) {
  case 0:
    include("sidebars/sidebarc.php");
    break;
  case 1:
    include("sidebars/sidebare.php");
    break;
  case 2:
    include("sidebars/sidebara.php");
    break;
  default:
    die("Error");
    break;
}
?>

<body>

  

    <div class="cont-t-u">
      <h4>Buscador de clientes</h4>
      <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Buscar usuario">
      <hr>
      <table class="table table-bordered order-table ">
        <thead class="header">
          <tr class="fila-h">
            <th></th>
            <th class="col-h">Nombre y apellido</th>
            <th class="col-h">DNI</th>
            <th class="col-h">Asignar rutina</th>
          </tr>
        </thead>
        <?php
        $sqlbuscador = "SELECT * FROM `datos` WHERE id_rol=0 AND estado_cuenta=1";
        $querybuscador = mysqli_query($conex, $sqlbuscador);
        while ($nBuscador = mysqli_fetch_array($querybuscador)) {
          $ImagenUsuario=$nBuscador['image'];
        ?>
          <tr class="fila">
            <td>
            <?php 
                                               $SQLDefault="SELECT image FROM datos WHERE idusuario=1";
                                               $QUERYDefault=mysqli_query($conex, ($SQLDefault));
                                               $ROWDefault = mysqli_fetch_array($QUERYDefault);
                                               $DefaultIMG=$ROWDefault['image'];
                    if ($ImagenUsuario == 0){
                           ?>
                           <img src="data:image/jpg;base64,<?php echo base64_encode($DefaultIMG); ?>" class="foto">
                           <?php

                    }else{?>
                <img src="data:image/jpg;base64,<?php echo base64_encode($ImagenUsuario); ?>" class="foto">
                    <?php } ?>
            </td>
            <td class="columna"><?php echo $nBuscador['usuario']?></td>
            <td class="columna"><?php echo $nBuscador['dni']?></td>
            <form method="post" action="rutina.php">
              <input type="text" name="iduselect" value="<?php echo $nBuscador['idusuario']?>" hidden>
            <td><input type="submit" name="enviarid" class="btnr" value="Crear Rutina"></td>
        </form>
          </tr>
        <?php
        };?>
  

      </table>

  


</body>

</html>