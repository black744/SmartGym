<?php
include("../db.php");
$conex=conectar();
session_start();
$nusuario = $_SESSION['usuario'];
//*SELECT * from turnos INNER JOIN modalidad ON turnos.modalidad=modalidad.id;*//
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
            
        <div class="contenedortabla">

            <h4>Panel de control adminsitrador</h4>

            <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Search..">
            
            <hr>
            
            <table class="table table-bordered order-table " id="tabla">
                <thead class="tabla-header">
                    <tr class="filah">
                        <th>seleccionar</th>
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
                $query=mysqli_query($conex,"SELECT * FROM datos");
                $result= mysqli_num_rows($query);
                while ($data=mysqli_fetch_array($query)){
                    ?>
                <tr class="tabla-fila" >
                    <td class="table-checkbox"><input type="checkbox" name="" id=""> </td>
                    <td class="datos"><?php echo $data['idusuario'];?></td>
                    <td class="datos"><?php echo $data['usuario'];?></td>
                    <td class="datos"><?php echo $data['edad'];?></td>
                    <td class="datos"><?php echo $data['dni'];?></td>
                    <td class="datos">-</td>
                    <td class="datos">-</td>
                    <td class="datos">-</td>
                </tr>
                <?php }?>
                
            </table>
            <hr>

            <Div class="barra-abajo">

                <button id="btnExportar" class="btn btn-success">
                    <i class="fas fa-file-excel"></i> crear archivo mensual usuarios
                </button>

                <button id="btnapago">actualizar pago</button>
                
            </Div>
        </div>
    </div>
    
</body>

<script>
    const $btnExportar = document.querySelector("#btnExportar"),
        $tabla = document.querySelector("#tabla");

    $btnExportar.addEventListener("click", function(){
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

</html>