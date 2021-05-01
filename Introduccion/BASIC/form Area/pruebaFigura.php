<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            justify-content= center;
            background-color: lightcyan;
            color: blue;
        }
        h3{
            color: black;
            font-weight: 700;
            font-family: Verica;
        }
        button{
            background-color: white;
            border: dashed 2px black;
            margin: 5px 10px;
            padding: 10px;
        }
        a{
            text-decoration: none;
            padding:10px;
            border: 2px solid darkblue;
            background: white;
            color: black;
        }
    </style>
</head>
<body>
    <br>
    <a href="figura.php">Volver</a>
    <?php
        // $volver = ('Location: '.$nuevaURL.php);
        $base = $_POST['base'];
        $altura = $_POST['altu'];
        $area = ($base*$altura)/2;
        echo "<h3>El área del triangulo es: ". $area. " m2 </h3>";
    ?>
</body>
</html>