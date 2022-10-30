<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloregistro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Login Smart gym</title>
</head>

<body>
    <div class="container-form sign-in">
        <form method="POST" class="formulario" action="../models/validar.php">
            <h2 class="create-account">Iniciar Sesion</h2>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="user" placeholder="Usuario" name="usuario" required>
            <input type="password" placeholder="Contraseña" name="contraseña" required>
            <input class="btn-r" type="submit" name="buttonlog" value="Loguearse">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Smart gym</h2>
                <p>Si ya tienes una cuenta,por favor inicia sesion aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario" action="../models/registrar.php" method="POST">
            <h2 class="create-account">Crear una cuenta</h2>
            <input type="text" placeholder="Nombre" name="nombre" required>
            <input type="apellido" placeholder="Apellido" name="apellido" required>
            <input type="number" placeholder="DNI" name="dni" required pattern="[0-9]">
            <input type="Usuario" placeholder="Usuario" name="usuario" required>
            <input type="email" placeholder="Email" name="correo" required>
            <input type="password" placeholder="Contraseña" name="contraseña" required>
            <input type="number" placeholder="Edad" name="ED" required>
            <input type="text" placeholder="Domicilio" name="DC" required>
            <input type="number" placeholder="peso actual" name="PA" required pattern="[0-9]">
            <input type="number" placeholder="peso ideal" name="PI" required pattern="[0-9]">
            <input class="btn-r" type="submit" name="buttonreg" value="Registrarse">
        </form>
    </div>
    <script src="../js/appregistro.js"></script>
</body>

</html>