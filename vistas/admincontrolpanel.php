<?php
include("../db.php");
$conex = conectar();
session_start();
$nusuario = $_SESSION['usuario'];
//*SELECT * from turnos INNER JOIN modalidad ON turnos.modalidad=modalidad.id;*//
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
    <title>Perfil</title>

    <link rel="stylesheet" href="../css/estilousuario.css">
    <link rel="stylesheet" href="../css/estilotabla.css">

    <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>
    <script src="../js/apptabla.js"></script>
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

    <div class="main_content">
        

            <div class="contenedortabla">

                <h4>Panel de control adminsitrador</h4>

                <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Search..">

                <hr>

                <table class="table table-bordered order-table " id="tabla">
                    <thead class="tabla-header">
                        <tr class="filah">
                            <th>id usuario</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>DNI</th>
                            <th>Pago</th>
                            <th>Deuda</th>
                            <th>Plan</th>
                        </tr>
                    </thead>
                    <?php
                    $query = mysqli_query($conex, "SELECT * FROM datos");
                    $result = mysqli_num_rows($query);
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr class="tabla-fila">
                            <td class="datos"><?php echo $data['idusuario']; ?></td>
                            <td class="datos"><?php echo $data['usuario']; ?></td>
                            <td class="datos">-</td>
                            <td class="datos"><?php echo $data['dni']; ?></td>
                            <td class="datos">-</td>
                            <td class="datos">-</td>
                            <td class="datos">-</td>
                        </tr>
                    <?php } ?>

                </table>
                <hr>

                <Div class="barra-abajo">

                    <button id="btnExportar" class="btn btn-success">
                        <i class="fas fa-file-excel"></i> crear archivo mensual usuarios
                    </button>
                    <div class="cuadro-admin">
                        <input class="ing1" type="text" placeholder="Codigo de usuario">
                        <input class="ing2" type="text" placeholder="Contraseña admin">
                        <select name="metodopago" id="mtp">
                            <option value="1">efectivo</option>
                            <option value="2">transferencia</option>
                            <option value="3">debito</option>
                        </select>
                        <div class="meses">
                            <select name="meses-pago" id="p-meses">
                                <option value="">Enero</option>
                                <option value="">Febrero</option>
                                <option value="">Marzo</option>
                                <option value="">Abril</option>
                                <option value="">Mayo</option>
                                <option value="">Junio</option>
                                <option value="">Julio</option>
                                <option value="">Agosto</option>
                                <option value="">Septiembre</option>
                                <option value="">Octubre</option>
                                <option value="">Noviembre</option>
                                <option value="">Diciembre</option>
                            </select>
                            <button type="submit"  id="btnExportar"> guardar pago</button>
                        </div>
                    </div>

                    <div id="cuadro-adminbaja">
                        <form method="post">
                        <input class="ing1" type="text" name="iduser" placeholder="Codigo de usuario">
                        <input class="ing2" type="text" name="password" placeholder="Contraseña admin">
                        <input type="submit" name="bajaboton" value="Enviar">
                    </form>
                    <?php
                    if(isset($_POST['bajaboton'])){
                        $iduser=$_POST['iduser'];
                        $password=$_POST['password'];
                        $sqlcomp="SELECT * FROM datos WHERE idusuario='$idusuario'";
                        $querycomp=mysqli_query($conex,($sqlcomp));
                        $asocc= mysqli_fetch_array($querycomp);
                        $passworduser=$asocc['contraseña'];
                        if($password == $passworduser){

                        }

                    }
                    ?>

                    </div>
                </Div>
            </div>
        </div>
<script src="app1.js"></script>
</body>

<script>
    const $btnExportar = document.querySelector("#btnExportar"),
        $tabla = document.querySelector("#tabla");

    $btnExportar.addEventListener("click", function() {
        let tableExport = new TableExport($tabla, {
            exportButtons: false, // No queremos botones
            filename: "Reporte de prueba", //Nombre del archivo de Excel
            sheetname: "Reporte de prueba", //Título de la hoja
        });
        let datos = tableExport.getExportData();
        let preferenciasDocumento = datos.tabla.xlsx;
        tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
    });
</script>

<script>
    const btn = document.querySelectorAll(".pagoetc")
    const contei= document.querySelector(".cuadro-admin")
    console.log(btn);
    for(let i = 0; i < btn.length; i++){
    btn[i].addEventListener("click", function(){
        if(contei.style.display ==="block"){
        contei.style.display ="none";
        }
        else{
        contei.style.display ="block";
        }
    })
}
</script>

<script>
    const btne = document.querySelectorAll("#bajaetc")
    const conteinerrrr= document.querySelector("#cuadro-adminbaja")
    console.log(btne);
    for(let i = 0; i < btne.length; i++){
    btne[i].addEventListener("click", function(){
        if(conteinerrrr.style.display ==="block"){
        conteinerrrr.style.display ="none";
        }
        else{
        conteinerrrr.style.display ="block";
        }
    })
}
</script>

</html>