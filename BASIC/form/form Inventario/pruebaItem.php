<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #393e46;
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        header{
            display:flex;
            font-family:Helvetica;
            color: #eeeeee;
            font-size: 15px;
            justify-content: center;
            align-items:center;
            height: 50px;
        }
        article{
            background: #aad8d3;
            border: 2px double black;
            display:flex;
            flex-direction: column;
            font-weight:bold;
            padding: 15px 50px 15px;
            margin: 10px 30px 20px;
        }
        div{
            display:flex;
            font-family:Helvetica;
            color: #eeeeee;
            font-size: 15px;
            justify-content: center;
        }
        .boton{
            display: inline-block;
            margin-top:3px;
            padding: 5px 10px;
            background: #00adb5;
            color: #eeeeee;
        }
    </style>
</head>
<body>

    <header>
        <div>
            <h1>Operacion</h1>
        </div>
    </header>
    <section>
        <article class="info">
            <?php
                echo "CODIGO: - - - - ".$_POST['code']."<br>";
                echo "NOMBRE: - - - ".$_POST['name']."<br>";
                echo "CANTIDAD: -- ".$_POST['cant']."<br>";
                echo "VLR UNIT: - -- ".$_POST['vlr']."<br><br>";
                $vlrTtl = $_POST['cant']*$_POST['vlr'];
                echo "VLR TTL: |º-º| |".$vlrTtl."| |º-º| ";
            ?>
        </article>
    </section>
    <div>
        <a class="boton" href="item.php">BACK</a>
    </div>
</body>
</html>