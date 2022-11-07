<?php
include('../db.php');
$conex = conectar();
session_start();
if (isset($_POST['buttonreg'])) {


    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $dni = $_POST['dni'];
    $correo = $_POST['correo'];
    $apellido = $_POST['apellido'];
    $contraseña = $_POST['contraseña'];
    $consulta = "INSERT INTO datos(id_rol, nombre, apellido, correo, contraseña, dni, usuario, image, edad, sexo) VALUES ('1', '$nombre', '$apellido', '$correo','$contraseña','$dni','$usuario', '0', '$edad', '$sexo')";

    //$resultado = mysqli_query($conex,$consulta);

    if ($conex->query($consulta) === TRUE) {

        echo ("<script>alert('Registro Satisfactorio! Espere a que un administrador valide el pago');</script>");
        echo ("<script>window.location.href = '../vistas/index.php';</script>");
    } else {
        echo "Los datos ingresados ya  corresponden a un usuario de SmartGym";
        echo "Error: " . $consulta . "<br>" . $conex->error;
    }
}
