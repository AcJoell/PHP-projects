<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abriendo y guardando variables en una sesión | PHP | AcJoell</title>
</head>
<body>
    <?php
        session_start(); // Instanciamos una sesion para poder guardar las variables

        // Creamos variables sesion, y dentro de esta le 
        // ponemos el nombre de la variable y despues su valor
        // Sintexis: $_SESSION['nombreVar']=valorVar;

        $_SESSION['Nombre']='Sebastian'; 
        $_SESSION['Edad']=35;
        $_SESSION['Ubicacion']='Norte de California';
    ?>
    <br>
    <h2>..Se han creado y guardado las <code>variables</code> satisfactoriamente</h2>
    <h3><a href='printSession.php'>Go! Go! Go!</a></h3>
</body>
</html>