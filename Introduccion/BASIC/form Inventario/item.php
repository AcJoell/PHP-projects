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
        form{
            background: #aad8d3;
            border: 2px double black;
            display:flex;
            flex-direction: column;
            font-weight:bold;
            padding: 5px 50px 15px;
            margin: 4px 30px;
        }
        form input{
            width: 100px;
            background:#eeeeee;
        }
        .boton{
            margin-top:3px;
            padding: 5px 10px;
            align-self: center;
            background: #00adb5;
            color: #eeeeee;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <h1>Items</h1>
        </div>
    </header>
    <section>
        <article>
            <form method="post" action="pruebaItem.php">
                <p>CODE ID:  <input type="number" name="code" min=1 max=20 required/> </p>
                <p>NOMBRE:  <input type="text" name="name"/> </p>
                <p>CANTIDA:  <input type="number" name="cant" min=1 max=12 required/> </p>
                <p>VLR UNIT:  <input type="number" name="vlr" min=1 max=99999 required/> </p>
                <input class="boton" value="Operar" type="submit" />
            </form>
        </article>
    </section>
</body>
</html>