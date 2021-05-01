<!-- CREADO EL 30/04/2021 POR JOEL AC (AcJoell on network) -->
<!-- Este programa recibe una cantidad segun las piezas que se piensan hacer,
dependiendo del tiempo de produccion, se hace una estimacion muy acertada con
respecto al tiempo para que la produccion de las piezas culmine (hipoteticamente) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad</title>
    <link rel="stylesheet" href="../style/style.css"/>
</head>
<body>
    <header>
        <section class="cont-header">
            <h2>PHP Challenge</h2>
        </section>
        <section class="cont-header">
            <h2>SENA</h2>
        </section>
    </header>
    <!-- Container del resultado -->
    <section class="cont-form">
        <article class="sub-contain_form"><br> <!-- PUNTO 5 -->
        <form>
        <?php
            // CREAMOS FUNCION CON UN PARAMETRO
            function piezas($cantidad){
                // DEFINIMOS UNA CONSTANTE PARA LOS MINUTOS POR PIEZA Y CON EL PARAMETRO REALIZAMOS LAS OPERACIONES REQUERIDAS
                define("tiempoXpieza",28);
                $tiempoMin = tiempoXpieza*$cantidad;
                $tiempoHor = $tiempoMin / 60;
                // ENVIAMOS MENSAJE
                echo "La maquina se demora:<br>".$tiempoMin." minutos o ".$tiempoHor." horas<br>para cumplir con su pedido<br><br>";
            }
            // ENVIAMOS MENSAJE DE INFORMACION Y DATOS
            echo "DATA: " .$_GET['nombre']. " con " .$_GET['cant']. " unidades.<br><br>";

            // LLAMAMOS LA FUNCION CON EL PARAMETRO REQUERIDO
            piezas($_GET['cant']);
        ?>
        </form>
        </article>
    </section>
    <section class="cont-form">
        <a href="../ventana2.php">Volver</a>
    </section>
</body>
</html>

