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
        $carlos = new Numeros(); // creamos el objeto
        $carlos->instanciar($_POST["num1"],$_POST["num2"]); // instanciamos con los datos del formulario
        $carlos->imprimir(); // imprimimos numeros
        $carlos->imprimirArea(); // imprimimos area
    ?>
    <br>
    <a href="create.php">Atras</a>
</body>
</html>