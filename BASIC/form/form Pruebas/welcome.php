<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>METODO POST</h2>
    <p>Se utiliza para informacion confidencial, porque la informacion 
    enviada en confidencial, no hay limites</p>

    <h2>METODO GET</h2>
    <p>Se utiliza para informacion basica, no confidencial,
    debido a que esta muestra en la url los datos registrados.
    Limite de 2000 caracteres</p>

    <br>
    <em>NOTA: Revise la url y observe las diferencias, ya sea por POST o GET.</em>
    <br>
    
    <hr>
    <h3>Ejemplo POST</h3>
    <form action="pruebaPost.php" method="post">
        <input type="text" placeholder="Nombre" name="namePost">
        <br>
        <input type="text" placeholder="Email" name="emailPost"><br><br>
        <input type="submit">
    </form>

    <br><hr>
    <h3>Ejemplo GET</h3>
    <form action="pruebaGet.php" method="get">
        <input type="text" placeholder="Nombre" name="nameGet">
        <br>
        <input type="text" placeholder="Email" name="emailGet"><br><br>
        <input type="submit">
    </form>

</body>
</html>