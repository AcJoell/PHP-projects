<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrando y destruyendo la sesión | PHP | AcJoell</title>
</head>
<body>
    <?php   
        session_start(); // Abrimos la sesión
        session_unset(); // Cerramos la sesión y junto a ella todas las variables
        session_destroy(); // Destruye toda la sesión sin dejar rastro de ella
    ?>
    <h2>Se ha cerrado la sesión satisfactoriamente</h2>
    <em>
        Deberia de salir error al revisar,
        eso da a entender de que la sesion
        fue cerrada de manera correcta</em>
    <h3><a href="conclusion.php">Session Review</a></h3>
</body>
</html>