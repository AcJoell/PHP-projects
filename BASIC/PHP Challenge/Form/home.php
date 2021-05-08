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
        <article class="sub-contain_form"> <!-- PUNTO 1 -->
            <form action="./respuestas/punto1.php" method="post"> 
                <p>1. Diseñe y realice un programa donde calcule los precios de alimentos para diferentes pesajes.</p><br>
                <p>ALIMENTO: <input type="text" name="nombre" placeholder="Food" /></p>
                <p>PESO en Gr: <input type="number" name="peso" placeholder="Gramos" min=50 max=40000 required /></p>
                <input class="boton" type="submit">
            </form>
        </article>
        <article class="sub-contain_form"> <!-- PUNTO 2 -->
            <form action="./respuestas/punto2.php" method="get">
                <p>2. Elabore un programa que calcule cuantas calorías quema para diferentes tiempos de caminata. Utilice el Método GET.</p><br>
                <input type="text" name="nombre" placeholder="Nombre"/>
                <p>Horas:</p><output id="textoHora" for="horas"></output> <!-- Hacemos una relacion deloutput al input con tipo range para que almacene el valor de este -->
                <input id="hora" type="range" name="horas" min=1 max=20 required/> <!-- Utilizamos un script para poder hacer que este funcione (final del body) -->
                <input class="boton" type="submit" value="Consultar">
            </form>
        </article>
        <article class="sub-contain_form"> <!-- PUNTO 3 -->
            <form action="./respuestas/punto3.php" method="post">
                <p>3. Realice un programa para calcular cuánto cuesta la gasolina para realizar distintos viajes.</p><br>
                <input type="text" name="origen" placeholder="Origen"/>
                <input type="text" name="destino" placeholder="Destino"/>
                <input type="number" name="km" placeholder="Kilometros" min=1 max=5000 required/>
                <input class="boton" type="submit" value="Consultar">
            </form>
        </article>
        <article class="sub-contain_form"> <!-- PUNTO 4 -->
            <form action="./respuestas/punto4.php" method="post">
                <p>4. Elabore un programa para calcular el costo de parqueo de un automóvil en los diferentes escenarios de tiempo.</p><br>
                <input type="text" name="carro" placeholder="Carro"/>
                <p>Horas: </p>
                <input id="hCarro" type="range" name="horasParq" min=1 max=100 required/>
                <output id="txtHcarro" for="horasParq"></output>
                <input class="boton" type="submit" value="Consultar">
            </form>
        </article>
    </section>
    <!-- Boton de cambiar pantalla -->
    <section class="cont-form">
        <a href="./ventana2.php">Siguiente</a>
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
        const barra = document.querySelector('#hora')
        const texto = document.querySelector('#textoHora')
        const barra2 = document.querySelector('#hCarro')
        const texto2 = document.querySelector('#txtHcarro')

        // LE DAMOS RELACION ENTRE LA BARRA Y EL OUTPUT(NUMERO) DIRECTAMENTE
        // TEXT CONTENT EL VALOR DEL OUTPUT Y VALUE EL VALOR DEL RANGE, SE ASOCIAN
        texto.textContent = barra.value
        texto2.textContent = barra2.value

        // AL MOMENTO DE CAMBIAR DE DATO EN LA BARRA SE VA A ACTUALIZAR EL OUTPUT
        // UN EVENTO LISTENER PARA QUE SE ACTUALICEN AMBOS AL MARGEN, AL IGUAL COMO AFUERA,
        // LO HACEMOS POR DENTRO DE UNA FUNCION PARA QUE EL VALOR CAMBIE CADA QUE EL RANGO CAMBIE
        barra.addEventListener('input', function() {
            texto.textContent = barra.value
        });
        barra2.addEventListener('input', function() {
            texto2.textContent = barra2.value
        });

    </script>
</body>
</html>