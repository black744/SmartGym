<?php include ("conexion.php");




$buscardor=mysqli_query($conexion,"SELECT * FROM articulos WHERE nombre LIKE LOWER('%".$_POST["buscar"]."%')"); 
 while($resultado = mysqli_fetch_assoc($buscardor)){ 
?>






<div class="col-4">
<div class="card shadow-sm">
<img src="img/<?php echo $resultado["img"]; ?>.jpg" alt="">
  <div class="card-body">
    <p class="card-text"><?php echo $resultado["nombre"]; ?></p>
    <div class="d-flex justify-content-between align-items-center">
      <div class="btn-group">
      
      <form id="formulario" name="formulario" method="post" action="cart.php">
      
        <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
        <button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
          <input name="ref" type="hidden" id="ref" value="mu001" />                           
          <input name="precio" type="hidden" id="precio" value="200" />
          <input name="titulo" type="hidden" id="titulo" value="Mueble madera moderno" />
          <input name="cantidad" type="hidden" id="cantidad" value="2" class="pl-2" />

      </form>

      </div>
      <small class="text-muted"><?php echo $resultado["precio"]; ?>€</small>
    </div>
  </div>
</div>
</div>


<?php } ?>
