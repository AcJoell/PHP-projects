<?php

echo "- - - HALLANDO EL AREA DE UN TRIANGULO - - -<br><br>"; 

// Implementando funciones con parametros
function areaTriangulo ($b,$h) {
    $c =($b*$h)/2;
    echo "Base: " .$b. "mts <br>" 
    ."Altura: " .$h. "mts <br>".
    "El area del triangulo es: ".$c;
}
areaTriangulo(5,14); // llamando funciones con Parametros

echo "<br><br>- - - HALLANDO EL AREA DE UN CIRCULO - - -<br><br>";
function areaCirculo ($radio) {
    $op = (pi()($radio$radio)); // pi tiene como valor guarda el pi (3.14159...)
    echo "Radio: " .$radio. "<br>" 
    ."Operacion: pi * r^2 <br>".
    "El area del circulo es: ".$op;
}
areaCirculo(20); // llamando funciones con Parametros

?>