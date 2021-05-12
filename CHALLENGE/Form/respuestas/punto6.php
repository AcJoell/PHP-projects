<!-- CREADO EL 30/04/2021 POR JOEL AC (AcJoell on network) -->
<!-- Este programa recibe una cantidad precisa de metros cubicos gastados en agua por parte
de x persona, donde segun parametros de precio y otros factores en caso de despilfarro de agua
la persona debera pagar su recibo libre y como condicion cumplida (abajo) debera de pagar un monto aparte-->
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
    <!-- Contenedor del resultado -->
    <section class="cont-form">
        <article class="sub-contain_form"> <!-- PUNTO 6 -->
        <form>
        <?php
            // definimos el precio por metros cubicos de agua y una multa instanciada en 0
            $m3 = 210;
            $multa = 0;
            // CREAMOS FUNCION CON UN PARAMETRO
            function agua($cantidad){
                // llamamos con el metodo global a las variables fuera del scope
                global $m3, $multa; // y luego las utilizamos a nuestro beneficio
                $precio = $m3 * $cantidad; // se envia mensaje con respescto a la operacion
                echo "Ud debe de pagar $".$precio." libre. <br>";
                // creamos una condicional en caso de que la persona exceda la cantidad de metros cubicos, debe de pagar una suma adicional
                if($cantidad<=15){
                    echo "Ud no tiene que pagar otro monto adicional...<br>";
                } else {
                    $multa = $precio*0.7;
                    echo "Ud tiene que pagar un monto adicional de $".$multa;
                }
            }        
            // ENVIAMOS MENSAJE DE INFORMACION
            echo "Datos: El metro cubico de agua es de $$m3<br>Ud tuvo un gasto de " .$_POST['agua']. " metros cubicos<br><br>";
            // LLAMAMOS LA FUNCION CON EL PARAMETRO REQUERIDO METODO _POST
            agua($_POST['agua']);
        ?>
        </form>
        </article>
    </section>
    <section class="cont-form">
        <a href="../ventana2.php">Volver</a>
    </section>
</body>
</html>

