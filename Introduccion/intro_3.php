<?php
function miEdadEs($edad) { // funciones con condicionales
    if($edad>=18){echo "Eres mayor de edad";}
    else {echo "Eres menor de edad";}
}
miEdadEs(19); // llamando funcion
echo "<br>";

function mensaje($op) {
    $despedida = "Hasta luego"; // variable local
    if($op==1){echo "Que tenga un buen dia. ".$despedida;}
    elseif ($op==2) {echo "Que tenga un buena tarde. ".$despedida;}
    elseif ($op==3) {echo "Que tenga un buena noche. ".$despedida;}
    else {echo "Respuesta erronea. ".$despedida;}
}
mensaje(1);
echo "<br>";

function salario($salario,$hora_extra){
  if ($hora_extra<0||$hora_extra>10){
      echo "- - ERROR - - LIMITE DE 0 A 10 HORAS EXTRA - - ERROR - -";
      return exit; // finalizamos en caso de que la condicion sea true
  }
  $ttlHoraExtra = $hora_extra * 12850;
  $ttlFinal = $ttlHoraExtra + $salario;
  echo "<br>Salario fijo: $$salario | Horas extra: $$ttlHoraExtra |<br>";
  echo "Ud se gano $$ttlFinal"; // podemos llamar variables (locales) dentro de las comillas
}

salario(855000,10); // llamando con doble parametro
echo "<br>";

echo "<br> - - - - - - - <br>";

echo "1. Triangulo<br>2. Circulo<br>3. Rectangulo<br>";

function hallarAreaDe($op){
    switch ($op) { // utilizando switch - case - break - deafutl
    case 1: // en caso de que el parametro sea x numero
        echo "- - - HALLANDO EL AREA DE UN TRIANGULO - - -<br><br>";
            $b=5;$h=10; $c =($b*$h)/2;
            echo "Base: " .$b. "mts <br>" 
            ."Altura: " .$h. "mts <br>".
            "El area del triangulo es: ".$c;
        break; // sirve para que no se ejecuten igualmente todos los casos
    case 2:
        echo "<br><br>- - - HALLANDO EL AREA DE UN CIRCULO - - -<br><br>";
        $radio=20;
        $op=(pi()*($radio^2));
        echo "Radio: " .$radio. "<br>" 
        ."Operacion: pi * r^2 <br>".
        "El area del circulo es: ".$op;
        break;
    case 3:
        echo "- - - HALLANDO EL AREA DE UN RECTANGULO - - -<br><br>";
        $b=5;$h=10; $c=$b*$h;
        echo "Base: " .$b. "mts <br>" 
        ."Altura: " .$h. "mts <br>".
        "El area del rectangulo es: ".$c;
        break;
    default: // en caso de que no se cumpla algun caso entonces por defecto se ejecutara este
        echo "OPCION INCORRECTA - - - ESCOJA DE 1 A 3";
        break;
    }
}
hallarAreaDe(2); // llamamos funcion

echo "<br> - - - - - - - <br>";

function setHeight(int $minheight = 50) { // DAR VALOR POR DEFECO
    echo "The height is : $minheight <br>"; // PRINT
  }
  
  setHeight(350);
  setHeight(); // will use the default value of 50
  setHeight(135);
  setHeight(80);

  echo "<br> - - - - - - - <br>";

  function addNumbers(float $a, float $b) : float { // ESPECIFICAMOS EL TIPO DE RETORNO
    return $a + $b;
  }
  echo addNumbers(1.2, 5.2);

  echo "<br> - - - - - - - <br>";

  function addNumbers(float $a, float $b) : int { // ESPECIFICAMOS EL TIPO DE RETORNO
    return (int)($a + $b); // EN ESTE CASO EL RESULTADO PASARA A INT
  }
  echo addNumbers(1.2, 5.2); // 6

  echo "<br> - - - - - - - <br>";

  function add_five(&$value) { // SIRVE PARA GUARDAR LA RESPUESTA QUE SE DA POR PARAMETRO (O ARGUMENTO)
    $value += 5;
  }
  
  $num = 2;
  add_five($num); // SE GUARDA LA RESPUESTA EN EL ARGUMENTO
  echo $num; // SE IMPRIME EL ARGUMENTO CON EL VALOR GUARDADO

?>