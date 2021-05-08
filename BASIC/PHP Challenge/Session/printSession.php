<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimiendo el contenido de la sesión | PHP | AcJoell</title>
</head>
<body>
    <?php
      session_start(); // Instanciamos una sesion para poder obtener las variables

      // Capturamos la variable dentro de otra variable
      // con ayuda de $_SESSION[nombreVar]
      $nom=$_SESSION['Nombre'];
      $eda=$_SESSION['Edad'];
      $ubi=$_SESSION['Ubicacion'];

      // Imprimimos las variables de otro php con SESSION
      echo "<h2>Nombre:<code> $nom</code></h2>";
      echo "<h2>Edad:<code> $eda</code></h2>";
      echo "<h2>Ubicacion:<code> $ubi</code> </h2>";

    ?>
    <h3><a href="closeSession.php">Cerrar sesión</a></h3>
</body>
</html>