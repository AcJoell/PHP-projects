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
        form{
            background-color: white;
            border: solid 6px black;
            margin: 50px 50px;
            padding: 40px;
        }
        form h1{
            color: black;
        }
    </style>
</head>
<body>
    <form name="formularioDatos" method="post" action="pruebaFigura.php">
        <h2>AREA DE UN TRIANGULO </h2>
        <br>
        Base del triangulo: <input type="number" name="base" value="" min=1 max=20 required>
        <br> <br>
        Altura del triangulo: <input type="number" name="altu" value="" min=1 max=20 required>
        <br> <br>
        <input value="Calcular" type="submit" />
    </form>
</body>
</html>