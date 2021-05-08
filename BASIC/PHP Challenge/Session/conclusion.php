<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conclusion | PHP | AcJoell</title>
</head>
<body>
    <?php
     // Probamos esto dando a entender de que los datos creados fueron borrados :)

      session_start();

      $nom=$_SESSION['Nombre'];
      $eda=$_SESSION['Edad'];
      $ubi=$_SESSION['Ubicacion'];

    ?>
    <h3><a href="index.php">Back to Start</a></h3>
</body>
</html>