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
            <input type="number" placeholder="peso inicial" name="PA" required pattern="[0-9]">
            <input type="number" placeholder="edad" name="edad" required pattern="[0-9]" max="99" required>
            <select name="sexo" id="genero" class="sg">
                <option>Selecciona genero</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
            <input class="btn-r" type="submit" name="buttonreg" value="Registrarse">
        </form>
    </div>
    <script src="../js/appregistro.js"></script>

    <style>
        .sg {
            margin-bottom: 6%;
            min-height: 5vh;
            min-width: fit-content;
            width: 70%;
            text-align: center;
            background: var(--color-fondobotones);
            color: var(--color-letra);
            border: 3px solid var(--color-bordes-normales);
            border-radius: 15px;
            transition: 0.3s;
            cursor: pointer;
            font-size: 1rem;
        }
    </style>

</body>

</html>