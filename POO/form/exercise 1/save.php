<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Creamos clase
        class Persona {
            private $nombre; // atributo nombre
            public function inicializar($nom) { //funcion de inicializar 
            $this->nombre=$nom; // asignamos a nombre el valor del argumento
            }
            public function imprimir() { // funcion para imprimir
            echo $this->nombre;
            echo '<br>';
            }
        }
    ?>
</body>
</html>