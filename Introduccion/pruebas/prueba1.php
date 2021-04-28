<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tablas de multiplicar</h1>
    <?php
        for($i=2;$i<5;$i++){
            echo "<h2>TABLA DEL $i</h2>";
            for($j=1;$j<=10;$j++){
                echo "<h3>$i * $j = ".$i*$j."</h3>";
            }
        }
    ?>
</body>
</html>