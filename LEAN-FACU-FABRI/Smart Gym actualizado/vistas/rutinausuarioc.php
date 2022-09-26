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
$image= $row['image']
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <meta charset="UTF-8">

    <title>Rutina</title>

    <link rel="stylesheet" href="../css/estilousuario.css">
    <link rel="stylesheet" href="../css/estilorutina.css">
</head>

<body>

<div class="cont-t">

<table class="c-t-rutina">
<tbody class="cuerpo-t">
    <tr class="fil">
    <td></td>
    <th class="dias"> 
    <select class="s-d" name="dias" id="s-dias">
    <option value="1">Lunes</option>
    <option value="2">Martes</option>
    <option value="3">Miercoles</option>
    <option value="4">Jueves</option>
    <option value="5">Viernes</option>
    <option value="6">Sabado</option>
    <option value="7">Domingo</option>
    </select></th>
    </tr>
    
    <tr class="fil">
        <td class="ej"> <p>Ejercicio 1</p> </td>
        
        <th class="ce">
        
        </th>
        
    </tr>
    <tr class="fil">
        <td class="ej"> <p>Ejercicio 2</p> </td>
        
        <th class="ce">
        
        </th>
        
    </tr>
    <tr class="fil">
        <td class="ej"> <p>Ejercicio 3</p> </td>
        
        <th class="ce">
        
        </th>
        
    </tr>
    <tr class="fil">
        <td class="ej"> <p>Ejercicio 4</p> </td>
        
        <th class="ce">
        
        </th>
        
    </tr>
    <tr class="fil">
        <td class="ej"> <p>Ejercicio 5</p> </td>
        
        <th class="ce">
        
        </th>
        
    </tr>
</tbody>
</table>


</div>


</body>

</html>