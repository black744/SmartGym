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
$tiposelect="MIXTO";

if(isset($_post['consultamixto'])){
    $nombrep="MIXTO";
    $preciop=$_POST['unit_price'];
}
if(isset($_post['consultavirtual'])){
    $nombrep="VIRTUAL";
    $preciop=$_POST['unit_price'];
}
if(isset($_post['consultapresencial'])){
    $nombrep="PRESENCIAL";
    $preciop=$_POST['unit_price'];
}


require __DIR__.'\..\vendor\autoload.php';
$access_token='TEST-696558555391091-103018-712336b022fa4844c0dd1c64d3860368-337317933';
MercadoPago\SDK::setAccessToken($access_token);
$preference = new MercadoPago\Preference();

$preference->back_urls=array(
    "success"=>"http://localhost/SmartGym/models/success_pay.php?idusuario=$idusuario&plantype_set=$tiposelect",
    "failure"=>"http://localhost/SmartGym/models/sessiondestroy.php",
    "pending"=>"http://localhost/SmartGym/models/sessiondestroy.php"
);
$productos=[];

$item = new MercadoPago\Item();
$item->title = $_POST['plantype'];
$item->quantity = 1;
$item->unit_price = $_POST['unit_price'];
$preference->items = array($item);
$preference->save();
echo $nombrep;

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloindex.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db50c9d526.js"></script>
    <title> Pagina de Inicio </title>
</head>
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
    
    const PUBLIC_KEY='TEST-4554a482-f08b-469c-a749-5efd5b172077';
  const mp = new MercadoPago(PUBLIC_KEY, {
    locale: 'es-AR'
  });

  mp.checkout({
    preference: {
      id: '<?php echo $preference->id; ?>'
    },
    render: {
      container: '.cho-container',
      label: 'Pagar',
    }
  });
</script>
<body>




    <header>
        <nav class="barranav" id="arriba">
            <div class="contenedorbtnnav" id="Precios-3">
                <a href="#Smart Gym-1">Smart Gym</a>
                <a href="#Servicios-2">Servicio</a>
                <a href="#Planes-3">Planes</a>
                <a href="#Soporte-4">Contacto</a>
                <a href="../vistas/registro.php">Inicia sesion</a>

            </div>
        </nav>
    </header>

    <div class="contenedorimagen">
        <img src="../img/fondoindes.jpg">
        <div class="contenedorpresentacion">
            <img src="../img/logo.png">
            <p>
                Smart gym, un sitio web destinado a la solución virtual necesaria para los gimnasios donde se desee aumentar su alcance, más que a un espacio físico, un espacio virtual, desde la comodidad de su casa. Ofreciendo los planes de entrenamientos, atención de un entrenador virtual, con rutinas personalizadas para cada uno de los clientes Basados en cada uno de los datos ingresados por los usuarios en su perfil, que por otra parte se realizará un seguimiento del progreso teniendo en cuenta la actividad del usuario. Por último contando con una administración más efectiva pudiendo, administrar los pagos de los usuarios con una lista, notificando a los mismos de que su pago ha sido exitoso.
            </p>
        </div>
    </div>

    <main id="blog">
        <div class="contenedor">

            <div class="contenido">
                <div class="post">
                    <h1 class="titulo" id="Servicios-2">Servicio </h1>
                    <p>
                        Los servicios ofrecidos por el gymnasio incluyen, la gestion personalizada de cada usuario que componen el gymnasio, dentro de los mismos se encuentrar el usuario administrador, el cual tendra las funcionalidades de administrar los pagos que se realizan,
                        visualizar los usuarios que abonaron o no y realizar una lista acerca de lo registrado, notificar acerca del pago exitoso al cliente, registrar a los usuarios entrenadores, quienes podran crear una rutina para los clientes asignandola
                        a cada uno, visualizar los turnos pendientes con los clientes, ya sea virtual o presencial. por ultimo los clientes podran solicitar un turno, visualizar los rutinas asginadas, visualizar sus turnos, ver su progreso desde que se
                        iniciaron y ver su perfil.
                    </p>
                </div>
                <div class="post">
                    <h1 class="titulo" id="Planes-3"> Planes </h1>

                    <div class="container">
                        <div class="container2"></div>

                        <div class="box">
                            &nbsp;
                            <i class="fa-solid fa-laptop"></i>
                            <h2> Plan virtual</h2> <br>
                            <form id="myForm" name="formulario" method="post" action="">
                                <input type="text" value="Virtual" name="plantype">
                                <input type="number" value="1500" name="unit_price">
                                <button type="button" id="consulta">Consulta</button>
                            </form>
                            <p>Dicho plan ofrecera a los clientes participar de los entrenamientos pero de forma totalmente remota con sus respectivos turnos</p>
                            <div class="cho-container"></div>
                        </div>

                        <div class="box">
                            &nbsp;
                            <i class="fa-solid fa-arrow-right-arrow-left"></i>
                            <h2> Plan Mixto </h2><br>
                            <p>Se combinaran las caracteristicas de las modalidades virtual como presencial en los turnos</p>
                            <br>
                            <br>
                            <div class="cho-container" ></div>
                        </div>

                        <div class="box">
                            &nbsp;
                            <i class="fa-solid fa-dumbbell"></i>
                            <h2> Plan Presencial </h2> <br>
                            <p>En dicho sera de forma totalmente presencial con las comodidades de las rutinas, mensajeria virtuales al igual que gozan los otros planes</p>
                            <div class="cho-container"></div>
                        </div>

                    </div>

                </div>

                <a href="#arriba"><button class="btn1"><i class="fas fa-arrow-alt-circle-up"></i></button></a>

            </div>
        </div>
    </main>

    <footer>
        <div class="barracontacto">
            <h1 class="titulo2" id="Soporte-4">Contacto</h1>
            <div class="linkcontacto"><i class="fa-solid fa-envelope"></i> <a href="mailto:smartgymj23@gmail.com">Contactar por gmail</a></div>
            <br>
            <p>Los desarrolladores de Smart Gym somos:<br>
                Argañaras Ulises
                <br>
                Arnaldi Leandro
                <br>
                Fernandez Facundo
                <br>
                Ianni Fabricio
                <br>
                <br>
                <br>
            </p>
        </div>
    </footer>

</body>

</html>