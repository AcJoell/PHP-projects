<!-- CREADO EL 30/04/2021 POR JOEL AC (AcJoell on network) -->
<!-- Este programa recibe el nombre del alimento y el peso que la persona piensa comprar (hipoteticamente),
el precio del gramo esta definido por $5 donde dependiendo de la cantidad de gramos se le hace un descuento a la persona. -->

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
    <!-- Container de los formularios -->
    <section class="cont-form">
        <article class="sub-contain_form"> <!-- PUNTO 1 -->
        <form>
        <?php
            // CREAMOS FUNCION CON DOS PARAMETROS
            function pesajes($comida, $peso){
                // DEFINIMOS UNA CONSTANTE PARA EL PESO
                define("precioXgramo",5);
                $promo = 0;
                // DEFINIMOS SU PRECIO
                $precio = precioXgramo*$peso;

                // ENVIAMOS MENSAJE DE INFORMACION
                echo "Alimentos: ";
                echo $_POST['nombre']." * ".$_POST['peso']." gr";
                echo "<br><br>";


                // ASIGNAMOS PROMOCION A CONDICIONALES
                if($peso>=2000){
                    $promo= $precio - (($precio/10)*3);
                } else if($peso>=4000){
                    $promo= $precio - (($precio/10)*4);
                } else if($peso>=600){
                    $promo= $precio - (($precio/10)*5);
                } else if($peso>=8000){
                    $promo= $precio - (($precio/10)*6);
                } else {
                    // ENVIAMOS UN MENSAJE Y COMO RETORNO NOS SALIMOS
                    echo "Sale en $".$precio."<br>";
                    echo "Ud no cuenta con promocion";
                    
                }
                // ENVIAMOS UN MENSAJE Y COMO RETORNO NOS SALIMOS
                echo "Sale en $".$precio."<br>";
                echo "Con la promocion $".$promo;
                
            }

            // LLAMAMOS LA FUNCION CON LOS PARAMETROS REQUERIDOS
            pesajes($_POST['nombre'],$_POST['peso']);
        ?>
        </form>
        </article>
    </section>
    <section class="cont-form">
        <a href="../home.php">Volver</a>
    </section>
</body>
</html>