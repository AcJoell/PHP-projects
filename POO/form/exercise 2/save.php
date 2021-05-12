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
        class Numeros { // clase numeros
            private $numero1; // creando atributos
            private $numero2;
            public function instanciar($n1, $n2){ // argumentos para instanciar clase
                $this->numero1 = $n1; // asignamos valor a atributos a partir de argumentos
                $this->numero2 = $n2;
            }
            public function imprimir(){ //funcion para imprimir
                echo "Number 1: ". $this->numero1;
                echo "<br>Number 2: ". $this->numero2;
            }
            public function imprimirArea(){ // hallando el area
                $area = $this->numero1 * $this->numero2;
                echo "<br>Area: ".$area;
            }
        }
    ?>
</body>
</html>