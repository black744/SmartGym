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
    <title>Rutina</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <link rel="stylesheet" href="../css/estilousuario.css">
    <link rel="stylesheet" href="../css/estilorutina.css">
	<link rel="stylesheet" href="../css/estilotablau.css">

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
          var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
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

<div class="cont-t">

	<div class="cont-t-u">
	<h4>Buscador de clientes</h4>
    <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Buscar usuario">
    <hr>
    <table class="table table-bordered order-table ">
        <thead class="header">
        <tr class="fila-h">
			<th>-</th>
            <th class="col-h">Nombre y apellido</th>
            <th class="col-h">DNI</th>
			<th class="col-h">Asignar rutina</th>
        </tr>
        </thead>

        <tr class="fila">
		<td><div class="foto"></div></td>
        <td class="columna">Juan Perez de Barradas</td>
        <td class="columna">00.000.001</td>
        <td><button class="btnr">crear rutina</button></td>
        </tr>

		<tr class="fila">
		<td><div class="foto"></div></td>
        <td class="columna">federico melomama</td>
        <td class="columna">00.000.002</td>
        <td><button class="btnr">crear rutina</button></td>
        </tr>

		<tr class="fila">
		<td><div class="foto"></div></td>
        <td class="columna">Ianni luchio</td>
        <td class="columna">00.000.003</td>
        <td><button class="btnr">crear rutina</button></td>
        </tr>

		<tr class="fila">
		<td><div class="foto"></div></td>
        <td class="columna">polentero</td>
        <td class="columna">00.000.004</td>
        <td><button class="btnr">crear rutina</button></td>
        </tr>

		<tr class="fila">
		<td><div class="foto"></div></td>
        <td class="columna">lean</td>
        <td class="columna">00.000.005</td>
        <td><button class="btnr">crear rutina</button></td>
        </tr>

    </table>

    </div>

	
</body>

</html>