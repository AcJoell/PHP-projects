<!-- CREADO EL 30/04/2021 POR JOEL AC (AcJoell on network) -->
<!-- Este programa recibe el nombre del usuario y las horas recorridas a pie,
la persona recibe el total de calorias quemadas ademas de que si tuvo una exposicion prolongada
a muchas horas de caminar mas calorias adicionales puede quemar debido a su exigencia fisica. -->
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
    <!-- Contenedor de los formularios -->
    <section class="cont-form">
        <article class="sub-contain_form"> <!-- PUNTO 2 -->
        <form>
        <?php
            // CREAMOS FUNCION CON DOS PARAMETROS
            function calorias($nombre, $tiempo){
                // DEFINIMOS UNA CONSTANTE PARA LA CALORIA X HORA DE CAMINATA
                define("caloriaXhora",30);
                $adicional = 0;
                // DEFINIMOS UN PROMEDIO TOTAL
                $caloriasQuemadas = caloriaXhora*$tiempo;

                // ENVIAMOS MENSAJE DE INFORMACION
                echo "Datos: ";
                echo $_GET['nombre']." camino durante ".$_GET['horas']." horas";
                echo "<br><br>";

                // ASIGNAMOS CONDICIONALES DONDE SI LA PERSONA CAMINA POR UN TIEMPO PROLONGADO ESTA HACIENDO MAS EXIGENCIA
                // A SU CUERPO, POR ENDE SUBEN MAS LA CALORIAS QUEMADAS
                if($tiempo>=2){
                    $adicional= $caloriasQuemadas + 15;
                } else if($tiempo>=5){
                    $adicional= $caloriasQuemadas + 19;
                } else if($tiempo>=8){
                    $adicional= $caloriasQuemadas + 23;
                } else if($tiempo>=11){
                    $adicional= $caloriasQuemadas + 28;
                }
                // ENVIAMOS UN MENSAJE Y NOS SALIMOS
                echo "Ud quemo ".$caloriasQuemadas." calorias <br>";
                echo "Mas el esfuerzo hecho quemo en total ".$adicional." calorias";
            }        

            // LLAMAMOS LA FUNCION CON LOS PARAMETROS REQUERIDOS _GET
            calorias($_GET['nombre'],$_GET['horas']);
        ?>
        </form>
        </article>
    </section>
    <section class="cont-form">
        <a href="../home.php">Volver</a>
    </section>
</body>
</html>

