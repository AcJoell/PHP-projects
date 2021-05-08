<!-- CREADO EL 30/04/2021 POR JOEL AC (AcJoell on network) -->
<!-- Este programa recibe el origen, destino y distancia entre ciudades donde la persona
quiera hacer un recorrido, esta nos indica sudistancia entre punto y punto, y con ello sacamos 
reultados a partir del valor de la gasolina sobre cuanto requiere tanto en galones como su precio. -->
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
    <!-- Contenedor de la respuesta -->
    <section class="cont-form">
        <article class="sub-contain_form"> <!-- PUNTO 3 -->
        <form>
        <?php
            // creamos una variable que guarde el precio de una variable
            $galon = 9250;
            // CREAMOS FUNCION CON UN PARAMETRO
            function gasolina($distancia){
                // llamamos a la funcion galon con el metodo global, que permite traer variables fuera del scope
                global $galon;
                // DEFINIMOS LOS DATOS A MOSTRAR
                $galonXviaje = $distancia/40;
                $precioGalones = $galon*$galonXviaje;

                // ENVIAMOS UN MENSAJE Y TERMINA LA FUNCION
                echo "Ud debe de tener ".$galonXviaje." galones para poder viajar <br>";
                echo "El precio total en galones es de $".$precioGalones."<br>";
            }        
            
            // ENVIAMOS MENSAJE DE INFORMACION
            echo "Datos:<br><br>";
            echo "Origen: " .$_POST['origen']." |.|.|.| Destino: ".$_POST['destino']."<br>";
            echo "Distancia: ".$_POST['km']." |.| Precio Galon:".$galon."<br>";
            echo "_______________________________________<br><br>";
            // LLAMAMOS LA FUNCION CON EL PARAMETRO REQUERIDO
            gasolina($_POST['km']);
        ?>
        </form>
        </article>
    </section>
    <section class="cont-form">
        <a href="../home.php">Volver</a>
    </section>
</body>
</html>

