<?php include("../db.php");
$conex=conectar();


?>
<style>
  .table{
    
    background-color:red;
    margin-left: -22vh;
    height: 20vh;
    width: 20vh;
  }
  </style>

  <table class="table" id="tabla">
                <thead>
                    <tr>
                        <th>Entrenador</th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miercoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                        <th>Sabado</th>
                        <th>Domingo</th>
                        

                    </tr>
                </thead>
                <form method="POST">
                <?php

$buscador=mysqli_query($conex,"SELECT * FROM entrenadores_horarios WHERE usuario LIKE LOWER('%".$_POST["buscar"]."%')");
 
 while($resultado = mysqli_fetch_assoc($buscador)){ 
?>

                <tr>

                    <td><input type="submit" name="carlosxd" value="<?php echo $resultado['usuario'];?>"><?php echo $resultado['usuario'];?></td>
                    <td><?php echo $resultado['lunes'];?></td>
                    <td><?php echo $resultado['martes'];?></td>
                    <td><?php echo $resultado['miercoles'];?></td>
                    <td><?php echo $resultado['jueves'];?></td>
                    <td><?php echo $resultado['viernes'];?></td>
                    <td><?php echo $resultado['sabado'];?></td>
                    <td><?php echo $resultado['domingo'];?></td>
                    

                </tr>
                <?php }?>
 </form>
 
            </table>




