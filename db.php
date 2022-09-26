<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="registro";

    $conex=mysqli_connect($host,$user,$pass);

    mysqli_select_db($conex,$bd);

    return $conex;
}
function formatearFecha($fecha){
return date ('g:i a', strtotime($fecha));

}
?>