<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario para el examen ordinario</title>
</head>
<body>
    <h1>Formulario para el examen ordinario</h1>

    <form action="" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="18" max="99" required><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        $edad = htmlspecialchars($_POST['edad']);

        if (!empty($nombre) && !empty($email) && !empty($edad)) {
            echo "<h2>El registro fue exitoso para el usuario: $nombre.</h2>";
            echo "<h2>Con correo: $email.</h2>";
            echo "<h2>Y con edad: $edad.</h2>";
        } else {
            echo "<h2>Completa todos los campos para continuar.</h2>";
        }
    }
    ?>
</body>
</html>
