<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome Get!</h1>
    <?php 
    echo "Your NAME is: ".$_GET["nameGet"]; 
    echo "<br>";
    echo "Your EMAIL is: ".$_GET["emailGet"]; 
    ?>
    <br><br>
    <em>NOTA: Revise la url y observe las diferencias, ya sea por POST o GET.</em>
    <br>
</body>
</html>