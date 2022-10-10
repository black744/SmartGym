<?php session_start();

include ("conexion.php");

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


 <!-- importante -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



</head>
<body>
     




<!-- nabvar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mi tienda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Página</a>
        </li>
        <li class="nav-item">

        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="cursor:pointer;"><i class="fas fa-shopping-cart"></i> Mi Carrito</a>

        </li>


        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" id="buscar" name="buscar" onkeyup="buscar_ahora($('#buscar').val());" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>








<!-- carrousel -->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
     <img src="img/bg1.jpg" class="img-fluid" style="width: 100%;" alt="">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Mi tienda</h1>
            <p>Descubre todo sobre nuestra tienda</p>
            <p><a class="btn btn-lg btn-primary" href="#">Accede</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="img/bg2.jpg" class="img-fluid" style="width: 100%;" alt="">

        <div class="container">
          <div class="carousel-caption">
          <h1>Mi tienda</h1>
          <p>Descubre todo sobre nuestra tienda</p>
            <p><a class="btn btn-lg btn-primary" href="#">Accede</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="img/bg3.jpg" class="img-fluid" style="width: 100%;" alt="">

        <div class="container">
          <div class="carousel-caption text-end">
          <h1>Mi tienda</h1>
          <p>Descubre todo sobre nuestra tienda</p>
          <p><a class="btn btn-lg btn-primary" href="#">Accede</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>











<!-- articulos -->
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">




     

      <div id="datos_buscador" class="container col-12 row"></div>





      
      </div>
    </div>
  </div>








  
<script type="text/javascript">
        function buscar_ahora(buscar) {
        var parametros = {"buscar":buscar};
        $.ajax({
        data:parametros,
        type: 'POST',
        url: 'buscador.php',
        success: function(data) {
        document.getElementById("datos_buscador").innerHTML = data;
        }
        });
        }
        buscar_ahora();
</script>





  










        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>


</body>
</html>