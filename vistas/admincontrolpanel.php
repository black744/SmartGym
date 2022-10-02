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

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Perfil</title>

    <link rel="stylesheet" href="../css/estilousuario.css">
    <link rel="stylesheet" href="../css/estilotabla.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <div class="main_content">
        <div class="info">
                
            <div class="datatable-container">

                <div class="header-tools">
                    <div class="tools">
                        <ul>
                        <li>
                            <button>
                                <i class="material-icons">add_circle</i>
                            </button>
                        </li>
                        <li>
                            <button>
                                <i class="material-icons">edit</i>
                            </button>
                        </li>
                        <li>
                            <button>
                                <i class="material-icons">delete</i>
                            </button>
                        </li>
                        <li>
                            <button>
                                <i class="material-icons">share</i>
                            </button>
                        </ul>
                    </div>

                        <div class="search">
                            <input type="text" name="buscador" id="buscador" class="search-input">
                        </div>
                </div>

                <table class="datatable">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Status</th>
                            <th>nombre</th>
                            <th>edad</th>
                            <th>posicion</th>
                            <th>oficio</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                            <td><span class="available"></span></td>
                            <td class="datos">polentero atganaras</td>
                            <td class="datos">admin</td>
                            <td class="datos">Bolivia</td>
                            <td class="datos">18</td>
                            <td class="datos">2003/28/02</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                            <td><span class="available"></span></td>
                            <td class="datos">polentero atganaras</td>
                            <td class="datos">admin</td>
                            <td class="datos">Bolivia</td>
                            <td class="datos">18</td>
                            <td class="datos">2003/28/02</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                            <td><span class="away"></span></td>
                            <td class="datos">chani lucio</td>
                            <td class="datos">gay</td>
                            <td class="datos">Portugal</td>
                            <td class="datos">18</td>
                            <td class="datos">2003/23/12</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                            <td><span class="ofline"></span></td>
                            <td class="datos">facundou ferndandou</td>
                            <td class="datos">carreado</td>
                            <td class="datos">Venezuela</td>
                            <td class="datos">18</td>
                            <td class="datos">no me acuerdo xd</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                            <td><span class="available"></span></td>
                            <td class="datos">leandro arnaldinosaurio</td>
                            <td class="datos">pico grande</td>
                            <td class="datos">Suiza del sur</td>
                            <td class="datos">18</td>
                            <td class="datos">2003/20/10</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                            <td><span class="away"></span></td>
                            <td class="datos">jpdib</td>
                            <td class="datos">novio de atganaras</td>
                            <td class="datos">dudosa procedencia</td>
                            <td class="datos">18</td>
                            <td class="datos">no se sabe</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                            <td><span class="ofline"></span></td>
                            <td class="datos">nati</td>
                            <td class="datos">novia de arnaldinosaurio</td>
                            <td class="datos">mi cama</td>
                            <td class="datos">35</td>
                            <td class="datos">no se sabe</td>
                        </tr>
                    </tbody>
                </table>

    </div>
    <script src="../js/apptabla.js"></script>
</body>

</html>