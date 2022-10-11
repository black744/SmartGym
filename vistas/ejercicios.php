<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloejerciciop.css">
    <title>Ejercicios</title>
</head>

<body>

    <hr>
    <h2> Ejercicio</h2>
    <hr>


    <div class="ejercicio">
        <form action="rutinausuarioe.php" method="POST">
            <select name="ejercicio" id="ej-s">
                <option value="">flexiones</option>
                <option value="">sentadillas</option>
                <option value="">abdominales</option>
                <option value="">caminadora</option>
            </select>
            <input class="ingreso" type="text" name="de" placeholder=" descripcion breve">
            <input class="ingreso" placeholder="Cantidad de series" type="number" id="cs" name="cs" min="1" max="5">
            <input class="ingreso" placeholder="Cantidad de repeticiones" type="number" id="cr" name="cr" min="1" max="20">
            <input class="btng" name="guardar" type="submit" value="Submit">
        </form>
    </div>

</body>

</html>