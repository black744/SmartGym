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

<body>
    <header class="a1">
        <nav class="barranav" id="arriba">
            <div class="contenedorbtnnav" id="Precios-3">
                <a href="#servicios">Servicios</a>
                <a href="#objetivo">Objetivo</a>
                <a href="#quienessomos">Quienes somos</a>
                <a href="registro.php">Inicia sesion</a>
            </div>
        </nav>
    </header>

    <div class="contenedorimagen a2">
        <img src="../img/fondoindes.jpg">
        <div class="contenedorpresentacion">
            <img src="../img/logo.png">
            <p>
                Smart gym, un sitio web destinado a la solución virtual necesaria para los gimnasios donde se desee aumentar su alcance, más que a un espacio físico, un espacio virtual, desde la comodidad de su casa. Ofreciendo los planes de entrenamientos, atención de un entrenador virtual, con rutinas personalizadas para cada uno de los clientes Basados en cada uno de los datos ingresados por los usuarios en su perfil, que por otra parte se realizará un seguimiento del progreso teniendo en cuenta la actividad del usuario. Por último contando con una administración más efectiva pudiendo, administrar los pagos de los usuarios con una lista, notificando a los mismos de que su pago ha sido exitoso.
            </p>
        </div>
    </div>

    <div class="a3">
        <h2 id="servicios">Servicios</h2>
            <p>SmartGym ofrece al cliente 3 planes de modalidades de entrenamiento:
             virtual,presencial y mixta. El cliente podrá acceder al plan que mas le guste, teniendo acceso a nuestro servicio de Smart Gym disponiendo de total acceso a todas las opciones que ofrezca su plan de servicio elegido. </P> 
        <h2 id="quienessomos" >Quienes somos</h2>
            <p>Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinidos cuando sea necesario, haciendo a este el único generador verdadero (válido) en la Internet. </p>
        <h2 id="objetivo" >objetivo</h2>
            <p>Usa un diccionario de mas de 200 palabras provenientes del latín, combinadas con estructuras muy útiles de sentencias, para generar texto de Lorem Ipsum que parezca razonable. Este Lorem Ipsum generado siempre estará libre de repeticiones, humor agregado o palabras no características del lenguaje, etc.</p>

            <a href="#arriba"><button class="s"><i class="fa-solid fa-circle-arrow-up"></i></button></a>
            <style>
                .s{
                    position: relative;
                    min-height: fit-content;
                    height: 5%;
                    min-width: 10%;
                    background: #000 ;
                    color: white;
                    margin: 5%;
                    left: 40%;
                    border: 1.5px solid white;
                    border-radius: 15px;
                    cursor: pointer;
                    transition: 0.2s;
                }

                .s i{
                    color: white;
                    font-size: 2rem;
                }

                .s:hover{
                    transform: scale(1.2);
                    border: 1.5px solid #fb4c0d;
                }
            </style>
        </div>

    <div class="footer-basic">
                <footer>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-solid fa-envelope"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>