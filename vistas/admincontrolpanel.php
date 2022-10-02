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
    <?php
    if ($idrol < 2){
        header("location: ../models/sessiondestroy.php");
    }else{
        phpAlert(   "Bienvenido $nusuario!\\n\\n Has accedido al panel de administracion"   );
    }
    ?>
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
                    <input type="text" name="" id="" class="search-input">
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
                    <td>polentero atganaras</td>
                    <td>admin</td>
                    <td>Bolivia</td>
                    <td>18</td>
                    <td>2003/28/02</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                    <td><span class="available"></span></td>
                    <td>polentero atganaras</td>
                    <td>admin</td>
                    <td>Bolivia</td>
                    <td>18</td>
                    <td>2003/28/02</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                    <td><span class="away"></span></td>
                    <td>chani lucio</td>
                    <td>gay</td>
                    <td>Portugal</td>
                    <td>18</td>
                    <td>2003/23/12</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                    <td><span class="ofline"></span></td>
                    <td>facundou ferndandou</td>
                    <td>carreado</td>
                    <td>Venezuela</td>
                    <td>18</td>
                    <td>no me acuerdo xd</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                    <td><span class="available"></span></td>
                    <td>leandro arnaldinosaurio</td>
                    <td>pico grande</td>
                    <td>Suiza del sur</td>
                    <td>18</td>
                    <td>2003/20/10</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                    <td><span class="away"></span></td>
                    <td>jpdib</td>
                    <td>novio de atganaras</td>
                    <td>dudosa procedencia</td>
                    <td>18</td>
                    <td>no se sabe</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                    <td><span class="ofline"></span></td>
                    <td>nati</td>
                    <td>novia de arnaldinosaurio</td>
                    <td>mi cama</td>
                    <td>35</td>
                    <td>no se sabe</td>
                </tr>
            </tbody>
        </table>

        <div class="footer-tools">
            <div class="list-items">
                show
                <select name="n-enties" id="n-enties" class="n-enties">
                    <option value="15">5</option>
                    <option value="10"selected>10</option>
                    <option value="15">15</option>
                </select>
                n-enties
            </div>
            <div class="pages">
                <ul>
                    <li><span class="activate">1</span></li>
                    <li><button>2</button></li>
                    <li><button>3</button></li>
                    <li><button>4</button></li>
                    <li><span>...</span></li>
                    <li><button>9</button></li>
                    <li><button>10</button></li>
                </ul>
            </div>
        </div>

    </div>
</body>
</html>

            </div>
        </div>
    </div>
    <script src="../js/usuarios.js"></script>

</body>

</html>