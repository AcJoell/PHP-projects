<!-- CREADO EL 30/04/2021 POR JOEL AC (AcJoell on network) -->
<!-- Este programa recibe una longitud para darle limite a la secuencia Fibonacci
este imprime exactamente esta secuencia sin ningun tipo de error con los datos precisos de este -->
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
            // instanciamos numeros principales requeridos para la secuencia Fibonacci, 0 y 1
            $num0 = 0;
            $num1 = 1;
            $secuencia = array(1); // le damos al array como primer valor un 1
            
            // CREAMOS FUNCION CON UN PARAMETRO DE LONGITUD PARA LA SECUENCIA...
            function fibonacci($longitud){
                // llamamos globalmente las variables fuera del scope
                global $secuencia, $num0, $num1;
                
                // Formula para la secuencia FIbonacci = xn-1 + xn-2
                // Resultado esperado: (abajo)
                // 1,1,2,3,5,8,13,21,34

                for($i=1;$i<=$longitud-1;$i++){
                    $z= $num0 + $num1; // utilizamos las variables que llamamos para obtener el valor de la secuencia
                    $num0 = $num1; // alternamos valores para que la variable z se actualice y se guarde en el array (mas abajo)
                    $num1 = $z; // alternamos valores
                    $secuencia[$i] = $z; // guardamos dentro del array que llamamos globalmente el resultado de la variable z que cambia constantemente
                }

                // utilizamos foreach para recorrer facilmente el array sin complicarnos
                foreach($secuencia as $print=>$pri){ // $print es la posicion del valor que queremos, por eso el => (arrow) donde llamamos a $pri que almacena la secuencia Fibonacci que guardamos en el for anterior
                    echo $pri. " | "; / imprimimos
                }
            }        
            
            // LLAMAMOS LA FUNCION CON EL PARAMETRO REQUERIDO
            fibonacci($_POST['long']);
        ?>
        </form>
        </article>
    </section>
    <section class="cont-form">
        <a href="../ventana2.php">Volver</a>
    </section>
</body>
</html>

