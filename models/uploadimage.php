<?php
include("../db.php");
$conex=conectar();
session_start();
$nusuario = $_SESSION['usuario'];

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert="UPDATE datos SET image='$imgContent',created='$dataTime' where usuario='$nusuario'";
        $query=mysqli_query($conex,$insert);
        if($insert){
            echo "File uploaded successfully.";
            header("Status: 301 Moved Permanently");
            header("Location: ../vistas/perfilusuarioc.php");
            exit;
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>