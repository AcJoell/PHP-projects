<?php
    include "save.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $per1=new Persona(); // per1 es un objeto
    $per1->inicializar($_POST["nombre"]); // per1 le da valor a su atributo a partir de _POST para traer el valor del formulario
    $per1->imprimir(); // per1 imprime
    ?>
    <br>
    <a href="create.php">Atras</a>
</body>
</html>