<?php

    $sql_query=mysqli_query($conex, "SELECT * FROM datos WHERE usuario='$nusuario'");
    $array=mysqli_fetch_array($sql_query);

    if($array['estado_cuenta'] == 0){
        echo("<script>alert('ERROR, Tu cuenta no esta validada, debes pagar o aguardar a que se actualice el pago.');</script>");
        echo("<script>window.location.href = '../vistas/index_pago.php';</script>");
    }
?>
