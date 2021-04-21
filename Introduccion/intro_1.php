<?php
// Comentando lineas

/*
Comentando
mas lineas
*/

$user1 = "David";
var_dump($user1); // var_dump sirve para ver el tipo y long de la variable
$user2 = "Daniel";
var_dump($user2);
$user3 = "Ordenador";
var_dump($user3);
$mensaje = "Vete a dormir!";

// creando arreglos
define("cars", [
"Toyota",
"BMW",
"Renault",
"Jeep"
]);

echo "<br> Carro 0: " .cars[0]. "<br>"; // imprimiendo arreglos

function points(){
    
    global $mensaje, $user1, $user2; // llama variables globales para implementarlas por dentro del scope local
    static $i = 1; // crea variable estatica que aumenta cada que se llama la funcion
    // Hay que declarar dentro de la funcion 
    $w = 3.0;
    $x = 2;
    $y = 1.0;
    $z = 0;
    $puntaje = $w + $w + $w;
    
    echo "<br><hr>Puntos: <br>";
    echo $w + $x + $y;
    echo " / " .$puntaje. "<br>";
    
    if ($i == 1) { // condicional
     echo "$mensaje $user1";   
    } else if ($i == 2) {
     echo "$mensaje $user2";      
    }
    $i++;
}

function opciones() { // creando funciones
    static $i = 1; // Sirve como auto:increment cada que se ejecuta la funcion
    
    echo "<hr><br>LLAMADO $i <br>";
    
    $opcion1 = "Sabotear";
    $opcion2 = "Apagar luces";
    $opcion3 = "Cortar oxigeno";
    
    echo "Elige una opcion : <br>";
    echo "1. $opcion1 <br>";
    echo "2. $opcion2 <br>";
    echo "3. $opcion3 <br><hr>";
    $i++; // incrementando variable estatica
}

opciones();


echo "$user1: ...<br>";
echo "<br>Long name :" .strlen($user1); // strlen sirve para ver long
echo "<br>3 - 2 - 1 - 0<br>";
echo "$user1: Todas las anteriores 😅";

points();

echo "<br>- - - - - - - - - - -<br>";

opciones(); // llamando a una funcion

echo "$user2: ...<br>";
echo "<br>Long name :" .strlen($user2);
echo "<br>3 - 2 - 1 - 0<br>";
echo "$user2: La 1 y la 3 😅<br>";
$newAnswer = str_replace("La 1","El 2","$user2: La 1 y la 3 😅");
echo $newAnswer;
points();


echo "<br>- - - - - - - - - - -<br>";

opciones();

echo "$user3: ...<br>";
echo "<br>Long name :" .strlen($user3);
echo "<br>3 - 2 - 1 - 0<br>";
echo "$user3: Opcion " .(rand(1,3)). " 😅"; // rand para aleatorio
points();

// las constantes pueden entrar con facilidad a un scope global
define("DESPEDIDA","<br>- - - Hasta luego crack - - - <br>"); // creando una variable constante

echo DESPEDIDA; // imprimiendo constante

?>