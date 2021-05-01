<!-- CREADO EL 30/04/2021 POR JOEL AC (AcJoell on network) -->
<!-- Este programa recibe una longitud para darle limite a la factorizacion del numero ingresado
este imprime exactamente su factorizacion, junto con su proceso debido y su secuencia guardado
al final mostramos el valor de este, para un resultado mas completo. -->
<!-- CREANDO HTML -->
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
        <article class="sub-contain_form"> <!-- PUNTO 7 -->
        <form>
        <?php
            // declaramos datos prmordiales
           $secuencia = array();
           $valor =1;
           $valorFinal=0;
           // CREAMOS FUNCION CON UN PARAMETRO DE LONGITUD
            function fibonacci($longitud){
                // llamamos variables fuera del scope con ayuda del global
               global $secuencia, $valor, $valorFinal;
               
               // Resultado en caso de que el parametro sea 7: Secuencia = 1 * 2 * 3 * 4 * 5 * 6 * 7 = 5040

               for($i=2;$i<=$longitud;$i++){ // lo iniciamos en 2 debido a que lo multiplicamos primeramente con $valor
                echo $valor." * ".$i." = "; // imprimimos la operacion antes de que $valor cambie
                    $valor*= $i; // $valor obtiene nuevo resultado
                   echo $valor."<br>"; // imprimimos el resultado de la operacion en la linea 40
                   $secuencia[$i] = $valor; // guardamos el valor antes de que cambie en un array (guardamos el recorrido de la factorizacion)
               }
               echo "<br>";
               // foreach para recorrer el array sin complicarnos
               foreach($secuencia as $print=>$pri){  // $print es la posicion del resultado $pri que guardamos en el for anterior, por eso utilizamos el => (arrow) para poder traer su resultado
                   echo $pri. " | "; // imprimimos
               }
               // mensaje final
               echo "<br>";
               echo "<br>El factorial de ".$longitud." es de ".$valor;
            }        
            
            // LLAMAMOS LA FUNCION CON EL PARAMETRO REQUERIDO
            fibonacci($_POST['vector']);
        ?>
        </form>
        </article>
    </section>
    <section class="cont-form">
        <a href="../ventana2.php">Volver</a>
    </section>
</body>
</html>

