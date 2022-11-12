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
//---------------------------------------------------------------------//
$tiposelect = $_POST['plantype'];
$preciop = $_POST['unit_price'];
$quantity = $_POST['quantity'];

$title_item = $tiposelect . ' - ' .  $quantity . ' ' . 'mes-meses';
$precio_total = $preciop * $quantity;

require __DIR__ . '\..\vendor\autoload.php';
$access_token = 'TEST-696558555391091-103018-712336b022fa4844c0dd1c64d3860368-337317933';
MercadoPago\SDK::setAccessToken($access_token);
$preference = new MercadoPago\Preference();

$preference->back_urls = array(
    "success" => "http://localhost/SmartGym/models/success_pay.php?idusuario=$idusuario&plantype_set=$tiposelect&quantity=$quantity",
    "failure" => "http://localhost/SmartGym/models/sessiondestroy.php",
    "pending" => "http://localhost/SmartGym/models/sessiondestroy.php"
);
$productos = [];


$item = new MercadoPago\Item();
$item->title = $title_item;
$item->quantity = 1;
$item->unit_price = $precio_total;
$preference->items = array($item);
$preference->save();


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo-planes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db50c9d526.js"></script>
    <title> Pagina de Inicio </title>
</head>
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
    const PUBLIC_KEY = 'TEST-4554a482-f08b-469c-a749-5efd5b172077';
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

    <div class="contenedorgrande">
        <div class="boton">
            <button><a href="../vistas/index_pago.php"><i class="fa-solid fa-circle-arrow-left"></i></a></button>
        </div>
        <div class="contenedorformdiv">
            <div class="descmaspago">
                <div class="desc">
                    <h2> Suscripción <?php echo $_POST['plantype'] ?></h2>
                    <p>
                        <?php
                        if($_POST['plantype'] == "Mixto"){
                            ?>
                            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                        cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
                        galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                        No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos e
                        lectrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación
                        de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum,
                        y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker,
                        el cual incluye versiones de Lorem Ipsum.
                    </p>
                            <?php
                        }?>
                        <?php
                        if($_POST['plantype'] == "Virtual"){
                            ?>
                            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                        cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
                        galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                        No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos e
                        lectrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación
                        de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum,
                        y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker,
                        el cual incluye versiones de Lorem Ipsum.
                    </p>
                            <?php
                        }?>
                        <?php
                        if($_POST['plantype'] == "Presencial"){
                            ?>
                            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                        cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
                        galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                        No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos e
                        lectrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación
                        de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum,
                        y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker,
                        el cual incluye versiones de Lorem Ipsum.
                    </p>
                            <?php
                        }?>
                        
                </div>
                <div class="formabajo">
                    <div class="cho-container"></div>
                </div>
            </div>
            <style>
                .cho-container {
                    position: relative;
                    left: 45%;
                    max-height: fit-content;
                    height: fit-content;
                    width: fit-content;
                    max-width: 20%;
                }
            </style>
        </div>
        <div class="footer-basic">
            <footer>
                <div class="social">
                    <a href="#"><i class="icon ion-social-instagram"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                    <a href="#"><i class="icon ion-social-twitter"></i></a>
                    <a href="#"><i class="icon ion-social-facebook"></i></a>
                </div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Inicio</a></li>
                    <li class="list-inline-item"><a href="#">Servicios</a></li>
                    <li class="list-inline-item"><a href="#">Acerca de</a></li>
                    <li class="list-inline-item"><a href="#">Quienes somos?</a></li>
                </ul>
                <p class="copyright">SmartGym © 2022</p>
            </footer>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>