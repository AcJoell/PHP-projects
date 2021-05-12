<!-- CREADO EL 30/04/2021 POR JOEL AC (AcJoell on network) -->
<!-- Este programa recibe el nombre del vehiculo (sea placa o nombre) y horas, donde con ellas
calculamos el valor que el usuario debera de pagar y podra recibir un descuento 
debido a su permanencia prolongada en este parqueadero -->
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
        <article class="sub-contain_form"><br> <!-- PUNTO 4 -->
        <form>
        <?php
            // CREAMOS FUNCION CON UN PARAMETRO
            function parqueo($tiempo){
                // DEFINIMOS UNA CONSTANTE PARA EL PRECIO POR HORA
                define("precioXhora",3000);
                // DEFINIMOS PRECIO Y ENVIAMOS MENSAJE 
                $precio = precioXhora*$tiempo;
                echo "Precio normal: $".$precio."<br><br>";

                // ASIGNAMOS PROMOCION MEDIANTE CONDICIONALES, DONDE ENTRE MAS TIEMPO DENTRO DEL PARQUEADERO
                // LA PERSONA PODRA RECIBIR UN DESCUENTO UN POCO SIGNIFICATIVO
                if($tiempo>=24){
                    $precioFinal = ((precioXhora-250)*$tiempo);
                    echo "Debido a su tiempo, tiene un descuento<br>y ahora solo debe pagar: $".$precioFinal;
                } else if($tiempo>=120){
                    $precioFinal = ((precioXhora-900)*$tiempo);
                    echo "Debido a su tiempo, tiene un descuento<br>y ahora solo debe pagar: $".$precioFinal;
                } else if($tiempo>=264){
                    $precioFinal = ((precioXhora-1400)*$tiempo);
                    echo "Debido a su tiempo, tiene un descuento<br>y ahora solo debe pagar: $".$precioFinal;
                }
            }        
            // ENVIAMOS MENSAJE DE INFORMACION
            echo "Precio por hora: $3000<br><br>";
            echo "Su ".$_POST['carro']." estuvo ".$_POST['horasParq']." horas en el parquedero.<br><br>";

            // LLAMAMOS LA FUNCION CON EL PARAMETRO REQUERIDO
            parqueo($_POST['horasParq']);
        ?>
        </form>
        </article>
    </section>
    <section class="cont-form">
        <a href="../home.php">Volver</a>
    </section>
</body>
</html>

