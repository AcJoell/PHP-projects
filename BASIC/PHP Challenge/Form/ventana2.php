<!-- CREANDO HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad</title>
    <link rel="stylesheet" href="./style/style.css"/>
</head>
<body>
    <!-- Header de la pagina -->
    <header>
        <section class="cont-header">
            <h2>PHP Challenge</h2>
        </section>
        <section class="cont-header">
            <h2>SENA</h2>
        </section>
    </header>
    <!-- Seccion del container del formulario -->
    <section class="cont-form">
        <!-- formulario del punto -->
        <!-- Lo envio con action a otro archivo php -->
        <!-- con name exporto el valor para utilizarlo en el otro php -->
        <!-- con el type ubmit, cumple con el action finalizando el formulario -->
        <!-- Asi con cada article y form -->
        <article class="sub-contain_form"> <!-- PUNTO 5 -->
            <form action="./respuestas/punto5.php" method="get">
                <p>5. Desarrolle un programa que calcule el número de horas gastadas para ensamblar x número de piezas. Utilice el Método GET.</p><br>
                <p>Nombre: <input type="text" name="nombre" placeholder="Pieza" /></p>
                <p>Piezas: <input type="number" name="cant" placeholder="Cantidad" min=10 max=1000 required /></p>
                <input class="boton" type="submit">
            </form>
        </article>
        <article class="sub-contain_form"> <!-- PUNTO 6 -->
            <form action="./respuestas/punto6.php" method="post">
                <p>6. Realice un programa que calcule los pagos adicionales y el total del consumo del agua. Aplique function y Variables GLOBAL para resolver este problema.</p><br>
                <p>M3 de agua consumidos: </p><output id="textoAgua" for="agua"></output> <!-- Hacemos una relacion deloutput al input con tipo range para que almacene el valor de este -->
                <input id="agua" type="range" name="agua" min=1 max=50 required/> <!-- Utilizamos un script para poder hacer que este funcione (final del body) -->
                <input class="boton" type="submit" value="Consultar">
            </form>
        </article>
        <article class="sub-contain_form"> <!-- PUNTO 7 -->
            <form action="./respuestas/punto7.php" method="post">
                <p>7. Realice un programa donde capture un numero positivo y calcule y muestre la respectiva <em>SECUENCIA FIBONACCI</em>, utilice loops, funciones y variables GLOBAL.</p><br>
                <input type="number" name="long" placeholder="Longitud" min=1 max=200 required/>
                <input class="boton" type="submit" value="Consultar">
            </form>
        </article>
        <article class="sub-contain_form"> <!-- PUNTO 8 -->
            <form action="./respuestas/punto8.php" method="post">
                <p>8. Realice un programa donde capture un número positivo y calcule y muestre el Factorial del número, utilice loops, funciones y variables GLOBAL.</p><br>
                <input type="number" name="vector" placeholder="Longitud" min=1 max=200 required/>
                <input class="boton" type="submit" value="Consultar">
            </form>
        </article>
    </section>
    <!-- Boton de volver atras (cambiar pantalla) -->
    <section class="cont-form">
        <a href="./home.php">Volver</a>
    </section>
    <footer>
        <section class="cont-footer">
            <h2>AcJoell</h2>
        </section>
        <section class="cont-footer">
            <h2>ADSI</h2>
        </section>
    </footer>
    <script>
        // TRAEMOS LA BARRA Y EL OUTPUT (NUMERO) CON EL QUERY SELECTOR LLAMANDO SU ID
        const barra = document.querySelector('#agua')
        const texto = document.querySelector('#textoAgua')

        // LE DAMOS RELACION ENTRE LA BARRA Y EL OUTPUT(NUMERO) DIRECTAMENTE
        // TEXT CONTENT EL VALOR DEL OUTPUT Y VALUE EL VALOR DEL RANGE, SE ASOCIAN
        texto.textContent = barra.value

        // AL MOMENTO DE CAMBIAR DE DATO EN LA BARRA SE VA A ACTUALIZAR EL OUTPUT
        // UN EVENTO LISTENER PARA QUE SE ACTUALICEN AMBOS AL MARGEN, AL IGUAL COMO AFUERA,
        // LO HACEMOS POR DENTRO DE UNA FUNCION PARA QUE EL VALOR CAMBIE CADA QUE EL RANGO CAMBIE
        barra.addEventListener('input', function() {
            texto.textContent = barra.value
        });

    </script>
</body>
</html>